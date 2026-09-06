<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $title;
    public $items;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param array $items
     * @param array $action
     * @param boolean $search

     */
    public function __construct($title, $items = [], $action = [], $search = false)
    {

        $this->title = $title;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.breadcrumb');
    }
}
