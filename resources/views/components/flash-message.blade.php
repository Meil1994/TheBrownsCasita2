@if (session()->has('message'))
    <div class="flex justify-center mt-4">
        <div class="absolute" x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 2000)"
         x-show="show"
         x-transition:enter="transition-opacity duration-1000"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity duration-1000"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="flex justify-center text-center pt-3 mt-3"
    >
        <p class="text-lg inline-block bg-teal-600 rounded-md p-3"><i class="fa-solid fa-square-check text-2xl text-green-200"></i><span class="text-white ml-2">{{ session('message') }}</span></p>
    </div>
    </div>
@endif

