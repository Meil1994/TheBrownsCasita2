<nav class="grid ms:grid-cols-3 divide-x h-200 xs:grid-cols-2 sm:grid-cols-1 bg-black">
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
            <li class="text-slate-300 cursor-pointer hover:text-white mt-60"><i class="fa-brands fa-facebook"></i></li>
            <li class="text-slate-300 cursor-pointer hover:text-white mt-60"><i class="fa-brands fa-instagram"></i></li>
            <li class="text-slate-300 cursor-pointer hover:text-white mt-60"><i class="fa-regular fa-user"></i></li>
            
            <li>
                <button id="burger" class="navbar-burger text-slate-300 border border-slate-300 focus:text-white focus:border-white p-1 mr-10 ms:hidden mt-53">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                  </button>
                
                <div id="menu" class="hidden absolute ml-8 mt-2 w-170 h-500 ms:hidden">
                    <div class="navbar-menu-content">
                        <ul class="text-lg tracking-wide p-2 rounded-lg bg-white">
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a href="/facility">Facilities</a></li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2"><a href="/calendar">Calendar</a></li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2">Contact Us</li>
                            <li class="text-black cursor-pointer hover:underline underline-offset-10 hover:bg-indigo-300 p-2">Price</li>
                            <li onclick="window.location.href='/calendar'" class="text-white cursor-pointer bg-indigo-500 hover:underline underline-offset-10 hover:bg-white hover:text-indigo-500 hover:border-indigo-500 hover:border p-2">Start Booking</li>
                        </ul>
                    </div
                </div>
            </li>
            <li><button onclick="window.location.href='/calendar'" class="text-white cursor-pointer bg-indigo-500 pr-4 pl-4 pt-3 pb-3 mt-45 hover:bg-white hover:text-indigo-500 hover:border-indigo-500 hover:border tracking-wide hover:ease-in-out duration-300 ms:block sm:hidden">Start Booking</button></li>
        
        </ul>
    </div>
    <script src="index.js"></script>
</nav>

