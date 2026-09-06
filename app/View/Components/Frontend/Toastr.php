<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Toastr extends Component
{
    public $title;
    public $text;
    public $type;

    public $direction;

    public function __construct($title = null, $text = null, $type = 'info', $direction = 'en')
    {
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
        $this->direction = app()->getLocale();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.sticky-toastr');
    }
}
