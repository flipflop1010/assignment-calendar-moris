@extends('layouts.base')

@section('content')

@livewire('shared.loader-comp')

<div class="scroll_area">
    <div class="row1">
        <div class="calender_topsec">
            @livewire('calendar.cal-label-comp')
            <div class="rightsec">
                @livewire('calendar.cal-filter-by-comp')
                <span class="print"><img src="{{ asset('assets/images/my-calender/icon_print.svg') }}"
                        alt="icon print" /></span>
                <strong class="more_option"><span></span></strong>
            </div>
        </div>
        {{-- <div class="calender_content">
            <!-- day_calender start -->
            @include('calendar-design.calendar_day')
            <!--day_calender end -->
            <!-- week_calender start -->
            @include('calendar-design.calendar_week')
            <!--week_calender end -->
            <!-- month_calender start -->
            @include('calendar-design.calendar_month')
            <!-- month_calender end -->
            <!-- year_calender start -->
            @include('calendar-design.calendar_year')
            <!-- year_calender end -->
            
        </div> --}}
        
        @livewire('calendar.cal-show-comp')
       
    </div>
</div>
<div class="nextbtn_row">
    <div class="slot_selected">
        <span class="slot_btn">12 time slot selected</span>
        <div class="slot_popup">
            <div class="toprow">
                <strong class="t_heading"><img src="{{ asset('assets/images/my-calender/icon_calender.svg') }}"
                        alt="icon calender" /> Selected Time Slots</strong>
                <span class="clear_all">CLEAR ALL</span>
            </div>
            <div class="slot_time">
                <strong class="date">MONDAY, OCTOBER 10 2023</strong>
                <ul>
                    <li>11 : 00 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 15 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 30 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 45 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>12 : 00 PM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>12 : 15 PM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>12 : 30 PM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>12 : 45 PM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                </ul>
            </div>
            <div class="slot_time">
                <strong class="date">TUESDAY, OCTOBER 10 2023</strong>
                <ul>
                    <li>11 : 00 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 15 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 30 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                    <li>11 : 45 AM <span class="cross"><img src="{{ asset('assets/images/my-calender/icon_cross2.svg') }}"
                                alt="icon cross" /></span></li>
                </ul>
            </div>
        </div>
    </div>
    <a href="{{ asset('assets/select-event.html') }}" class="next">NEXT</a>
</div>

@endsection