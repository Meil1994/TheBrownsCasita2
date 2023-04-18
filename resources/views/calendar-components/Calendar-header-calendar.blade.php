<div class="bg-cover bg-top bg-no-repeat h-800" style="background-image: url('{{ asset('images/photo15.jpeg') }}');">
    <div class="bg-gradient-to-b from-stone-900/90 to-slate-600/50 pb-20">
        <div class="text-center tracking-2 text-white border-none">
            <h1 class="text-4xl pt-28 a:pt-52">Calendar</h1>
            <p class="font-light text-xl">Start your booking by checking the available dates!</p>
        </div>
        <form method="post" action="{{ route('checkout') }}" class="bg-white w-75 a:flex ml-auto mr-auto justify-evenly grid-cols-2 divide-x mt-10 a:h-130">
            @csrf
            <div class="form-group border-none p-2 text-center a:w-100 w-75 ml-auto mr-auto a:mt-3">
                <label class="text-black font-light" for="checkin">CHECK-IN</label>
                <input required autocomplete="off"  type="text" placeholder="MM/DD/YYYY" class="form-control w-100 text-center border border-black text-black" id="checkin" name="checkin" value="{{ old('checkin') }}">
                <div id="checkin-datepicker" class="datepicker" style="display: none;"></div>
            </div>
            
            <div class="form-group border-none p-2 text-center a:w-100 w-75 ml-auto mr-auto a:mt-3">
                <label class="text-black font-light" for="checkout">CHECK-OUT</label>
                <input required autocomplete="off" type="text" placeholder="MM/DD/YYYY" class="form-control w-100 text-center border border-black text-black" id="checkout" name="checkout" value="{{ old('checkout') }}">
                <div id="checkout-datepicker" class="datepicker" style="display: none;"></div>
            </div>
    
            <div class="form-group border-none p-2 text-center a:w-100 w-75 ml-auto mr-auto a:mt-3">
                <label class="text-black font-light" for="guests">GUESTS</label>
                <br/>
                <input required type="number" id="guests" name="guests" value="{{ old('guests', 1) }}" min="1" class="form-control w-100 ml-auto mr-auto text-center border border-black text-black">
            </div>
    
            <div class="border-none a:w-100 w-50 ml-auto mr-auto">
                <button type="submit" class="bg-sky-500 w-100 mb-10 a:mb-0 h-10 a:h-100 text-slate-100 hover:bg-white hover:text-sky-500 hover:border hover:border-sky-500">
                    BOOK NOW
                </button>
            
            </div>
        </form>
    </div>
</div>

    
    



