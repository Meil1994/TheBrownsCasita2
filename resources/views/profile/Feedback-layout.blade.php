@extends('profile.Profile-layout')
@section('content')
    <div class="p-2 pt-10 mm:p-20 mm:pt-20 bg-slate-300 h-screen">
        <h1 class="text-center text-4xl text-zinc-700">Feedback & Suggestions</h1>
        <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
        <div>
            <form 
                method="POST" 
                action="/feedbacks/profile"
                class="shadow-lg shadow-black w-80 ml-auto mr-auto bg-white mt-3 rounded-lg p-2 mmmm:w-75 llll:p-10">
                @csrf

                <div>
                    <label for="feedback" class="text-xl">Please let us know what you think.</label>
                    <textarea
                        required 
                        class="mt-2 text-black h-40 w-100 border border-slate-500 mb-4 rounded-lg"
                        type="text" 
                        name="feedback" >
                    </textarea>
                    @error('feedback')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                </div>
                <button type="submit" class="border border-sky-500 text-sky-500 rounded-md p-6 pt-1 pb-1 hover:bg-sky-500 hover:text-white">Send</button>
        </form>
        </div>
    </div>
@endsection