<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmptyChat extends Component
{
    public function __construct(
        public string $title = '',
        public string $message = ''
    ) {
        $this->title = $title ?: trans('No Chat');
        $this->message = $message ?: trans('Chat Inbox Empty');
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.empty-chat');
    }
}
