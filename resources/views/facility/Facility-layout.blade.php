<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Facilities</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 

</head>
<body>
    @include('facility.Facility-header')
    @include('facility.Facility-body')
    @include('facility.Facility-footer')
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
</body>
</html>