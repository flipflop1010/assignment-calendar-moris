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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireStyles
</head>

<body>

    <!-- menu start -->
    @include('calendar-design.menu')
    <!-- menu end -->

    <!-- calender start -->
    <div class="mycalender_wrap">
        <div class="my_calender">
            <div class="custom_container">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap-4.4.1.js') }}"></script>
    @stack('script-footer')
    @livewireScripts

    
<script>
    Livewire.on('event-notification', (data) => {
        console.log('INFO','notification',data);
        alertify.set('notifier','position', 'top-center');
        if(data.type=='success')
        alertify.success(data.message);
        else if(data.type=='error')
        alertify.error(data.message);
    });
</script>



</body>

</html>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script>
    $(".dropdownmenu").dropdown();
    $("#clientvalue").change(function() {
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


    $(document).ready(function() {
        $(".my_calender .eventcolor").click(function() {
            $(".choosecolor").slideToggle();
        });

        $(".b_time").siblings(".mcalender_popup").parent("").children(".b_time").addClass("show");
        $(".my_calender .b_time").click(function() {
            $(this).siblings(".mcalender_popup").addClass("show_popup");
        });

        $(".mcalender_popup .close_btn").click(function() {
            $(this).closest(".mcalender_popup").removeClass("show_popup");
        });
    });
</script>
<script>
    $(function() {
        $('.c_data').hide();
        $('.d2').show();
        $('#selectField').on("change", function() {
            $('.c_data').hide();
            $('.d' + $(this).val()).show();
        }).val(2);
    });

    $(document).ready(function() {
        $(".slot_selected .slot_btn").click(function() {
            $(this).toggleClass("active");
            $(".slot_selected .slot_popup").toggleClass("show");
        });

        $('.my_calender .column .b_time').click(function() {
            $(this).css("opacity", "1");
        });

        $('.slot_popup li .cross').click(function() {
            $(this).parent("li").remove();
        });
        $('.my_calender .slot_popup .clear_all').click(function() {
            $(this).closest(".slot_popup").find(".slot_time").remove();
        });

    });
</script> --}}
