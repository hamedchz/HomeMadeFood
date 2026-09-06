<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->role, fn ($q) => $q->where('role', $request->role))
            ->when($request->search, fn ($q) => $q->where('name', 'like', "%{$request->search}%")
                ->orWhere('email', 'like', "%{$request->search}%"))
            ->latest()
            ->paginate(20);

        return view('admin.users.index', compact('users'));
    }

    public function toggleActive(User $user)
    {
        if ($user->isAdmin()) {
            return back()->withErrors(['error' => 'امکان غیرفعال کردن ادمین وجود ندارد.']);
        }

        $user->update(['is_active' => ! $user->is_active]);

        return back()->with('success', 'وضعیت کاربر تغییر کرد.');
    }
}
