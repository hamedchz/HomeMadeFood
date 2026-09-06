<?php

namespace App\View\Components\Admin\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string $type The button type (submit, button, reset)
     * @param string|null $class Additional CSS classes
     */
    public function __construct(string $type = 'submit', public ?string $class = null)
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.admin.buttons.button');
    }
}
