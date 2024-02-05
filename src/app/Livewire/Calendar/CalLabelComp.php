<?php

namespace App\Livewire\Calendar;

use Livewire\Attributes\On;
use Livewire\Component;

class CalLabelComp extends Component
{
    public $filterVal;
    public $label;

    // Event listeners
    #[On('event-cal-filter')]
    function handleFilter($val){
        $this->filterVal=$val;
    }

    #[On('event-label')]
    function handleLabel($val){
        $this->label=$val;
    }

    public function render()
    {
        
        return view('livewire.calendar.cal-label-comp');
    }



    public function handlePrevBtn(){
        $this->dispatch('event-prev-btn');
    }
    public function handleNextBtn(){
        $this->dispatch('event-next-btn');

    }
}
