<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
      font-family: "Work Sans", sans-serif;
    }
    </style>
</head>
<body>
    <div class="h-screen p-3 bg-gradient-to-b from-stone-900/90 to-slate-600/50" >
        <div>
            <x-flash-message/>
            <x-flash-error/>
        </div>
        <div class="flex justify-center">
            <img src={{ asset('images/tbc.jpeg') }} class="h-20 w-20 rounded-full"/>
        </div>

        <div class="flex justify-center">
            <div class="bg-white p-4 mt-10 rounded-lg md1:w-400 ">
                <p class="text-center mb-4">Update Password</p>
                <form action="/reset/password/{{ $token }}" method="POST">
                    @csrf
                
                   
                    <input 
                    class="h-10 mb-2 rounded-lg w-100 border border-slate-500 pl-2"
                    type="password" 
                    name="password" 
                    placeholder="New Password" 
                    required>
                    
    
                    <input 
                    class="h-10 mb-2 rounded-lg w-100 border border-slate-500 pl-2"
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Confirm Password" 
                    required>
                    
                
                    <div class="flex justify-center pt-4 mb-5">
                        <button type="submit" class="mt-2 w-60 border border-black p-2 rounded-lg hover:text-white hover:bg-black">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>




