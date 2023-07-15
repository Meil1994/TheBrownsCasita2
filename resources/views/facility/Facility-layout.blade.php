<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Facilities</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
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
    </style>
    
</head>
<body>
    <x-flash-message/>
    @include('components.Nav')
    @include('facility.Facility-body')
    @include('components.Footer')
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>


    <script>
        function openMap() {
          const url = "https://www.google.com/maps/place/The+Brown+Casitas/@7.3480622,125.5825326,13z/data=!4m10!1m2!2m1!1sthe+browns+casita+carmen+city+davao+del+norte!3m6!1s0x32f94fb743141dbb:0x4b085a742880497b!8m2!3d7.3480622!4d125.6587503!15sCi10aGUgYnJvd25zIGNhc2l0YSBjYXJtZW4gY2l0eSBkYXZhbyBkZWwgbm9ydGWSAQV2aWxsYeABAA!16s%2Fg%2F11t6mrzxsz";
          window.open(url, "_blank");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
</html>