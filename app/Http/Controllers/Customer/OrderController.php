<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkoutForm()
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('customer.cart.index')->withErrors(['error' => 'سبد خرید شما خالی است.']);
        }

        $products = Product::whereIn('id', array_keys($cart))->get();
        $total = $products->sum(fn ($p) => $p->price * $cart[$p->id]);

        return view('customer.checkout', compact('products', 'cart', 'total'));
    }

    public function store(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('customer.cart.index')->withErrors(['error' => 'سبد خرید شما خالی است.']);
        }

        $request->validate([
            'delivery_address' => 'required|string|max:500',
            'delivery_phone' => 'required|string|max:20',
            'scheduled_time' => 'nullable|date',
            'note' => 'nullable|string',
        ]);

        $products = Product::whereIn('id', array_keys($cart))->get();

        if ($products->isEmpty()) {
            return back()->withErrors(['error' => 'محصولات سبد خرید یافت نشد.']);
        }

        $businessId = $products->first()->business_id;
        $total = $products->sum(fn ($p) => $p->price * $cart[$p->id]);

        $order = DB::transaction(function () use ($request, $products, $cart, $businessId, $total) {
            $order = Order::create([
                'customer_id' => Auth::id(),
                'business_id' => $businessId,
                'status' => 'pending',
                'total_price' => $total,
                'delivery_address' => $request->delivery_address,
                'delivery_phone' => $request->delivery_phone,
                'note' => $request->note,
                'scheduled_time' => $request->scheduled_time,
            ]);

            foreach ($products as $product) {
                $qty = $cart[$product->id];
                $order->items()->create([
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $qty,
                    'subtotal' => $product->price * $qty,
                ]);

                // کاهش موجودی
                $product->decrement('stock', $qty);
            }

            OrderStatusHistory::create([
                'order_id' => $order->id,
                'status' => 'pending',
                'changed_by' => Auth::id(),
                'note' => 'سفارش توسط مشتری ثبت شد.',
            ]);

            return $order;
        });

        session()->forget('cart');

        return redirect()->route('customer.orders.show', $order)->with('success', 'سفارش شما با موفقیت ثبت شد.');
    }

    // تاریخچه سفارشات مشتری
    public function index(Request $request)
    {
        $orders = Auth::user()->orders()
            ->with(['business', 'items'])
            ->when($request->status, fn ($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(10);

        return view('customer.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if ($order->customer_id !== Auth::id()) {
            abort(403);
        }

        $order->load(['business', 'items.product', 'statusHistories']);

        return view('customer.orders.show', compact('order'));
    }

    public function cancel(Order $order)
    {
        if ($order->customer_id !== Auth::id()) {
            abort(403);
        }

        if ($order->status !== 'pending') {
            return back()->withErrors(['error' => 'فقط سفارش‌های در انتظار تایید قابل لغو هستند.']);
        }

        $order->update(['status' => 'cancelled']);

        OrderStatusHistory::create([
            'order_id' => $order->id,
            'status' => 'cancelled',
            'changed_by' => Auth::id(),
            'note' => 'سفارش توسط مشتری لغو شد.',
        ]);

        return back()->with('success', 'سفارش لغو شد.');
    }

    public function review(Request $request, Order $order)
    {
        if ($order->customer_id !== Auth::id()) {
            abort(403);
        }

        if ($order->status !== 'delivered') {
            return back()->withErrors(['error' => 'فقط سفارش‌های تحویل داده شده قابل نظر دادن هستند.']);
        }

        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:1000',
        ]);

        Review::updateOrCreate(
            ['order_id' => $order->id],
            [
                'customer_id' => Auth::id(),
                'business_id' => $order->business_id,
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]
        );

        // بروزرسانی امتیاز میانگین کسب و کار
        $avg = $order->business->reviews()->avg('rating');
        $order->business->update(['rating' => round($avg, 2)]);

        return back()->with('success', 'نظر شما ثبت شد.');
    }
}
