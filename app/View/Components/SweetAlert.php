<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;
use Illuminate\View\View;

class SweetAlert extends Component
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
    public function render(): View
    {
        return view('components.sweet-alert');
    }
}
