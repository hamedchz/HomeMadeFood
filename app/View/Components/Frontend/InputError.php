<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputError extends Component
{

    public $text;




    public function __construct($text = null)
    {

        $this->text = $text;
    }
    public function render(): View|Closure|string
    {
        return view('components.frontend.input-error');
    }
}
