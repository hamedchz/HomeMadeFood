<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PreloaderTableLivewire extends Component
{

    public function render(): View|Closure|string
    {
        return view('components.admin.preloader-table-livewire');
    }
}
