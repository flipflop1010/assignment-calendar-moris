<div class="c_data week_calender day_wise d1">
    <div class="fixed_time">
        <div class="column">IST <br>04:00</div>
        {{-- <div class="column">09:00</div> --}}
        {{-- <div class="column">10:00</div>
        <div class="column">11:00</div>
        <div class="column">12:00</div>
        <div class="column">13:00</div> --}}

        @for ($i=1;$i<=24;$i++)
        <div class="column">{{ str_pad($i,2,'0',STR_PAD_LEFT) }}:00</div>
        @endfor

    </div>
    <div class="make_booking">
        <div class="column th">Wednesday, 12 October 2023</div>
        {{-- <div class="column">
            <div class="td1">
                <span class="b_time pink2">09:00 - 09:15</span>
                <span class="b_time lightprpl2">09:15 - 09:30</span>
            </div>
            <div class="td2">
                <span class="b_time lightprpl full_height">Design Team Metting</span>
                <!-- mcalender_popup start -->
                <div class="mcalender_popup">
                    <div class="top_option">
                        <span><img src="{{ asset('assets/images/my-calender/icon_edit.svg') }}"
                                alt="icon edit" /></span>
                        <span><img src="{{ asset('assets/images/my-calender/icon_delete.svg') }}"
                                alt="icon delete" /></span>
                        <span class="close_btn"><img src="{{ asset('assets/images/my-calender/icon_cross.svg') }}"
                                alt="icon cross" /></span>
                    </div>
                    <div class="row_two">
                        <div class="eventcolor">
                            <span class="roundcolor"></span>
                        </div>
                        <h3>Design Team Metting</h3>
                        <div class="choosecolor">
                            <ul>
                                <li style="background-color:#6E1588;"></li>
                                <li style="background-color:#E1003E;"></li>
                                <li style="background-color:#2B99F0;"></li>
                                <li style="background-color:#FE2924;"></li>
                                <li style="background-color:#A41E90;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="top_details">
                            <strong class="app_date"><img
                                    src="{{ asset('assets/images/my-calender/icon_calender.svg') }}"
                                    alt="icon calender" /> Friday, 14th October
                                2023</strong>
                            <strong class="app_time"><img
                                    src="{{ asset('assets/images/my-calender/icon_watch.svg') }}"
                                    alt="icon watch" />
                                11 : 00 Am - 11 : 15 Am <span>Asia /
                                    Kolkata</span></strong>
                            <strong class="app_zoom"><img
                                    src="{{ asset('assets/images/my-calender/icon_zoom.png') }}"
                                    alt="icon zoom" /> Zoom Platform <span><img
                                        src="{{ asset('assets/images/my-calender/icon_attachment.svg') }}"
                                        alt="icon attachment" /> Copy Link</span></strong>
                            <strong class="app_bymail"><img
                                    src="{{ asset('assets/images/my-calender/icon_clock.svg') }}"
                                    alt="icon clock" />
                                15 min before by Email</strong>
                        </div>
                        <div class="attendees">
                            <div class="bg_white">Attendees <strong><img
                                        src="{{ asset('assets/images/my-calender/icon_user.png') }}" />
                                    10</strong>
                            </div>
                        </div>
                        <ul class="user_info">
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>chaitanya@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>sanatariq@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>harpreet.k@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- mcalender_popup end -->
            </div>
        </div>
        <div class="column">
            <div class="td1">
                <span class="b_time lightgreen"></span>
                <span class="b_time lightgreen"></span>
            </div>
            <div class="td2">
                <span class="b_time green2">10:30 - 10:45</span>
                <span class="b_time lightgreen"></span>
            </div>
        </div>
        <div class="column">
            <div class="td1">
                <span class="b_time"></span>
                <span class="b_time"></span>
            </div>
            <div class="td2">
                <span class="b_time yellow">sales constellation</span>
                <!-- mcalender_popup start -->
                <div class="mcalender_popup">
                    <div class="top_option">
                        <span><img src="{{ asset('assets/images/my-calender/icon_edit.svg') }}"
                                alt="icon edit" /></span>
                        <span><img src="{{ asset('assets/images/my-calender/icon_delete.svg') }}"
                                alt="icon delete" /></span>
                        <span class="close_btn"><img src="{{ asset('assets/images/my-calender/icon_cross.svg') }}"
                                alt="icon cross" /></span>
                    </div>
                    <div class="row_two">
                        <div class="eventcolor">
                            <span class="roundcolor"></span>
                        </div>
                        <h3>sales constellation</h3>
                        <div class="choosecolor">
                            <ul>
                                <li style="background-color:#6E1588;"></li>
                                <li style="background-color:#E1003E;"></li>
                                <li style="background-color:#2B99F0;"></li>
                                <li style="background-color:#FE2924;"></li>
                                <li style="background-color:#A41E90;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="top_details">
                            <strong class="app_date"><img
                                    src="{{ asset('assets/images/my-calender/icon_calender.svg') }}"
                                    alt="icon calender" /> Tuesday, 11th October
                                2023</strong>
                            <strong class="app_time"><img
                                    src="{{ asset('assets/images/my-calender/icon_watch.svg') }}"
                                    alt="icon watch" />
                                11 : 00 Am - 11 : 15 Am <span>Asia /
                                    Kolkata</span></strong>
                            <strong class="app_zoom"><img
                                    src="{{ asset('assets/images/my-calender/icon_zoom.png') }}"
                                    alt="icon zoom" /> Zoom Platform <span><img
                                        src="{{ asset('assets/images/my-calender/icon_attachment.svg') }}"
                                        alt="icon attachment" /> Copy Link</span></strong>
                            <strong class="app_bymail"><img
                                    src="{{ asset('assets/images/my-calender/icon_clock.svg') }}"
                                    alt="icon clock" />
                                15 min before by Email</strong>
                        </div>
                        <div class="attendees">
                            <div class="bg_white">Attendees <strong><img
                                        src="{{ asset('assets/images/my-calender/icon_user.png') }}" />
                                    10</strong>
                            </div>
                        </div>
                        <ul class="user_info">
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>chaitanya@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>sanatariq@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>harpreet.k@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- mcalender_popup end -->
                <span class="b_time"></span>
            </div>
        </div>
        <div class="column">
            <div class="td1">
                <span class="b_time pink3">12:00 - 12:15</span>
                <span class="b_time lightgreen"></span>
            </div>
            <div class="td2">
                <span class="b_time green2"></span>
                <span class="b_time lightgreen"></span>
            </div>
        </div>
        <div class="column">
            <div class="td1">
                <span class="b_time pingdrk">Logo Designing Discussion</span>
                <!-- mcalender_popup start -->
                <div class="mcalender_popup">
                    <div class="top_option">
                        <span><img src="{{ asset('assets/images/my-calender/icon_edit.svg') }}"
                                alt="icon edit" /></span>
                        <span><img src="{{ asset('assets/images/my-calender/icon_delete.svg') }}"
                                alt="icon delete" /></span>
                        <span class="close_btn"><img src="{{ asset('assets/images/my-calender/icon_cross.svg') }}"
                                alt="icon cross" /></span>
                    </div>
                    <div class="row_two">
                        <div class="eventcolor">
                            <span class="roundcolor"></span>
                        </div>
                        <h3>Logo Designing Discussion</h3>
                        <div class="choosecolor">
                            <ul>
                                <li style="background-color:#6E1588;"></li>
                                <li style="background-color:#E1003E;"></li>
                                <li style="background-color:#2B99F0;"></li>
                                <li style="background-color:#FE2924;"></li>
                                <li style="background-color:#A41E90;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="top_details">
                            <strong class="app_date"><img
                                    src="{{ asset('assets/images/my-calender/icon_calender.svg') }}"
                                    alt="icon calender" /> Wednesday, 12th October
                                2023</strong>
                            <strong class="app_time"><img
                                    src="{{ asset('assets/images/my-calender/icon_watch.svg') }}"
                                    alt="icon watch" />
                                11 : 00 Am - 11 : 15 Am <span>Asia /
                                    Kolkata</span></strong>
                            <strong class="app_zoom"><img
                                    src="{{ asset('assets/images/my-calender/icon_zoom.png') }}"
                                    alt="icon zoom" /> Zoom Platform <span><img
                                        src="{{ asset('assets/images/my-calender/icon_attachment.svg') }}"
                                        alt="icon attachment" /> Copy Link</span></strong>
                            <strong class="app_bymail"><img
                                    src="{{ asset('assets/images/my-calender/icon_clock.svg') }}"
                                    alt="icon clock" />
                                15 min before by Email</strong>
                        </div>
                        <div class="attendees">
                            <div class="bg_white">Attendees <strong><img
                                        src="{{ asset('assets/images/my-calender/icon_user.png') }}" />
                                    10</strong>
                            </div>
                        </div>
                        <ul class="user_info">
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>chaitanya@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>sanatariq@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>harpreet.k@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- mcalender_popup end -->
                <span class="b_time lightgreen"></span>
            </div>
            <div class="td2">
                <span class="b_time green2"></span>
                <span class="b_time lightgreen"></span>
            </div>
        </div> --}}

        @for ($i=1;$i<=24;$i++)
        <div class="column">
            <div class="td1">
                <span class="b_time pink2">09:00 - 09:15</span>
                <span class="b_time lightprpl2">09:15 - 09:30</span>
            </div>
            <div class="td2">
                <span class="b_time lightprpl full_height">Design Team Metting</span>
                <!-- mcalender_popup start -->
                <div class="mcalender_popup">
                    <div class="top_option">
                        <span><img src="{{ asset('assets/images/my-calender/icon_edit.svg') }}"
                                alt="icon edit" /></span>
                        <span><img src="{{ asset('assets/images/my-calender/icon_delete.svg') }}"
                                alt="icon delete" /></span>
                        <span class="close_btn"><img src="{{ asset('assets/images/my-calender/icon_cross.svg') }}"
                                alt="icon cross" /></span>
                    </div>
                    <div class="row_two">
                        <div class="eventcolor">
                            <span class="roundcolor"></span>
                        </div>
                        <h3>Design Team Metting</h3>
                        <div class="choosecolor">
                            <ul>
                                <li style="background-color:#6E1588;"></li>
                                <li style="background-color:#E1003E;"></li>
                                <li style="background-color:#2B99F0;"></li>
                                <li style="background-color:#FE2924;"></li>
                                <li style="background-color:#A41E90;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="top_details">
                            <strong class="app_date"><img
                                    src="{{ asset('assets/images/my-calender/icon_calender.svg') }}"
                                    alt="icon calender" /> Friday, 14th October
                                2023</strong>
                            <strong class="app_time"><img
                                    src="{{ asset('assets/images/my-calender/icon_watch.svg') }}"
                                    alt="icon watch" />
                                11 : 00 Am - 11 : 15 Am <span>Asia /
                                    Kolkata</span></strong>
                            <strong class="app_zoom"><img
                                    src="{{ asset('assets/images/my-calender/icon_zoom.png') }}"
                                    alt="icon zoom" /> Zoom Platform <span><img
                                        src="{{ asset('assets/images/my-calender/icon_attachment.svg') }}"
                                        alt="icon attachment" /> Copy Link</span></strong>
                            <strong class="app_bymail"><img
                                    src="{{ asset('assets/images/my-calender/icon_clock.svg') }}"
                                    alt="icon clock" />
                                15 min before by Email</strong>
                        </div>
                        <div class="attendees">
                            <div class="bg_white">Attendees <strong><img
                                        src="{{ asset('assets/images/my-calender/icon_user.png') }}" />
                                    10</strong>
                            </div>
                        </div>
                        <ul class="user_info">
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>chaitanya@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>sanatariq@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/my-calender/icon_user2.png') }}"
                                    alt="icon user" />
                                <strong>harpreet.k@morismedia.in</strong>
                                <span class="check"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- mcalender_popup end -->
            </div>
        </div>
        @endfor


    </div>
</div>