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

</head>
<body>

    <x-flash-message/>

    <div class="block 4m:grid 4m:grid-cols-4 divide-x">
        <div class="bg-slate-900 text-white 4m:block overflow-auto">
            <div class="flex p-2 sms:p-10 pt-10 pb-10 4m:justify-center llll:justify-normal justify-between">
                <div class="flex items-center">
                    @if (Auth::check() && Auth::user()->logo)
                      <a href="/">
                        <img onclick="windo" class="rounded-full bg-white h-50 w-50.1 mr-2 4m:mr-0 llll:mr-2 object-fit-cover" src="{{ asset('storage/' . Auth::user()->logo) }}" alt="Logo" class="logo"/>
                      </a>
                    @else
                        <a href="/"><img class="rounded-full bg-white h-50 w-50.1 mr-2 4m:mr-0 llll:mr-2" src="{{ asset('images/photo17.png') }}" alt="Logo" class="logo"/></a>
                    @endif
                    <p class="text-xl font-light 4m:hidden llll:block">Hello, {{ Auth::user()->first_name }}</p>
                </div>
        
        
                <li class="4m:hidden list-none">
                    <button id="burger" class="navbar-burger text-slate-300 border border-slate-300 focus:text-white focus:border-white p-1 ms:hidden">
                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                    
                    <div id="menu" class="m-8 mt-2 w-170 absolute hidden">
                        <div class="navbar-menu-content">
                            <ul class="block rounded-lg bg-zinc-500 justify-center pl-3 pt-2 pb-10">
                                <li class="flex p-2 hover:bg-slate-700"><a href="/my/profile" class="flex"><x-zondicon-book-reference class="w-4"/><p class="font-light ml-1">My Bookings</p></a></li>
                                <li class="flex p-2 hover:bg-slate-700"><a href="/my/profile/edit" class="flex"><x-zondicon-cog class="w-4"/><p class="font-light ml-2">Edit Profile</p></a></li>
                                <li class="flex p-2 hover:bg-slate-700"><a href="/message" class="flex"><x-zondicon-conversation class="w-4"/><p class="font-light ml-1">Message</p></a></li>
                                <li class="flex p-2 hover:bg-slate-700"><a href="" class="flex"><x-zondicon-thumbs-up class="w-4"/><p class="font-light ml-1">Feedback</p></a></li>
                                <li class="flex p-2 hover:bg-slate-700 mt-6"><a href="" class="flex"><x-zondicon-store-front class="w-4"/><p class="font-light ml-1">Home</p></a></li>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="flex ml-3" onclick="return confirm('You are trying to logout. Do you want to continue?')"> 
                                        <x-zondicon-arrow-thick-right class="w-3 mr-2 mt-1"/>Logout
                                    </button>
                                </form>
                            </ul>
                        </div
                    </div>
                </li>
        
            </div>
        
            <hr class="hidden 4m:block"/>
            
            <ul class="hidden pt-10 4m:block">
                <li class="p-2 mb-2 hover:bg-slate-700"><a href="/my/profile" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-book-reference class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">My Bookings</p></a></li>
                <li class="p-2 mb-2 hover:bg-slate-700"><a href="/my/profile/edit" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-cog class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Edit Profile</p></a></li>
                <li class="p-2 mb-2 hover:bg-slate-700"><a href="/message" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-conversation class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Message</p></a></li>
                <li class="p-2 mb-2 hover:bg-slate-700"><a href="" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-thumbs-up class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Feedback</p></a></li>
                <li class="p-2 mb-2 hover:bg-slate-700 mt-20"><a href="/" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-store-front class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Home</p></a></li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" onclick="return confirm('You are trying to logout. Do you want to continue?')" class="p-2 mb-2 hover:bg-slate-700 cursor-pointer"><a class="flex text-xl justify-center llll:justify-normal"><x-zondicon-arrow-thick-right class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Logout</p></a></button>
                </form>
        
            </ul>
        </div>

        <div class="4m:col-span-3 border border-black">
            @yield('content')
        </div>

   </div>




    <script>
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickOnBurger = event.target.closest('#burger');

        if (!isClickInsideMenu && !isClickOnBurger) {
            menu.classList.add('hidden');
        }
        });
    </script>

</body>
</html>

