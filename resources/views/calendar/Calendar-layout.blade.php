<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Calendar</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
    rel="stylesheet"
  />
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        body {
            font-family: "Work Sans", sans-serif;
        }

        .ui-datepicker{
            margin-top: 10px;
            padding: 30px;
            background-color: rgb(132, 144, 202);
            display: none;
            color: white;
            font-weight: 300
        }
        .ui-datepicker-header{
            display: flex;
            justify-content: space-between;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            height: 40px;
            border-bottom: 1px solid white;
            width: 200px; 
        }
        .ui-datepicker-calendar{
            width: 200px;
        }
        .ui-datepicker-prev{
            cursor: pointer;
        }
        .ui-datepicker-next{
            cursor: pointer;
        }
        .ui-datepicker-unselectable {
        color: rgb(132, 144, 202);
        }

    </style>

</head>
<body>
    <x-flash-message/>
    <x-flash-error/>
    
    @include('calendar.Calendar-header')
    @include('calendar.Calendar-body-price')
    @include('components.Footer')

    <script>
        $(document).ready(function() {
        var events = @json($events);

        var bookedDates = [];
        for (var i = 0; i < events.length; i++) {
            var startDate = moment(events[i].start);
            var endDate = moment(events[i].end);
            var currentDate = startDate.clone();
            while (currentDate.isSameOrBefore(endDate)) {
                bookedDates.push(currentDate.format('YYYY-MM-DD'));
                currentDate.add(1, 'days');
            }
        }

        $('#checkin').datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: new Date(),
            onSelect: function(date) {
                $('#checkout').datepicker('option', 'minDate', date);
                $('#checkin-datepicker').hide();
            }
        });

        $('#checkout').datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: '+1d',
            onSelect: function(date) {
                $('#checkin').datepicker('option', 'maxDate', date);
                $('#checkout-datepicker').hide();
            }
        });

        $('#checkin').on('click', function() {
            $('#checkin-datepicker').show();
        });

        $('#checkout').on('click', function() {
            $('#checkout-datepicker').show();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.datepicker').length) {
                $('.datepicker').hide();
            }
        });

        $('#calendar').fullCalendar({
            // ...
        });

        if (bookedDates.length > 0) {
            var minDate = moment(bookedDates[bookedDates.length - 1]).add(1, 'days').toDate();
            var maxDate = moment(bookedDates[0]).subtract(1, 'days').toDate();
            $('#checkin').datepicker('option', 'minDate', minDate);
            $('#checkout').datepicker('option', 'minDate', maxDate);
        }
    });

    </script>

<script>
    const profileButton = document.querySelector('#profileButton');
    const profileMenu = document.querySelector('#profileMenu');

    profileButton.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
    const isClickInsideButton = profileMenu.contains(event.target);
    const isClickOnProfile = event.target.closest('#profileButton');

    if (!isClickOnProfile && !isClickInsideButton) {
        profileMenu.classList.add('hidden');
    }
    });
    
</script>

<script>
    function openMap() {
      const url = "https://www.google.com/maps/place/The+Brown+Casitas/@7.3480622,125.5825326,13z/data=!4m10!1m2!2m1!1sthe+browns+casita+carmen+city+davao+del+norte!3m6!1s0x32f94fb743141dbb:0x4b085a742880497b!8m2!3d7.3480622!4d125.6587503!15sCi10aGUgYnJvd25zIGNhc2l0YSBjYXJtZW4gY2l0eSBkYXZhbyBkZWwgbm9ydGWSAQV2aWxsYeABAA!16s%2Fg%2F11t6mrzxsz";
      window.open(url, "_blank");
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</body>
</html>