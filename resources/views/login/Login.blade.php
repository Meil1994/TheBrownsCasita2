<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Facilities</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    /><style>
        body {
      font-family: "Work Sans", sans-serif;
    }
    </style>
</head>
<body>
    <x-flash-message/>
    @include('components.Nav')

    <form method="POST" action="/users/authenticate" class="p-2 2m:pl-10 2m:pr-10 mmmm:pr-20 mmmm:pl-20 llll:pl-48 llll:pr-48 pt-0 pb-28 bg-gradient-to-b from-stone-900/90 to-slate-600/50">
        @csrf
    
        <div class=" ml-auto mr-auto pt-20">

            <div class="shadow-md shadow-black bg-white rounded-md p-4 llll:w-50 llll:ml-auto llll:mr-auto">

                <div class="mb-4">
                    <label for="email" class="text-lg"
                        > <i class="fa-solid fa-envelope"></i> Email</label
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
            
                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-lg"
                    >
                    <i class="fa-solid fa-unlock"></i> Password
                    </label>
                    <input
                        type="password"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="password"
                        placeholder="Password1234"
                    />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <button
                        type="submit"
                        class="p-10 pt-2 pb-2 bg-laravel rounded hover:bg-black hover:text-white border border-slate-500"
                    >
                        Sign In
                    </button>
                </div>
            
                <div class="mb-7">
                    <p>
                        Don't have an account yet?
                        <a href="/register" class="register text-blue-600"
                            >Register</a
                        >
                    </p>

                    <p>
                        <a href="/reset" class="register text-blue-600 underline underline-offset-2 text-sm"
                            >Reset Password</a
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