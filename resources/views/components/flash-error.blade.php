@if (session()->has('error'))
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
        <p class="text-lg inline-block bg-red-600 rounded-md p-3"><i class="fa-solid fa-circle-exclamation text-red-300"></i><span class="text-white ml-2">{{ session('error') }}</span></p>
    </div>
    </div>
@endif