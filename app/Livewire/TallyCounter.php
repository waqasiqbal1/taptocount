<?php

namespace App\Livewire;

use Livewire\Component;

class TallyCounter extends Component
{
    public function render()
    {
        // Livewire renders the wrapper once. Every click is handled in Vanilla JavaScript
        // so counting stays instant and never waits for a network request.
        return view('livewire.tally-counter');
    }
}
