<?php

namespace App\Livewire\Calendar;

use Livewire\Component;

class CalFilterByComp extends Component
{
    public $filterVal='month';

    function mount(){
        $this->dispatch('event-cal-filter',$this->filterVal);
    }

    function onChange(){
        // dd($this->filterVal);

        $this->dispatch('event-cal-filter',$this->filterVal);

    }



    public function render()
    {
        return view('livewire.calendar.cal-filter-by-comp');
    }
}
