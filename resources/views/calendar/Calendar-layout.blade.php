<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Calendar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <style>
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
    @include('calendar.Calendar-header')
    @include('calendar.Calendar-body')
    @include('calendar.Calendar-footer')

    <script>
    $(document).ready(function() {
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
            header: {
                left: 'prev, next',
                right: 'title'
            },
            viewRender: function(view, element) {
                var today = moment();
                var prevButton = $(".fc-prev-button");
                if (view.start.isBefore(today, 'day')) {
                    prevButton.prop('disabled', true);
                } else {
                    prevButton.prop('disabled', false);
                }
            }
        });
    });
    </script>

</body>
</html>