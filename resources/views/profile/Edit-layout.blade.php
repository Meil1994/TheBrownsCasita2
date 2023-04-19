@extends('profile.Profile-layout')
    @section('content')
    <div class="p-2 pt-10 mm:p-20 mm:pt-20 bg-slate-300 h-screen">
        <h1 class="text-center text-4xl text-zinc-700">Edit Profile</h1>
        <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
        <div class="bg-white w-100 ml-auto mr-auto p-4 shadow-lg shadow-black l:w-50 pt-10 pb-10">
            <form action="{{ route('my.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex">
                    <div class="form-group pr-1">
                        <label for="first_name">First Name</label>
                        <input minlength="3" required type="text" name="first_name" value="{{ $user->first_name }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                        @error('first_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group pl-1">
                        <label for="last_name">Last Name</label>
                        <input minlength="3" required  type="text" name="last_name" value="{{ $user->last_name }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex">
                    <div class="form-group pr-1">
                        <label for="email">Email</label>
                        <input type="email" required  name="email" value="{{ $user->email }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group pl-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-1">
                    <label for="logo">Logo</label>
                    <input
                        type="file"
                        class="border border-slate-500 rounded p-2 w-100"
                        name="logo"
                    />
    
                    <img
                        class="w-48  mt-1 ml-auto mr-auto"
                        src="{{$user->logo ? asset('storage/' . $user->logo) : asset('/images/no-image.png')}}"
                        alt=""
                    />
    
                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="border hover:border-indigo-700 hover:bg-white hover:text-indigo-700 p-4 pt-1 pb-1 bg-indigo-700 text-white mt-10">Update</button>
                </div>

            </form>
        </div>
    </div>
    @endsection