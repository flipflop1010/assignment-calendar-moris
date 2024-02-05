<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>moCal Dashboard</title>
	<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
	<link rel="stylesheet" href="{{ asset('assets/js/bootstrap-4.4.1.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/js/bootstrap-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/my-calender/my-calender.css') }}">
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/js/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/js/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />
</head>

<body>
	<!-- menu start -->
	@include('calendar-design.menu')
	<!-- menu end -->


	<!-- calender start -->
	<div class="mycalender_wrap">
		<div class="my_calender">
			<div class="custom_container">
				<div class="scroll_area">
					<div class="row1">
						<div class="calender_topsec">
							<div class="leftsec">
								<span class="search_by">This Week</span>
								<div class="arrow_box">
									<span class="arrow"><img src="{{ asset('assets/images/my-calender/icon_lft_arrow.svg') }}"
											alt="icon arrow left" /></span>
									<span class="arrow"><img src="{{ asset('assets/images/my-calender/icon_rgt_arrow.svg') }}"
											alt="icon arrow rgt" /></span>
								</div>
								<div class="date">9 Oct - 15 Oct 2023</div>
							</div>
							<div class="rightsec">
								<div class="filter_by">
									<select class="ui search dropdown dropdownmenu select-style" id="selectField">
										<option value="1">Day</option>
										<option value="2" selected>Week</option>
										<option value="3">Month</option>
										<option value="4">year</option>
									</select>
								</div>
								<span class="time"><img src="{{ asset('assets/images/my-calender/icon_countdown.svg') }}" alt="icon time" />
									Yet
									to
									Respond</span>
								<span class="print"><img src="{{ asset('assets/images/my-calender/icon_print.svg') }}"
										alt="icon print" /></span>
								<strong class="more_option"><span></span></strong>
							</div>
						</div>
						<div class="calender_content">
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
						</div>
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
			</div>
		</div>
	</div>
	<!-- calender end -->

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script>
	$(".dropdownmenu").dropdown();
	$("#clientvalue").change(function () {
		if ($(this).val().length === 0) {
			//  alert('yes');
			//$(this).parent('.selectWrap').siblings('.profileSection').addClass('extya');
			$(".profileSection").css("display", "none");
		} else {
			//$(this).parent('.selectWrap').siblings('.profileSection').removeClass('extya');
			//alert('no');
			$(".profileSection").css("display", "block");
		}
	});


	$(document).ready(function () {
		$(".my_calender .eventcolor").click(function () {
			$(".choosecolor").slideToggle();
		});

		$(".b_time").siblings(".mcalender_popup").parent("").children(".b_time").addClass("show");
		$(".my_calender .b_time").click(function () {
			$(this).siblings(".mcalender_popup").addClass("show_popup");
		});

		$(".mcalender_popup .close_btn").click(function () {
			$(this).closest(".mcalender_popup").removeClass("show_popup");
		});
	});
</script>
<script>
	$(function () {
		$('.c_data').hide();
		$('.d2').show();
		$('#selectField').on("change", function () {
			$('.c_data').hide();
			$('.d' + $(this).val()).show();
		}).val(2);
	});

	$(document).ready(function () {
		$(".slot_selected .slot_btn").click(function () {
			$(this).toggleClass("active");
			$(".slot_selected .slot_popup").toggleClass("show");
		});

		$('.my_calender .column .b_time').click(function () {
			$(this).css("opacity", "1");
		});

		$('.slot_popup li .cross').click(function () {
			$(this).parent("li").remove();
		});
		$('.my_calender .slot_popup .clear_all').click(function () {
			$(this).closest(".slot_popup").find(".slot_time").remove();
		});

	});
</script>