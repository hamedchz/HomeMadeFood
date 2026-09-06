<?php

namespace App\View\Components\Admin;

use App\Enums\Casts\AdvisorStatus;
use App\Enums\Casts\UserStatus;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public int $allUsers;
    public int $pendingUsers;
    public int $approvedUsers;
    public int $rejectedUsers;
    public int $suspendedUsers;
    public int $inProgressUsers;

    public function __construct(
        public array $scope = ['home'],
    ) {
        $this->allUsers = User::count();
        $this->pendingUsers = User::where('status', UserStatus::pending->value)->count();
        $this->approvedUsers = User::where('status', UserStatus::approved->value)->count();
        $this->suspendedUsers = User::where('status', UserStatus::suspended->value)->count();
        $this->rejectedUsers = User::where('status', UserStatus::rejected->value)->count();
        $this->inProgressUsers = User::where('advisor_status', AdvisorStatus::pending->value)->count();
    }

    public function render(): View|Closure|string
    {

        return view('layouts.admin.partials.sidebar');
    }
}
