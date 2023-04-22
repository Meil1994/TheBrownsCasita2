<div class="bg-slate-900 text-white 4m:h-screen 4m:block overflow-auto">
    <div class="flex p-2 sms:p-10 pt-10 pb-10 4m:justify-center llll:justify-normal justify-between">
        <div class="flex items-center">
            <img class="rounded-full bg-white h-50 w-50.1 mr-2 4m:mr-0 llll:mr-2" src="{{asset('images/photo17.png')}}" alt="" class="logo"/>
            <p class="text-xl font-light 4m:hidden llll:block">Hello, Admin</p>
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
                        <li class="flex p-2 hover:bg-slate-700"><a href="/admin" class="flex"><x-zondicon-cog class="w-4"/><p class="font-light ml-2">Admin</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="" class="flex"><x-zondicon-store-front class="w-4"/><p class="font-light ml-2">Client</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="/totaluser" class="flex"><x-zondicon-user-group class="w-4"/><p class="font-light ml-2">Profiles</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="/admin/bookings" class="flex"><x-zondicon-book-reference class="w-4"/><p class="font-light ml-1">Bookings</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="/email" class="flex"><x-zondicon-conversation class="w-4"/><p class="font-light ml-1">Messages</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="/customer/feedback" class="flex"><x-zondicon-thumbs-up class="w-4"/><p class="font-light ml-1">Feedback</p></a></li>
                        <li class="flex p-2 hover:bg-slate-700"><a href="/pricing" class="flex"><x-zondicon-tag class="w-4"/><p class="font-light ml-1">Pricing</p></a></li>
                        
                        
                        <li class="flex p-2 mt-5 hover:bg-slate-700"><a href="" class="flex"><x-zondicon-subdirectory-right class="w-4"/><p class="font-light ml-1">Logout</p></a></li>
                    </ul>
                </div
            </div>
        </li>

    </div>

    <hr class="hidden 4m:block"/>
    
    <ul class="hidden pt-10 4m:block">
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/admin" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-cog class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Admin</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-store-front class="w-4 llll:mr-6 llll:ml-4"/><p class="hidden llll:block font-light">Client</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/totaluser" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-user-group class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Profiles</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/admin/bookings" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-book-reference class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Bookings</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/email" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-conversation class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Messages</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/customer/feedback" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-thumbs-up class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Feedback</p></a></li>
        <li class="p-2 mb-2 hover:bg-slate-700"><a href="/pricing" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-tag class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Pricing</p></a></li>
    

        <li class="p-2 mb-2 hover:bg-slate-700 mt-20"><a href="" class="flex text-xl justify-center llll:justify-normal"><x-zondicon-subdirectory-right class="w-4 llll:mr-6 llll:ml-4"/><p class="font-light hidden llll:block">Logout</p></a></li>
   
    </ul>

    <script src="index.js"></script>
</div>