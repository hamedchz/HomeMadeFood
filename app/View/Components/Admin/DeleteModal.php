<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component
{

    public $description;
    public function __construct(string $description = 'Are you sure you want to delete this item?')
    {
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.admin.delete-modal');
    }
}
