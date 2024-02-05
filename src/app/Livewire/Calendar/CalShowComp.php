<?php

namespace App\Livewire\Calendar;

use Livewire\Attributes\On;
use Livewire\Component;

class CalShowComp extends Component
{
    public $filterVal='month' ;
    public $showCalPage='';


    // protected $listeners = ['event-cal-filter' => 'handleFilter'];
    #[On('event-cal-filter')]
    function handleFilter($val){
        $this->filterVal=$val;
        
    }


    public function render()
    {
        
        return view('livewire.calendar.cal-show-comp');
    }
}
