<form class="inline" method="POST" action="/logout">
    @csrf
    <div id="popup-modal" tabindex="-1" class="fixed z-50 hidden bg-slate-700/50 p-4 pt-28 overflow-x-hidden overflow-y-auto w-100 md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md  ml-auto mr-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to logout?</h3>
                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
            </div>
        </div>
    </div>
</form> 


<div class="883:hidden">
    <div id="menu" class="hidden fixed slide w-100 z-40">
        <div class=" 883:hidden bg-slate-700/50 w-100">
    
            <div class="border-none h-screen overflow-auto w-100 500:w-50% 500:ml-50%" style="background-color:#033c59;"> 
                <div class="flex justify-end p-4">
                    <button id="close"><i class="fa-solid fa-circle-xmark text-2xl"></i></button>
                </div>

                <div class="p-4">
                    <ul class="text-xl text-white">
                        <li class="flex mb-2 ml-2">
                            <a href="https://www.facebook.com/search/top?q=the%20browns%20casita" target="blank" class="mr-2"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/thebrownscasita/" target="blank" class="mr-2"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <a href="/home"><li class="hover:text-slate-800 hover:bg-white p-2">Home</li></a>
                        <a href="/about"><li class="hover:text-slate-800 hover:bg-white p-2">About Us</li></a>
                        <a href="/facility"><li class="hover:text-slate-800 hover:bg-white p-2">Facilities</li></a>
                        <a href="/contact"><li class="hover:text-slate-800 hover:bg-white p-2">Contact</li></a>
                        

                        @auth
                            
                        <a href="/my/profile"><li class="hover:text-slate-800 hover:bg-white p-2">Profile</li></a>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="hover:text-slate-800 hover:bg-white p-2 w-100 flex justify-start">
                            Logout
                        </button>
                        
                            
                    

                        @else
                            <a href="/login"><li class="hover:text-slate-800 hover:bg-white p-2">Login</li></a>
                            <a href="/register"><li class="hover:text-slate-800 hover:bg-white p-2">Register</li></a>
                        @endauth
                    </ul>
                </div>
                
               
            </div>
    
        </div>
    
    </div>
</div>

<nav>
    
    <div class="596:grid 596:grid-cols-2 p-4 pt-2 pb-2 633:p-20 633:pb-2 633:pt-2 l:p-40 l:pt-2 l:pb-2">
        <div class="381:flex items-center">
            <p class="text-sm flex items-center"><i class="fa-solid fa-phone text-amber-500"></i><span class="ml-1">09076214666</span></p>
            <p class="text-sm 381:ml-2 flex items-center"><i class="fa-solid fa-envelope text-amber-500"></i><span class="ml-1">thebrownscasita@gmail.com</span></p>
        </div>
        <div class="hidden 883:flex justify-end items-center">
            <a href="https://www.facebook.com/search/top?q=the%20browns%20casita" target="blank" class="mr-2"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/thebrownscasita/" target="blank" class="mr-2"><i class="fa-brands fa-instagram"></i></a>
            <a href="/calendar" class="bg-amber-500 p-5 pt-3 pb-3 text-sm text-white">BOOK NOW</a>
        </div>
    </div>
    <hr/>

    <div class="grid grid-cols-6 p-4 pt-2 pb-2 633:p-20 633:pb-2 633:pt-2 l:p-40 l:pt-2 l:pb-2">
        <div class="col-span-2">
            <a href="/home"><img src="{{asset('images/tbc.png')}}" class="h-20 w-20 rounded-full"/></a>
        </div>

        <div class="col-span-4">
            <ul class="flex justify-end 596:justify-between items-center h-100">
                
                <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                    <li class="cursor-pointer text-lg hidden 883:block"><a href="/home">Home</a></li>
                </div>

                <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                    <li class="cursor-pointer text-lg hidden 883:block"><a href="/about">About Us</a></li>
                </div>

                <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                    <li class="cursor-pointer text-lg hidden 883:block"><a href="/facility">Facilities</a></li>
                </div>

                <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                    <li class="cursor-pointer text-lg hidden 883:block"><a href="/contact">Contact</a></li>
                </div>

                @auth
                <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                    <li class="cursor-pointer text-lg hidden 883:block"><a href="/my/profile">Profile</a></li>
                </div>
                
                <div class="navigationBar hidden 883:block border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">

                        <button class="text-lg" data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                            Logout
                        </button>
                    
                </div>
          

                @else
                    <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                        <li class="cursor-pointer text-lg hidden 883:block"><a href="/login">Login</a></li>
                    </div>

                    <div class="navigationBar border-b-2 border-slate-500 hover:text-amber-500 hover:border-slate-600">
                        <li class="cursor-pointer text-lg hidden 883:block"><a href="/register">Register</a></li>
                    </div>

                @endauth

                <div class="flex items-center 883:hidden">
                    <a href="/calendar" class="ring-4 ring-amber-500 hover:ring-amber-600 p-3 pt-2 pb-2 mr-2 rounded-md text-sm">BOOK NOW</a>
                    <li class="ring-2 p-1 rounded-md"><button id="burger"><i class="fa-sharp fa-solid fa-bars"></i></button></li>
                </div>
            
            </ul>

        </div>
    </div>
</nav>



<script src="/modal.js"></script>
<script src="/index.js"></script>
