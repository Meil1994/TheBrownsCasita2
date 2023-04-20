<div>
    @extends('admin.Admin-layout')
    @section('content')

    <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
        <h1 class="text-center text-4xl text-zinc-700">Client Profiles</h1>
        <hr class="w-50 ml-auto mr-auto mb-20 bg-slate-300 h-1"/>
        <div class=" pb-10">
            <label class="pr-2 text-xl">Search Profiles</label>
            <input class="border border-slate-500 w-50 h-8 rounded-md"></input>
            <button class="h-8 border border-black pl-1 pr-1 rounded-md hover:bg-white">Search</button>
        </div>
        <div class="overflow-auto bg-white">
            <table class="w-100">
                @unless ($users->isEmpty())
                <thead class="text-center bg-slate-900 text-white">
                    <tr class="h-10">
                        <th class="border border-white">User Id</th>
                        <th class="border border-white">First Name</th>
                        <th class="border border-white">Last Name</th>
                        <th class="border border-white">Email</th>
                        <th class="border border-white">Profile Created</th>
                        <th class="border border-white">Booking</th>
                    </tr>
                    
                </thead>
                    @foreach ($users as $user)
                <tbody class="text-center">
                    <tr>
                        <td class="border border-black p-2">{{ $user->id }}</td>
                        <td class="border border-black p-2">{{ $user->first_name }}</td>
                        <td class="border border-black">{{ $user->last_name }}</td>
                        <td class="border border-black">{{ $user->email }}</td>
                        <td class="border border-black">{{ $user->created_at }}</td>
                        <td class="border border-black">{{ $user->booking()->count() }}</td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <div class="bg-slate-300">
                    <p class="text-red-500 text-xl">No Client Profiles Found</p>
                </div>
                @endunless
                    
            
            </table>
        </div>
    </div>
</div>
@endsection

    









