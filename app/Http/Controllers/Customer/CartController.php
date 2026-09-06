<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // سبد خرید ساده مبتنی بر سشن (هر سبد فقط می‌تواند از یک کسب و کار باشد)
    public function index()
    {
        $cart = session('cart', []);
        $products = Product::whereIn('id', array_keys($cart))->get();

        return view('customer.cart', compact('products', 'cart'));
    }

    public function add(Request $request, Product $product)
    {
        $cart = session('cart', []);

        // اگر سبد از کسب و کار دیگری بود، سبد خالی می‌شود (چون هر سفارش برای یک کسب و کار است)
        if (! empty($cart) && Product::whereIn('id', array_keys($cart))->first()?->business_id !== $product->business_id) {
            $cart = [];
        }

        $qty = (int) $request->input('quantity', 1);
        $cart[$product->id] = ($cart[$product->id] ?? 0) + $qty;

        session(['cart' => $cart]);

        return back()->with('success', 'به سبد خرید اضافه شد.');
    }

    public function update(Request $request, Product $product)
    {
        $cart = session('cart', []);
        $qty = (int) $request->input('quantity', 1);

        if ($qty <= 0) {
            unset($cart[$product->id]);
        } else {
            $cart[$product->id] = $qty;
        }

        session(['cart' => $cart]);

        return back();
    }

    public function remove(Product $product)
    {
        $cart = session('cart', []);
        unset($cart[$product->id]);
        session(['cart' => $cart]);

        return back();
    }
}
