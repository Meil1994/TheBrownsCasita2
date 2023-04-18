@foreach ($discounts as $discount)
    <form 
        method="POST" 
        action="/bookings"
        class="bg-gradient-to-b from-stone-900/90 to-slate-600/50">
    @csrf
        <div class="pt-10 mm:pl-10 pl-2 mx:pl-28 mmm:pl-20 llll:pl-40 5m:pl-48">
            <a class="shadow-md shadow-slate-100 hover:shadow-md mm:ml-3 p-5 pt-2 pb-2 bg-red-600 hover:bg-white hover:text-black hover:shadow-black text-white rounded-md" href="/" onclick="return confirm('All the data in the fields will be remove.Do you want to continue?')">Home</a>   
        </div>
        <div class="mm:p-10 mmm:p-20 mmm:pt-10 llll:p-40 llll:pt-10 5m:p-48 5m:pt-10 mx:p-28 mx:pt-10 pt-10 5m:grid grid-cols-2 divide-x">
            <div class="border-none">
                <div class="p-2 mm:p-2 mm:pb-5 5m:mt-4 text-white">
                    <div>
                        <h1 class="text-xl mb-2 underline underline-offset-8">Booking Details</h1>   
                    </div>

                    <div class="form-group mt-12 flex justify-between items-center">
                        <label for="checkin">Check-in</label>
                        <input 
                            required 
                            class="text-black border border-gray-400 w-28 mm:w-32 m2m:w-60 h-8 text-center rounded-md mr-3" 
                            type="text" 
                            id="checkin" 
                            name="checkin_date" 
                            value="{{ request('checkin') }}" 
                        />
                        @error('checkin_date')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label for="checkout">Check-out</label>
                        <input 
                            required 
                            class="text-black border border-gray-400 w-28 mm:w-32 m2m:w-60 h-8 text-center rounded-md mr-3" 
                            type="text" 
                            id="checkout" 
                            name="checkout_date" 
                            value="{{ request('checkout') }}" 
                        />
                        @error('checkout_date')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label>Total Days</label>
                        <input 
                            required 
                            type="number" 
                            readonly 
                            class="border text-black border-gray-400 w-28 mm:w-32 m2m:w-60 h-8 text-center rounded-md mr-3" 
                            id="totalDays" 
                            name="total_days" 
                        />
                        @error('total_days')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label class="">Price per Day</label>
                        <div class="text-black border border-gray-400 w-28 mm:w-32 m2m:w-60 h-8 rounded-md mr-3 flex justify-between items-center bg-white">
                            <span class="absolute ml-2">₱</span>
                            <input class="w-100 bg-transparent text-center pl-1 m2m:pl-3" id="pricePerDay" type="number" value="{{ $discount->price }}" readonly />
                        </div>
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label class="" for="guests">Guest</label>
                        <input 
                            required 
                            class="text-black border border-gray-400 w-28 mm:w-32 m2m:w-60 h-8 text-center rounded-md mr-3" 
                            type="number" 
                            id="guests" 
                            name="guests" 
                            min="1" 
                            value="{{ request('guests') }}" 
                        />
                        @error('guests')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label class="">Discount</label>
                        <select 
                            class="text-black text-center bg-white border border-gray-400 rounded-md py-1 px-2 w-28 mm:w-32 m2m:w-60 mr-3" 
                            name="discount" 
                            id="discount"
                        >
                            <option style="background: red;" value="0">0%</option>
                            <option value="5">{{ $discount->discount_1 }}%</option>
                            <option value="10">{{ $discount->discount_2 }}%</option>
                            <option value="15">{{ $discount->discount_3 }}%</option>
                        </select>
                        @error('discount')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 block">
                        <label>Add a booking note</label>
                        <br/>
                        <textarea 
                            class="text-black w-100 mr-3 rounded-md h-80"
                            name="note"
                        ></textarea>
                        @error('note')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>
            </div>


            <div class="p-2 border-none">
                <div class="p-5 shadow-md shadow-black bg-white">

                    <div class="flex justify-between">
                        <h1 class="text-xl mb-2 underline underline-offset-8">Payment Details</h1>
                        <img class="w-14 rounded-full border border-black mb-3" src="{{asset('images/logo.jpeg')}}" alt="" class="logo"/>
                    </div>

                    <div>
                        <button type="button" class="dropbtn border rounded-md border-gray-400 flex w-100 items-center justify-between pl-2 pr-2" onclick="toggleDropdown()">Select Payment Method <x-zondicon-cheveron-down class="w-4"/></button>
                        <div class="border rounded-md border-gray-400 justify-between mt-1" id="dropdown-content" style="display:none;"> 
                            <a class="text-center hover:bg-zinc-300 hover:text-white border border-black items-center shadow-md shadow-black h-10 w-100 m-2 mt-3 mb-3 pt-1" href="#" onclick="showPaypal()">PayPal</a>
                            <a class="text-center hover:bg-zinc-300 hover:text-white border border-black items-center shadow-md shadow-black h-10 w-100 m-2 mt-3 mb-3 pt-1" href="#" onclick="showCard()">Card</a>
                        
                        </div>
                    </div>

                    <div id="paypal">
                        @include('checkout.Body-checkout-paypal')
                    </div>

                    <div id="card" style="display:none;">
                        @include('checkout.Body-checkout-card')
                    </div>

                    <div class="form-group mt-10  bg-slate-500 p-3">
                        <label>Total Amount</label>
                        <div class="items-center">
                            <span class="absolute ml-2 mt-4">₱</span>
                            <input 
                                readonly
                                id="totalAmount" 
                                class="w-100 h-8 text-center rounded-md bg-white" 
                                name="amount"
                            />
                        </div>







                        @error('amount')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="float-right mt-10 shadow-md shadow-slate-100 hover:shadow-md mm:ml-3 p-5 pt-2 pb-2 bg-blue-600 hover:bg-white hover:text-black hover:shadow-black text-white rounded-md">Book Now</button>
            </div>  
        </div>
    </form>

@endforeach





