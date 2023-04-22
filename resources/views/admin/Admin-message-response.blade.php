<div>
    @extends('admin.Admin-layout')
    @section('content')

    <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
        <h1 class="text-center text-4xl text-zinc-700">Message Response</h1>
        <hr class="w-50 ml-auto mr-auto mb-20 bg-slate-300 h-1"/>
        <div class="w-50 shadow-lg shadow-black bg-white ml-auto mr-auto rounded-lg p-10">
            <form method="POST" action="{{ route('admin.message.response.send', ['message' => $message->id]) }}">
                @csrf
                <input class="border border-slate-500 w-100 p-1 rounded-lg" readonly name="email" value="{{ $message->email }}">
                <div class="border border-slate-500 mt-2 h-48 p-2 rounded-lg overflow-auto">
                    <label class="font-light">Customer's Message</label>
                    <hr/>
                    <p class="mt-3">{{ $message->message }}</p>
                    
                </div>
                <div class="mt-2">
                    <hr/>
                    <textarea placeholder="Type your response here..." class="p-2 border border-slate-500 w-100 rounded-lg" id="response" name="response" rows="5"></textarea>
                </div>
                <button type="submit" class="border hover:border-indigo-700 hover:bg-white hover:text-indigo-700 p-4 pt-1 pb-1 bg-indigo-700 text-white mt-10 rounded-md">Respond</button>
            </form>
        </div>
    </div>


    @endsection

</div>