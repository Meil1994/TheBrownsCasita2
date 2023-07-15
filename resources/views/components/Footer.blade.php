<div class="bg-black">
    <div class="grid 1141:grid-cols-4 mmmmm:grid-cols-2 divide-x tracking-2 mmmmm:p-10 mmmmm:pt-0 p-2 pt-0 mm:p-20 mm:pb-4 mm:pt-0">
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
           <h1 class="text-xl text-amber-400">Address</h1>
           <p class="mt-0 text-sm font-light">Brgy. Cebulano, Carmen, Davao del Norte</p>
           <p class="text-red-500 mt-2">Please note:</p>
           <p class="text-sm font-light">
              NO walk ins allowed - We will provide the virtual guide once the deposit has been paid.
           </p>
        </div>
    
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
            <h1 class="text-xl text-amber-400">Social Sites</h1>
            <a target="blank" href="https://www.facebook.com/thebrownscasita" class="text-sm font-light tracking-2"><p class="mt-0 mb-0 hover:text-indigo-500">Facebook</p></a>
            <a target="blank" href="https://www.instagram.com/thebrownscasita/" class="text-sm font-light tracking-2"><p class="mt-0 hover:text-indigo-500">Instagram</p></a>
        
            <h1 class="text-xl text-amber-400 mt-10">Email</h1>
           <p class="mt-0 text-sm font-light">thebrownscasita@gmail.com</p>
        </div>
    
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
            <h1 class="text-xl text-amber-400">Other Links</h1>
                <a href="/terms" class="text-sm hover:text-indigo-500 font-light tracking-2"><p class="mt-0">Terms of Use</p></a>
                <a href="/privacy" class="text-sm hover:text-indigo-500 font-light tracking-2"><p class="mt-0">Privacy Policy</p></a>
        </div>



        
        <form 
            method="POST" 
            action="/feedbacks"
            class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
            @csrf

            <div>
                <label for="checkout" class="text-xl text-amber-400">Feedback</label>
                <textarea
                    required 
                    class="mt-2 text-black h-40 w-100 p-2 rounded-xl"
                    type="text" 
                    name="feedback" ></textarea>
                @error('checkout_date')
                    <p class="text-red-500 text-xs mt-1 p-2">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="rounded-xl border border-white w-100 bg-indigo-500 h-10 hover:border-indigo-500 hover:text-indigo-500 hover:bg-white hover:ease-in-out duration-300">Send</button>
        </form>
    
 
    </div>
    <div class="text-center pb-2 ml-20 mr-20">
        <hr/>
        <p class="text-white mt-2 text-sm">Copyright &copy 2023 The Browns Casita. All Rights Reserved.</p>
    </div>
    <div class="text-white flex justify-end">
        <button class="mr-2" onclick="scrollToTop()" style="margin-top: -80px;">
            <i class="fa-solid fa-arrow-up-from-bracket mr-2 border border-white p-1 bg-slate-500 hover:bg-slate-600 animate-bounce"></i>
        </button>
    </div>
</div>


<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>