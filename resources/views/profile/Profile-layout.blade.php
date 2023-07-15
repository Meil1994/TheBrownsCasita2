<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TBC Profile</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <style>

        @keyframes slideIn {
            from {
                right: -100%;
            }
            to {
                right: 0%;
            }
        }
        
        @keyframes slideOut {
            from {
                right: 0%;
            }
            to {
                right: -100%;
            }
        }
        
        .slide-enter {
            animation: slideIn .5s forwards;
        }
        
        .slide-exit {
            animation: slideOut .5s forwards;
        }
    </style>
  
    

</head>
<body>


    <div class="1000:grid 1000:grid-cols-4 divide-x ring-2 h-screen overflow-hidden">
        <div class="hidden bg-slate-900 text-white 4m:block 1000:h-screen overflow-auto">
            <div class="hidden 1000:flex justify-center mt-10">
                <a href="/home"><img src="{{ asset('images/tbc.png')}}" class="w-20 h-20 rounded-full"/></a>
            </div>

            <div class="flex justify-center">
                <div class="flex 1000:pt-10 1000:pb-0 4m:justify-center llll:justify-normal justify-between">
                    <div class="hidden 1000:block p-10 pt-0">
                        <div class="ring-2 p-10 rounded-xl">
                            @if (Auth::check() && Auth::user()->logo)
                            <a href="/" class="flex justify-center">
                                <img onclick="windo" class="ring-2 rounded-full bg-white h-50 w-50.1  4m:mr-0 object-fit-cover" src="{{ asset('storage/' . Auth::user()->logo) }}" alt="Logo" class="logo"/>
                            </a>
                            @else
                                <a class="flex justify-center" href="/"><img class="rounded-full bg-white h-50 w-50.1" src="{{ asset('images/photo17.png') }}" alt="Logo" class="logo"/></a>
                            @endif
                            <p class="mt-4 text-center text-xl font-light llll:block">Hello, {{ Auth::user()->first_name }}</p>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <ul class="hidden 1000:flex justify-center">
                <div class="w-60">
                    <li class="p-2 mb-2 hover:bg-slate-700"><a href="/my/profile" class="flex text-xl justify-center llll:justify-normal"><p class="font-light">My Bookings</p></a></li>
                    <li class="p-2 mb-2 hover:bg-slate-700"><a href="/my/profile/edit" class="flex text-xl justify-center llll:justify-normal"><p class="font-light">Edit Profile</p></a></li>
                    <li class="p-2 mb-2 hover:bg-slate-700"><a href="/my/profile/feedback" class="flex text-xl justify-center llll:justify-normal"><p class="font-light">Feedback</p></a></li>
                </div>
            </ul>
        </div>

        <div class="1000:col-span-3 border border-black">
            @yield('content')
        </div>

   </div>

</body>
</html>

