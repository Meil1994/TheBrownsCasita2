<nav class="grid ms:grid-cols-3 divide-x h-200 xs:grid-cols-2 sm:grid-cols-1 bg-black pt-3">
    <div class="border-none sm:hidden ms:block">
        <ul class="flex justify-evenly mt-60 text-lg tracking-wide">
            <li class="text-white cursor-pointer hover:underline underline-offset-10"><a href="/">Home</a></li>
            <li class="text-white cursor-pointer hover:underline underline-offset-10"><a href="/facility">Facilities</a></li>
        </ul>
    </div>
    <div class="flex ms:justify-center border-none xs:justify-start xs:pl-6 sm:justify-center">
        <a href="/"><img class="rounded-full border border-white p-1 h-130 mt-4" src="{{asset('images/logo.jpeg')}}" alt="" class="logo"/></a>
    </div>
    <div class="border-none">
        <ul class="flex justify-between ms:justify-evenly text-lg sm:pl-6">
            <li class="text-slate-300 cursor-pointer hover:text-white mt-60"><a target="blank" href="https://www.facebook.com/search/top?q=the%20browns%20casita"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="text-slate-300 cursor-pointer hover:text-white mt-60"><a target="blank" href="https://www.instagram.com/thebrownscasita/"><i class="fa-brands fa-instagram"></i></a></li>
            
            <li id="profileButton" class="mt-10m hidden ms:block">
                @if (Auth::check() && Auth::user()->logo)
                    <img class="rounded-full bg-white h-8 w-8 object-fit-cover" src="{{ asset('storage/' . Auth::user()->logo) }}" alt="Logo" class="logo"/>
                @else
                    <img class="rounded-full bg-white h-7" src="{{ asset('images/photo17.png') }}" alt="Logo" class="logo"/>
                @endif
            </li>
            
            <li>
                <button id="burger" class="navbar-burger text-slate-300 border border-slate-300 focus:text-white focus:border-white p-1 mr-10 ms:hidden mt-53">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
                
                <div id="menu" class="hidden absolute ml-8 mt-2 ms:hidden">
                    <div class="navbar-menu-content">
                        <ul class="text-lg tracking-wide p-2 rounded-lg bg-white">
                            @auth
                                <li class="ms:block p-2 text-center flex items-center">
                                    <span class="font-bold">
                                        Hi, <span class="capitalize">{{auth()->user()->first_name}}</span>
                                    </span>
                                    <div>
                                        @if (Auth::check() && Auth::user()->logo)
                                            <img class="rounded-full bg-white h-8 w-8 object-fit-cover ml-1" src="{{ asset('storage/' . Auth::user()->logo) }}" alt="Logo" class="logo"/>
                                        @else
                                            <img class="rounded-full bg-white h-7" src="{{ asset('images/photo17.png') }}" alt="Logo" class="logo"/>
                                        @endif
                                    </div>
                                </li>
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a class="flex" href="/"><x-zondicon-store-front class="w-3 mr-2"/>Home</a></li>
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-0"><a href="/my/profile" class="flex"><x-zondicon-cog class="w-3 mr-2"/>Visit Profile</a></li>
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-0"><a href="/my/profile" class="flex"><x-zondicon-book-reference class="w-3 mr-2"/>My Booking</a></li>
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-0"><a class="flex" href="/facility"><x-zondicon-library class="w-3 mr-2"/>Facilities</a></li>
                                
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-3">
                                    <form class="inline" method="POST" action="/logout">
                                        @csrf
                                        <button type="submit" class="flex" onclick="return confirm('You are trying to logout. Do you want to continue?')"> 
                                            <x-zondicon-arrow-thick-right class="w-3 mr-2 mt-1"/>Logout
                                        </button>
                                    </form>
                                </li>
                            
                                @else
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a class="flex" href="/facility"><x-zondicon-library class="w-3 mr-2"/>Facilities</a></li> 
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a class="flex" href="/register"><x-zondicon-user-add class="w-3 mr-2"/>Register</a></li>
                                <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a class="flex" href="/login"><x-zondicon-subdirectory-right class="w-3 mr-2"/>Login</a></li>
                            
                                
                            @endauth
                        </ul>
                    </div
                </div>
            </li>

   
            <div id="profileMenu" class="absolute mt-90 mr-2 hidden">
                <div class="navbar-menu-content ms:block">
                    <ul class="hidden ms:block text-lg tracking-wide p-2 mt-1 rounded-lg bg-white">
                        @auth
                            <li class="hidden ms:block p-2 text-center">
                                <span class="font-bold">
                                    Hi, <span class="capitalize">{{auth()->user()->first_name}}</span>
                                    <hr/>
                                </span>
                            </li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a href="/my/profile" class="flex"><x-zondicon-cog class="w-3 mr-2"/>Visit Profile</a></li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-0"><a href="/my/profile" class="flex"><x-zondicon-book-reference class="w-3 mr-2"/>My Booking</a></li>

                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-3">
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="flex" onclick="return confirm('You are trying to logout. Do you want to continue?')">
                                        <x-zondicon-arrow-thick-right class="w-3 mr-2 mt-1"/>Logout
                                    </button>
                                </form>
                            </li>

                            @else
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a class="flex" href="/register"><x-zondicon-user-add class="w-3 mr-2"/>Register</a></li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2 pt-0"><a class="flex" href="/login"><x-zondicon-subdirectory-right class="w-3 mr-2"/>Login</a></li>
                        @endauth
                    
                    </ul>
                </div
            </div>
        </ul>
    </div>
    <script src="index.js"></script>
</nav>

