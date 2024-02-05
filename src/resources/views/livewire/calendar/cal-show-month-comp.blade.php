<div class="c_data month_calender d3">
    <div class="full_row month_row">
        <div class="th">SUNDAY</div>
        <div class="th">MONDAY</div>
        <div class="th">TUESDAY</div>
        <div class="th">WEDNESDAY</div>
        <div class="th">THURSDAY</div>
        <div class="th">FRIDAY</div>
        <div class="th">SATURDAY</div>
    </div>
    {{-- <div class="full_row days_row">
        <div class="td"><span class="date">1</span></div>
        <div class="td"><span class="date">2</span></div>
        <div class="td"><span class="date">3</span></div>
        <div class="td"><span class="date">4</span></div>
        <div class="td"><span class="date not_show">5</span>
            <div class="event_label">Sales Constellation</div>
        </div>
        <div class="td"><span class="date">6</span></div>
        <div class="td"><span class="date">7</span></div>
    </div>
    <div class="full_row days_row">
        <div class="td"><span class="date">8</span></div>
        <div class="td"><span class="date">9</span></div>
        <div class="td"><span class="date">10</span></div>
        <div class="td"><span class="date">11</span></div>
        <div class="td"><span class="date">12</span></div>
        <div class="td"><span class="date">13</span></div>
        <div class="td"><span class="date">14</span></div>
    </div>
    <div class="full_row days_row">
        <div class="td"><span class="date">15</span></div>
        <div class="td"><span class="date">16</span></div>
        <div class="td"><span class="date">17</span></div>
        <div class="td"><span class="date">18</span></div>
        <div class="td"><span class="date">19</span></div>
        <div class="td"><span class="date">20</span></div>
        <div class="td"><span class="date">21</span></div>
    </div>
    <div class="full_row days_row">
        <div class="td"><span class="date">22</span></div>
        <div class="td"><span class="date">23</span></div>
        <div class="td"><span class="date">24</span>
            <div class="event_label blue">Logo Work Discussion</div>
        </div>
        <div class="td"><span class="date">25</span></div>
        <div class="td"><span class="date">26</span></div>
        <div class="td"><span class="date">27</span></div>
        <div class="td"><span class="date">28</span></div>
    </div>
    <div class="full_row days_row">
        <div class="td"><span class="date">29</span></div>
        <div class="td"><span class="date">30</span></div>
        <div class="td"><span class="date">31</span></div>
        <div class="td"><span class="date"></span></div>
        <div class="td"><span class="date"></span></div>
        <div class="td"><span class="date"></span></div>
        <div class="td"><span class="date"></span></div>
    </div> --}}

    @php
        $total = $daysInMonth + $startDayOfWeek;
        $totalDivBy7 = ceil($total / 7) * 7;
    @endphp


    @for ($day = 1; $day <= $totalDivBy7; $day++)
        @php
            $cellDate = '';
            if ($day > $startDayOfWeek) {
                $cellDate = \Carbon\Carbon::createFromDate($year, $month, $day - $startDayOfWeek);
            }
        @endphp

        @if ($day > $total)
            <div class="td"><span class="date"></span></div>
            @continue
        @endif
        @if (($day - 1) % 7 == 0)
            <div class="full_row days_row">
        @endif

        @if ($day > $startDayOfWeek)
            <div class="td">
                <span class="date">{{ $day - $startDayOfWeek }}</span>
                
                @foreach ($events as $key => $event)
                    @if ($cellDate &&  $cellDate->format('Y-m-d')==($event->start_date))
                        <div class="event_label blue border">
                            {{ $event->event_title ?? '' }}
                        </div>
                    
                    @elseif ($cellDate &&  $cellDate->format('Y-m-d')==($event->end_date))
                        <div class="event_label blue border">{{ $event->event_title ?? '' }}</div>
                    @endif
                @endforeach

            </div>
        @else
            <div class="td"><span class="date"></span></div>
        @endif

        @if ($day % 7 == 0 || $day == $totalDivBy7)
</div>
@endif
@endfor



</div>
