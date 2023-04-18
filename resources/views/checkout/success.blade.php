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

    <div class="p-2 pt-48">
        <div class="w-100 text-center mt-2 pb-10 bg-white">
            <x-zondicon-checkmark-outline class="h-20 ml-auto mr-auto"/>
            <h1 class="text-6xl mt-6">Thank you!</h1>
            <p class="mb-10 mt-2 text-xl">Your booking is successfull.</p>
            <a class="border hover:border-indigo-900 hover:bg-white hover:text-indigo-900 p-12 pt-1 pb-1 bg-indigo-700 text-white" href="/">Home</a>
        </div>
    </div>

</body>
</html>