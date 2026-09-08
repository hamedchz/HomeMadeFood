<?php

use Livewire\Component;

new class extends Component {
    // public function render()
    // {
    //     return view('livewire.member.dashboard.dashboard')->layoutData(['scope' => ['home', 'member-home']]);
    // }
    public function render()
    {
        return $this->view()
            ->title(trans('Dashboard'))
            ->layout('layouts.business.master')
            ->layoutData(['scope' => ['home', 'business-home']]);
    }
};
?>

<div>
    hello
</div>
