<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Facilities</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 

</head>
<body>

    <form method="POST" action="/admin/authenticate" class="p-2 2m:pl-10 2m:pr-10 mmmm:pr-20 mmmm:pl-20 llll:pl-48 llll:pr-48 pt-0 pb-0 bg-gradient-to-b from-stone-900/90 to-slate-600/50 h-screen">
        @csrf
    
        <div class=" ml-auto mr-auto pt-20">

            <div class="shadow-md shadow-black bg-white rounded-md p-4 llll:w-50 llll:ml-auto llll:mr-auto">
                
                <div class="w-100 ml-auto mr-auto">
                    <img class="mb-4 rounded-full h-12 border border-black" src="{{asset('images/logo.jpeg')}}" alt="" class="logo"/>
                </div>

                <div class="mb-4">
                    <label for="email" class="text-lg"
                        >Admin Email</label
                    >
                    <input
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
                        Password
                    </label>
                    <input
                        type="password"
                        class="rounded p-2 w-100 border border-slate-500"
                        name="password"
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


                


            </div>   
        </div>
        
    </form>
    
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
   
</body>
</html>