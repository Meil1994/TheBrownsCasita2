@extends('profile.Profile-layout')
@section('content')
    <div class="p-2 pt-10 mm:p-20 mm:pt-20 bg-slate-300 h-screen">
        <h1 class="text-center text-4xl text-zinc-700">Send Us a Message</h1>
        <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
        <form 
            method="POST" 
            action="/profile/message"
            class="shadow-lg shadow-black w-80 ml-auto mr-auto bg-white mt-3 rounded-lg p-2 mmmm:w-75 llll:p-10">
            @csrf

            <div>
                <label for="email" class="text-xl">Active Email</label>
                <input
                    required 
                    type="text" 
                    name="email"
                    class="border border-slate-700 w-100 h-10 rounded-md"
                />
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>


            <div>
                <label for="message" class="text-xl">Message</label>
                <textarea
                    required 
                    type="text" 
                    name="message" 
                    class="border border-slate-700 w-100 rounded-md h-40">
                </textarea>
                @error('message')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="border border-sky-500 text-sky-500 rounded-md p-6 pt-1 pb-1 hover:bg-sky-500 hover:text-white">Send</button>
        </form>

        <p class="text-center mt-20 text-lg underline-offset-4 underline">Note: We will get back to you through the active amail address provided.</p>
    </div>
@endsection