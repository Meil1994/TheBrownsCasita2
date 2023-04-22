
<div>
    @extends('admin.Admin-layout')
    @section('content')

    <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
        <h1 class="text-center text-4xl text-zinc-700">Client Feedbacks</h1>
        <hr class="w-50 ml-auto mr-auto mb-20 bg-slate-300 h-1"/>
        <form method="GET" action="{{ route('admin.feedback.index') }}">
            <div>
              <input class="border border-slate-500 w-50 h-8 rounded-md" name="q" value="{{ request('q') }}"></input>
              <button class="h-8 border border-black pl-1 pr-1 rounded-md hover:bg-white" type="submit">Search</button>
            </div>
        </form>
        <div class="overflow-auto bg-white">
            <table class="w-100">
                @unless ($feedbacks->isEmpty())
                <thead class="text-center bg-slate-900 text-white">
                    <tr class="h-10">
                        <th class="border border-white">User Id</th>
                        <th class="border border-white">Created At</th>
                        <th class="border border-white">First Name</th>
                        <th class="border border-white">Last Name</th>
                        <th class="border border-white">Feedack</th>
                    </tr>
                    
                </thead>
                    @foreach ($feedbacks as $feedback)
                <tbody class="text-center">
                    <tr>
                        <td class="border border-black p-2">{{ $feedback->user_id }}</td>
                        <td class="border border-black">{{ $feedback->created_at }}</td>
                        <td class="border border-black p-2">{{ $feedback->user->first_name }}</td>
                        <td class="border border-black">{{ $feedback->user->last_name }}</td>
                        <td class="border border-black">{{ $feedback->feedback }}</td>
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

    









