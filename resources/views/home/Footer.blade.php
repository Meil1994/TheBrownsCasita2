<div class="bg-black">
    <div class="grid llll:grid-cols-4 mmmmm:grid-cols-2 divide-x mt-20 tracking-2 p-10 pt-0 mm:p-20 mm:pb-4 mm:pt-0">
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
           <h1 class="text-2xl">Address</h1>
           <p class="mt-2 font-light">Brgy. Cebulano, Carmen, Davao del Norte</p>
           <button class="mt-2 underline underline-offset-10 hover:text-indigo-500">Get Direction</button>
        </div>
    
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
            <h1 class="text-2xl">Contact Info</h1>
            <p class="mt-2 font-light">+63 9369361714</p>
            <p class="font-light">tbc@gmail.com</p>
        </div>
    
        <div class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
            <h1 class="text-2xl">Social</h1>
            <button class="mt-2 hover:text-indigo-500 font-light tracking-2">Facebook</button>
            <br/>
            <button class="hover:text-indigo-500 font-light tracking-2">Instagram</button>
        </div>



        
    <form 
        method="POST" 
        action="/feedbacks"
        class="text-white border-none l:p-10 l:pt-0 l:pb-0 mt-10">
        @csrf

        <div>
            <label for="checkout" class="text-2xl">Feedback</label>
            <textarea
                required 
                class="mt-2 text-black h-40 w-100"
                type="text" 
                name="feedback" >
            </textarea>
            @error('checkout_date')
                <p class="text-red-500 text-xs mt-1 p-2">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="border border-white w-100 bg-indigo-500 h-10 hover:border-indigo-500 hover:text-indigo-500 hover:bg-white hover:ease-in-out duration-300">Send</button>
    </form>
    
 
    </div>
    <div class="text-center pb-2 ml-20 mr-20">
        <hr/>
        <p class="text-white mt-2">Copyright &copy 2023 The Browns Casita. All Rights Reserved.</p>
    </div>
</div>