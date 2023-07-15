<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>The Browns Casita</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
    rel="stylesheet"
  />

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
  @include('components.Nav')
  @include('home.Header')
  @include('home.Body')
  @include('components.Footer')
  <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
  

  

<script>
    function openMap() {
      const url = "https://www.google.com/maps/place/The+Brown+Casitas/@7.3497864,125.6780953,17z/data=!3m1!4b1!4m6!3m5!1s0x32f94fd9c5902c2d:0xc181b33922c08af6!8m2!3d7.3497864!4d125.6780953!16s%2Fg%2F11ty7ftz7y?hl=en-HK&entry=ttu";
      window.open(url, "_blank");
    }
</script>





</body>
</html>