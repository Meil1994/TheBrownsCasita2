



    <div>
        @extends('admin.Admin-layout')
        @section('content')
    
        <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
            <h1 class="text-center text-4xl text-zinc-700">Messages</h1>
            <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
            <form method="GET" action="{{ route('admin.messages.index') }}">
                <div>
                  <input class="border border-slate-500 w-50 h-8 rounded-md" name="q" value="{{ request('q') }}"></input>
                  <button class="h-8 border border-black pl-1 pr-1 rounded-md hover:bg-white" type="submit">Search</button>
                </div>
            </form>
            <div class="overflow-auto bg-white">
                <table class="w-100">
                    @unless ($messages->isEmpty())
                    <thead class="text-center bg-slate-900 text-white">
                        <tr class="h-10">
                            <th class="border border-white">Created At</th>
                            <th class="border border-white">Email</th>
                            <th class="border border-white w-50">Message</th>
                            <th class="border border-white">Respond</th>
                        </tr>
                        
                    </thead>
                        @foreach ($messages as $message)
                    <tbody class="text-center">
                        <tr class="h-10">
                            <td class="border border-black">{{ $message->created_at }}</td>
                            <td class="border border-black">{{ $message->email }}</td>
                            <td class="border border-black">{{ $message->message }}</td>
                            <td class="border border-black hover:bg-slate-900 hover:text-white">
                                <a href="/email/{{ $message->id }}">Reply</a>
                            </td>
    
                        </tr>
                    </tbody>
                    @endforeach
                    @else
                    <div class="bg-slate-300">
                        <p class="text-red-500 text-xl">No Client Feedbacks Found</p>
                    </div>
                    @endunless
                        
                
                </table>
            </div>
        </div>
    </div>
    @endsection
    