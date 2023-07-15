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

<div class="1000:hidden">
    <div id="menu" class="hidden fixed slide w-100 z-40">
        <div class=" bg-slate-700/50 w-100">
    
            <div class="border-none h-screen w-100 500:w-50% 500:ml-50%" style="background-color:#033c59;"> 
                <div class="flex justify-end p-4">
                    <button id="close"><i class="fa-solid fa-circle-xmark text-2xl"></i></button>
                </div>
    
                <ul class="text-xl text-white p-4">
                    <a href="/home"><li class="486:hidden hover:text-slate-800 hover:bg-white p-2">Home</li></a>
                    <a href="/facility"><li class="486:hidden hover:text-slate-800 hover:bg-white p-2">About Us</li></a>
                    <a href="/facility"><li class="486:hidden hover:text-slate-800 hover:bg-white p-2">Facilities</li></a>
                    <a href="/contact"><li class="486:hidden hover:text-slate-800 hover:bg-white p-2">Contact</li></a>     
                    <a href="/my/profile"><li class="hover:text-slate-800 hover:bg-white p-2">My Bookings</li></a> 
                    <a href="/my/profile/edit"><li class="hover:text-slate-800 hover:bg-white p-2">Edit Profile</li></a> 
                    <a href="/my/profile/feedback"><li class="hover:text-slate-800 hover:bg-white p-2">Feedback</li></a>    
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="486:hidden hover:text-slate-800 hover:bg-white p-2 w-100 flex justify-start">
                        Logout
                    </button>
                </ul>
    
                
                
               
            </div>
    
        </div>
    
    </div>
</div>

<div class="block p-4 pb-0 bg-slate-300">
    <x-flash-message/>
    <ul class="flex justify-between 1000:justify-evenly items-center" style="margin-bottom: 20px;">
        <li class="1000:hidden">
            <a href="/home"><img src="{{ asset('images/tbc.png')}}" class="rounded-full" style="height: 50px; width:50px;"/></a>
        </li>
        <li class="hidden 486:block"><a href="/home" class="text-slate-700 text-lg hover:text-slate-900">Home</a></li>
        <li class="hidden 486:block"><a href="/about" class="text-slate-700 text-lg hover:text-slate-900">About Us</a></li>
        <li class="hidden 486:block"><a href="/facility" class="text-slate-700 text-lg hover:text-slate-900">Facilities</a></li>
        <li class="hidden 486:block"><a href="/contact" class="text-slate-700 text-lg hover:text-slate-900">Contact</a></li>
        <li class="hidden 486:block">
            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-slate-700 text-lg hover:text-slate-900" type="button">
                Logout
            </button>
        </li>

        <li  class="1000:hidden">
            <button id="burger"><i class="fa-solid fa-bars"></i></button>
        </li>

    </ul>
    <hr/>
</div>

<script>
 
    const modal = document.getElementById('popup-modal');

    const openButton = document.querySelector('[data-modal-toggle="popup-modal"]');

    const closeButton = document.querySelector('[data-modal-hide="popup-modal"]');

    function openModal() {
    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    modal.setAttribute('aria-modal', 'true');
    }

    function closeModal() {
    modal.classList.add('hidden');
    modal.setAttribute('aria-hidden', 'true');
    modal.setAttribute('aria-modal', 'false');
    }

    openButton.addEventListener('click', openModal);
    closeButton.addEventListener('click', closeModal);

    modal.addEventListener('click', function(event) {
    if (event.target === modal) {
        closeModal();
    }
    });

</script>
<script src="/index.js"></script>