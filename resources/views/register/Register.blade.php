<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Facilities</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
      font-family: "Work Sans", sans-serif;
    }
    </style>
</head>
<body>
    @include('components.Nav')

    <form method="POST" action="/users" class="p-2 2m:pl-10 2m:pr-10 mmmm:pr-20 mmmm:pl-20 llll:pl-48 llll:pr-48 pt-0 pb-20 bg-gradient-to-b from-stone-900/90 to-slate-600/50">
        @csrf
    
        <div class=" ml-auto mr-auto pt-20">

            <div class="shadow-md shadow-black bg-white rounded-md p-4 llll:w-75 lll:w-50 llll:ml-auto llll:mr-auto">
                <div class="mb-4">
                    <label for="first_name" class="inline-block text-lg mb-2">
                        <i class="fa-solid fa-signature"></i> First Name
                    </label>
                    <input
                        placeholder="Juan"
                        type="text"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="first_name"
                        value="{{old('first_name')}}"
                    />
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="last_name" class="inline-block text-lg mb-2">
                        <i class="fa-solid fa-signature"></i> Last Name
                    </label>
                    <input
                        placeholder="Alejandro"
                        type="text"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="last_name"
                        value="{{old('last_name')}}"
                    />
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            
                <div class="mb-4">
                    <label for="email" class="inline-block text-lg mb-2"
                        ><i class="fa-solid fa-envelope"></i> Email</label
                    >
                    <input
                        placeholder="email@gmail.com"
                        type="email"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="email"
                        value="{{old('email')}}"
                    />
                    @error('email')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            
                <div class="mb-4">
                    <label
                        for="password"
                        class="inline-block text-lg mb-2"
                    >
                    <i class="fa-solid fa-unlock"></i> Password
                    </label>
                    <input
                        placeholder="Password123"
                        type="password"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="password"
                    />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <label
                        for="password2"
                        class="inline-block text-lg mb-2"
                    >
                    <i class="fa-solid fa-unlock"></i> Confirm Password
                    </label>
                    <input
                        placeholder="Password123"
                        type="password"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="password_confirmation"
                    />
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="text-sm" style="margin-bottom: 20px;">
                    <p>By continuing, you agree to The Browns Casita's <a href="/terms" class="underline text-blue-500">Terms of Use</a>. Read our <a href="/privacy" class="underline text-blue-500">Privacy Policy</a></p>
                </div>
            
                <div class="mb-4">
                    <button
                        type="submit"
                        class="bg-laravel border border-black hover:text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Sign Up
                    </button>
                </div>
            
                <div class="mb-10 mt-10">
                    <p>
                        Already have an account?
                        <a href="/login" class="login text-blue-600"
                            >Login</a
                        >
                    </p>
                </div>
            </div>   
        </div>
        
    </form>
    @include('components.Footer')
    
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
</body>
</html>





