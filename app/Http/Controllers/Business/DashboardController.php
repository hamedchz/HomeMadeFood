<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $business = Auth::user()->business;

        if (! $business) {
            abort(404, 'کسب و کاری برای این حساب ثبت نشده است.');
        }

        $stats = [
            'new_orders' => $business->orders()->where('status', 'pending')->count(),
            'active_orders' => $business->orders()->whereIn('status', ['accepted', 'preparing', 'ready'])->count(),
            'delivered_today' => $business->orders()->where('status', 'delivered')->whereDate('delivered_at', today())->count(),
            'total_products' => $business->products()->count(),
            'revenue_this_month' => $business->orders()->where('status', 'delivered')
                ->whereMonth('created_at', now()->month)->sum('total_price'),
        ];

        $newOrders = $business->orders()->where('status', 'pending')->with('customer', 'items')->latest()->take(10)->get();

        return view('business.dashboard', compact('business', 'stats', 'newOrders'));
    }
}
