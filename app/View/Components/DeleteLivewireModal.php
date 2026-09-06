<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteLivewireModal extends Component
{
    public $description;
    public function __construct(string $description = 'Are you sure you want to delete this item?')
    {
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-livewire-modal');
    }
}
