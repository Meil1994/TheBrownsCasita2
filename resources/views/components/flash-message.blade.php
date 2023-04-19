@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="fixed w-100 top-0 transform-translate-x-1/2 text-white text-center pt-4 h-20 text-lg bg-zinc-400/90">
       <p>{{session('message')}}</p>
    </div>
@endif