<?php

namespace App\Livewire\Shared\Modal;

use Livewire\Component;

class FlipModal extends Component
{
    public $children;

    public function mount($children){
        $this->children=$children;
    }

    public function render()
    {
        return view('livewire.shared.modal.flip-modal');
    }
}
