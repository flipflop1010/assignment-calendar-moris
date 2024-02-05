<?php

namespace App\Livewire\Calendar;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class CalShowMonthComp extends Component
{

    public $fullDate;
    public $date;
    public $year;
    public $month;
    public $daysInMonth;
    public $startDayOfWeek;

    public $allDaysInMonth=[];


    public function mount()
    {
        $this->year = now()->year;
        $this->month = now()->month;
        $this->updateDaysInMonth();
        $this->dispatch('event-label',$this->_getLabelStr());
    }


    public function render()
    {
        $startDate = Carbon::createFromDate($this->year, $this->month, 1);
        $this->startDayOfWeek = $startDate->dayOfWeek; // 0 (Sunday) to 6 (Saturday)

        // events
        $events=Event::where([
            ['start_date','>=',"{$this->year}-{$this->month}-01"],
            ['start_date','<=',"{$this->year}-{$this->month}-{$this->daysInMonth}"],
        ])->get();

            // dd($events);

        return view('livewire.calendar.cal-show-month-comp',['events'=>$events]);
    }

    #[On('event-prev-btn')]
    public function previousMonth()
    {
        $this->month = $this->month - 1;
        if ($this->month == 0) {
            $this->month = 12;
            $this->year = $this->year - 1;
        }
        $this->updateDaysInMonth();

        $this->dispatch('event-label',$this->_getLabelStr());

    }

    #[On('event-next-btn')]
    public function nextMonth()
    {
        $this->month = $this->month + 1;
        if ($this->month == 13) {
            $this->month = 1;
            $this->year = $this->year + 1;
        }
        $this->updateDaysInMonth();
        $this->dispatch('event-label',$this->_getLabelStr());
    }

    private function updateDaysInMonth()
    {
        $this->daysInMonth = Carbon::createFromDate($this->year, $this->month, 1)->daysInMonth;
    }

    private function _getLabelStr(){
        
        $d=Carbon::createFromDate($this->year, $this->month, 1);
        return $d->format('M - Y');
    }

}
