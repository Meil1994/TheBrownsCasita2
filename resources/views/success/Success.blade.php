<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Payment</title>
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
    <div class="flex justify-center items-center h-screen overflow-auto bg-gradient-to-b from-stone-900/90 to-slate-600/50">
        <div class=" bg-white rounded-xl pb-10">
            <div class="flex justify-center p-4">
                <p class="flex justify-center items-center"><i class="fa-sharp fa-regular fa-circle-check text-blue-600 text-4xl"></i> <span class="ml-1 text-xl underline underline-offset-8">Payment Successful!</span></p>
            </div>
            <hr/>
            <div class="p-4 text-center">
                <h1 class="text-lg">Thank you for your booking!</h1>
                <p class="mt-7 text-sm font-thin">Your Transaction ID is:</p>
                <p class="text-slate-900 text-sm font-thin">{{ $paymentId }}</p>
            </div>

            <div class="flex justify-center">
                <a href="/my/profile" class="bg-blue-500 text-white p-10 pt-1 pb-1 rounded-xl mt-9">My Booking</a>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
</body>
</html>