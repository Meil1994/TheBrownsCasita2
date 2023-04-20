<div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/photo2.jpeg') }}');">
    <div class="bg-gradient-to-b from-stone-900/90 to-slate-600/50 pb-20">
        <div class="text-center tracking-2 text-white border-none">
            <h1 class="text-4xl pt-28 a:pt-30">Contact</h1>
            <p class="font-light text-xl">Let us know what you think</p>
        </div>
    <form 
        method="POST" 
        action="/message/contact"
        class="shadow-lg shadow-black w-80 ml-auto mr-auto bg-white mt-3 rounded-lg p-2 mmmm:w-50 llll:p-10">
        @csrf

        <div>
            <label for="email" class="text-2xl">Email</label>
            <input
                required 
                type="text" 
                name="email"
                class="border border-slate-700 w-100 h-10 rounded-md"
            />
            @error('email')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        

        <div>
            <label for="message" class="text-2xl">Message</label>
            <textarea
                required 
                type="text" 
                name="message" 
                class="border border-slate-700 w-100 rounded-md h-40">
            </textarea>
            @error('message')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="border border-sky-500 text-sky-500 rounded-md p-6 pt-1 pb-1 hover:bg-sky-500 hover:text-white">Send</button>
    </form>

    </div>
</div>

    
    



