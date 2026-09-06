<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\BusinessSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    // نمایش و مدیریت روز و ساعت‌های فعالیت کسب و کار
    public function index()
    {
        $business = Auth::user()->business;
        $schedules = $business->schedules()->orderBy('day_of_week')->get();

        return view('business.schedules.index', compact('business', 'schedules'));
    }

    public function update(Request $request)
    {
        $business = Auth::user()->business;

        $data = $request->validate([
            'days' => 'required|array',
            'days.*.day_of_week' => 'required|integer|between:0,6',
            'days.*.is_open' => 'nullable|boolean',
            'days.*.open_time' => 'nullable|date_format:H:i',
            'days.*.close_time' => 'nullable|date_format:H:i|after:days.*.open_time',
        ]);

        foreach ($data['days'] as $day) {
            BusinessSchedule::updateOrCreate(
                ['business_id' => $business->id, 'day_of_week' => $day['day_of_week']],
                [
                    'is_open' => $day['is_open'] ?? false,
                    'open_time' => $day['open_time'] ?? null,
                    'close_time' => $day['close_time'] ?? null,
                ]
            );
        }

        return back()->with('success', 'ساعات کاری با موفقیت بروزرسانی شد.');
    }
}
