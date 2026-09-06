<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    // فهرست همه کسب و کارها با امکان فیلتر بر اساس وضعیت
    public function index(Request $request)
    {
        $businesses = Business::with('owner')
            ->when($request->status, fn ($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(15);

        return view('admin.businesses.index', compact('businesses'));
    }

    public function show(Business $business)
    {
        $business->load(['owner', 'schedules', 'products', 'orders' => fn ($q) => $q->latest()->take(10)]);

        return view('admin.businesses.show', compact('business'));
    }

    // تایید کسب و کار جدید توسط ادمین
    public function approve(Business $business)
    {
        $business->update(['status' => 'approved']);

        return back()->with('success', 'کسب و کار مورد تایید قرار گرفت.');
    }

    public function reject(Business $business)
    {
        $business->update(['status' => 'rejected']);

        return back()->with('success', 'کسب و کار رد شد.');
    }

    // فعال/غیرفعال کردن دستی توسط ادمین (مثلا در صورت تخلف)
    public function toggleActive(Business $business)
    {
        $business->update(['is_active' => ! $business->is_active]);

        return back()->with('success', 'وضعیت فعال بودن کسب و کار تغییر کرد.');
    }
}
