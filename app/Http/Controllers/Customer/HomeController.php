<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // صفحه اصلی: فهرست کسب و کارهای تایید شده و محصولات
    public function index(Request $request)
    {
        $categories = Category::all();

        $products = Product::with('business')
            ->available()
            ->whereHas('business', fn ($q) => $q->approved())
            ->when($request->category_id, fn ($q) => $q->where('category_id', $request->category_id))
            ->when($request->search, fn ($q) => $q->where('name', 'like', "%{$request->search}%"))
            ->latest()
            ->paginate(12);

        return view('customer.home', compact('products', 'categories'));
    }

    public function businesses()
    {
        $businesses = Business::approved()->withCount('products')->paginate(12);

        return view('customer.businesses', compact('businesses'));
    }

    public function showBusiness(Business $business)
    {
        if ($business->status !== 'approved') {
            abort(404);
        }

        $business->load(['schedules', 'products' => fn ($q) => $q->available()]);

        return view('customer.business_show', compact('business'));
    }
}
