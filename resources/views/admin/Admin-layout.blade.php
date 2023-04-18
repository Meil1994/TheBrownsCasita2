<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TBC Admin</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
   
    <script src="{{ asset('js/chart.js') }}"></script>
</head>
<body>

    <div class="block 4m:grid 4m:grid-cols-4 divide-x">
        <div class="4m:col-span-1">
            @include('admin-components.Admin-nav') 
        </div>
        <div class="4m:col-span-3">
            @yield('content')
        </div>
    </div>

</body>
</html>