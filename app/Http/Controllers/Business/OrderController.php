<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // مدیریت سفارش‌های جدید و گذشته توسط صاحب کسب و کار
    public function index(Request $request)
    {
        $business = Auth::user()->business;

        $orders = $business->orders()
            ->with(['customer', 'items'])
            ->when($request->status, fn ($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(15);

        return view('business.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $this->authorizeOwnership($order);
        $order->load(['customer', 'items.product', 'statusHistories']);

        return view('business.orders.show', compact('order'));
    }

    // تغییر وضعیت سفارش: تایید، آماده‌سازی، آماده تحویل، تحویل داده شده، لغو
    public function updateStatus(Request $request, Order $order)
    {
        $this->authorizeOwnership($order);

        $request->validate([
            'status' => 'required|in:accepted,preparing,ready,delivered,cancelled',
            'note' => 'nullable|string',
        ]);

        $order->status = $request->status;

        if ($request->status === 'delivered') {
            $order->delivered_at = now();
        }

        $order->save();

        OrderStatusHistory::create([
            'order_id' => $order->id,
            'status' => $request->status,
            'changed_by' => Auth::id(),
            'note' => $request->note,
        ]);

        return back()->with('success', 'وضعیت سفارش بروزرسانی شد.');
    }

    protected function authorizeOwnership(Order $order): void
    {
        if ($order->business_id !== Auth::user()->business->id) {
            abort(403);
        }
    }
}
