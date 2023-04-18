@extends('profile.Profile-layout')
@section('content')

<div class="p-2 pt-10 mm:p-20 mm:pt-20 bg-slate-300 h-screen">
    <div class="m-20">
        <h1 class="text-center text-4xl">Messages</h1>
        <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
    </div>
    <div class="bg-white w-100 ml-auto mr-auto p-4 shadow-lg shadow-black l:w-50 pt-10 pb-10">


        <div class="" id="messageOutput"></div>
        <hr/>
        <form>
            <div class="form-group">
                <input 
                    type="text" class="form-control mt-2 border-slate-500 border w-100 rounded-md pl-1"
                    id="message"
                    placeholder="Message"
                >
            </div>
            <button type="submit" class="pl-2">Send</button>
        </form>


    </div>
</div>

@endsection