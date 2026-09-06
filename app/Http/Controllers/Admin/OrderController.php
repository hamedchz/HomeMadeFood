<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // نظارت کامل ادمین بر همه سفارش‌های ثبت شده در سایت
    public function index(Request $request)
    {
        $orders = Order::with(['customer', 'business'])
            ->when($request->status, fn ($q) => $q->where('status', $request->status))
            ->when($request->business_id, fn ($q) => $q->where('business_id', $request->business_id))
            ->when($request->from_date, fn ($q) => $q->whereDate('created_at', '>=', $request->from_date))
            ->when($request->to_date, fn ($q) => $q->whereDate('created_at', '<=', $request->to_date))
            ->latest()
            ->paginate(20);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load(['customer', 'business', 'items.product', 'statusHistories.changedBy']);

        return view('admin.orders.show', compact('order'));
    }
}
