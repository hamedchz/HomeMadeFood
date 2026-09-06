<?php

namespace App\View\Components\Member;

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
    public function render(): View|Closure|string
    {
        return view('components.member.empty-chat');
    }
}
