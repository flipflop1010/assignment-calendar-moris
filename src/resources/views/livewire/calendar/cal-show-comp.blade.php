<div class="calender_content">
    {{ $filterVal??'adf' }}
    @livewire('shared.modal.flip-modal',[
        'children'=>['calendar.cal-show-day-comp']
        ])
    @switch($filterVal)
        @case('day')
            @livewire('calendar.cal-show-day-comp',key($filterVal))
            @break
        @case('week')
            @livewire('calendar.cal-show-week-comp',key($filterVal))
            @break
        @case('month')
            @livewire('calendar.cal-show-month-comp',key($filterVal))
            @break
        @case('year')
            @livewire('calendar.cal-show-year-comp',key($filterVal))
            @break
    
        @default
        <span>No View</span>
            
    @endswitch
</div>