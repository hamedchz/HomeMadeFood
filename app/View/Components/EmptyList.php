<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class EmptyList extends Component
{
    public function __construct(
        public string $title = '',
        public string $message = ''
    ) {
        $this->title = $title ?: trans('No data available');
        $this->message = $message ?: trans('We regret to inform you that no relevant data is currently available');
    }

    public function render(): View
    {
        return view('components.empty-list');
    }
}
