@extends('profile.Profile-layout')
    @section('content')
    
    <div class="bg-slate-300 h-screen overflow-auto">
        <div class="sticky top-0 z-50">
            @include('profile.ProfileNav')
        </div>
        <div class="p-2 pt-10 mm:p-20 mm:pt-10">
            <h1 class="text-center text-4xl text-white mb-10">Edit Profile</h1>
            <div class="bg-white w-100 ml-auto mr-auto p-4 shadow-lg shadow-black l:w-50 pt-10 pb-10">
                <form method="POST" action="/my/profile/edit" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
        
                    <div class="w-200 h-200 ml-auto mr-auto">
                        <label for="logo" class="cursor-pointer">
                            
                            <div>
                                @if (Auth::check() && Auth::user()->logo)
                                <img class="mt-1 ml-auto mr-auto h-200 w-200 rounded-full ring-4 object-cover" id="previewImage" src="{{$user->logo ? asset('storage/' . $user->logo) : asset('/images/no-image.png')}}" alt=""/>
                                @else
                                <img class="mt-1 ml-auto mr-auto h-200 w-200 rounded-full ring-4 object-cover" id="previewImage" src="{{ asset('images/photo17.png') }}"  alt=""/>
                                @endif
                                <input class="hidden" id="logo" name="logo" type="file" accept="image/*" onchange="previewLogo(event)">
                            </div>
                            <div style="margin-top: -50px">
                                <i class="fa-solid fa-camera p-3 rounded-full bg-blue-400 text-white hover:bg-blue-500" style="margin-left: 150px"></i>
                            </div>
                        </label>
                    </div>
            
                    
                    <div class="mb-4 mt-10">
                        <label class="ml-2 text-sm text-slate-500"><i class="fa fa-thin fa-envelope"></i> Email Address:</label>
                        <input
                        name="email"
                        type="email"
                        value="{{ $user->email }}"
                        class="border border-slate-400 w-100 p-2 rounded-2xl  xmmm:p-4"
                        placeholder="Email"/>
                        @error('email')
                            <p class="text-red-500 text-xs m-0 ml-4">{{$message}}</p>
                        @enderror
                    </div>
            
                    <div class="mb-4">
                        <label class="ml-2 text-sm text-slate-500"><i class="fa fa-thin fa-user"></i> Username:</label>
                        <input
                        name="first_name"
                        minlength="5" 
                        value="{{ $user->first_name }}"
                        class="border border-slate-400 w-100 p-2 rounded-2xl xmmm:p-4"
                        placeholder="First Name"/>
                        @error('first_name')
                            <p class="text-red-500 text-xs m-0 ml-4">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="ml-2 text-sm text-slate-500"><i class="fa fa-thin fa-user"></i> Username:</label>
                        <input
                        name="last_name"
                        minlength="5" 
                        value="{{ $user->last_name }}"
                        class="border border-slate-400 w-100 p-2 rounded-2xl xmmm:p-4"
                        placeholder="Last Name"/>
                        @error('last_name')
                            <p class="text-red-500 text-xs m-0 ml-4">{{$message}}</p>
                        @enderror
                    </div>
            
                    <label class="ml-2 text-sm text-slate-500"><i class="fa fa-thin fa-lock"></i> Password:</label>
                    <input
                    minlength="6"
                    name="password"
                    type="password"
                    class="border border-slate-400 w-100  p-2 rounded-2xl xmmm:p-4"
                    placeholder="Password"/>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            
            
                <div class="flex justify-center">
                    <button type="submit" class="p-20 pt-3 pb-3 rounded-xl mt-10 bg-blue-600 text-white hover:bg-blue-700">Update</button>
                </div>
            
                
                </form>
            </div>
        </div>
        <script>
            function previewLogo(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('previewImage').src = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>
    @endsection