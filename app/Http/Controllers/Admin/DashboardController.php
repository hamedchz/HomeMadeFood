<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::where('role', 'customer')->count(),
            'total_businesses' => Business::count(),
            'pending_businesses' => Business::where('status', 'pending')->count(),
            'total_orders' => Order::count(),
            'orders_today' => Order::whereDate('created_at', today())->count(),
            'active_orders' => Order::whereIn('status', ['pending', 'accepted', 'preparing', 'ready'])->count(),
            'total_revenue' => Order::where('status', 'delivered')->sum('total_price'),
        ];

        $recentOrders = Order::with(['customer', 'business'])->latest()->take(10)->get();

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }
}
