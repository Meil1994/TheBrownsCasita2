@foreach ($discounts as $discount)
    <form 
        id="form1"
        action="{{route('payment')}}" method="post"
        class="bg-gradient-to-b from-stone-900/90 to-slate-600/50 pt-10">
    @csrf
        <div class="mm:p-10 mmm:p-20 mmm:pt-10 mmm:pb-10 llll:p-40 llll:pt-10 llll:pb-10 5m:p-48 5m:pt-10 5m:pb-10 mx:p-28 mx:pt-10 pt-10 5m:grid grid-cols-2 divide-x">
            <div class="border-none p-2">
                <div class="ring-2 ring-white p-2 pt-4 pb-4 2m:p-10 text-white">
                    <div>
                        <h1 class="text-xl mb-2 underline underline-offset-8">Booking Details</h1>   
                    </div>

                    <div class="form-group mt-12 flex justify-between items-center">
                        <label for="checkin">Check-in</label>
                        <input 
                            readonly
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
                            readonly
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
                            <input class="w-100 border-none bg-transparent text-center pl-1 m2m:pl-3" id="pricePerDay" type="number" value="{{ $discount->price }}" readonly />
                        </div>
                    </div>

                    <div class="form-group mt-3 flex justify-between items-center">
                        <label class="" for="guests">Guest</label>
                        <input 
                            readonly
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
                        @if ($discount->discount_1 > 0 || $discount->discount_2 > 0 || $discount->discount_3 > 0)
                            <select class="text-black text-center bg-white border border-gray-400 rounded-md py-1 px-2 w-28 mm:w-32 m2m:w-60 mr-3" name="discount" id="discount">
                                <option>0</option>
                                @if ($discount->discount_1 > 0)
                                    <option>{{ $discount->discount_1 }}%</option>
                                @endif
                                @if ($discount->discount_2 > 0)
                                    <option>{{ $discount->discount_2 }}%</option>
                                @endif
                                @if ($discount->discount_3 > 0)
                                    <option>{{ $discount->discount_3 }}%</option>
                                @endif
                            </select>
                        @endif
                        @error('discount')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 block">
                        <label>Add a booking note</label>
                        <br/>
                        <textarea 
                            class="text-black w-100 mr-3 rounded-md h-10"
                            name="note"
                        ></textarea>
                        @error('note')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>
            </div>


            <div class="p-2 border-none">
                <div class="p-10 pt-0">

                    <div class="form-group  p-3 ring-2 ring-white text-black">
                        <label class="text-white">Total Amount</label>
                        <div>
                            <span class="absolute ml-2 mt-4">₱</span>
                            <input 
                                readonly
                                id="totalAmount" 
                                class="w-100 h-10 text-center rounded-md bg-white border border-slate-500" 
                                name="amount"
                            />
                        </div>

                        

                        @error('amount')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <p class="text-center text-white mt-10">Pay with</p>

                    <div class="p-4">
                        <button type="submit" class="ring-2 rounded-lg w-100 p-10 pt-1 pb-1 text-blue-950 bg-amber-400 hover:bg-amber-500 ring-white hover:text-white"><i class="fa-brands fa-cc-paypal"></i><span class="ml-1 text-md">PayPal</span></button>
                        <button type="submit" class="ring-2 rounded-lg mt-2 w-100 p-10 pt-1 pb-1 text-white bg-slate-500 hover:bg-slate-600 ring-white hover:text-amber-500"><i class="fa-regular fa-credit-card"></i><span class="ml-1 text-md">Debit or Credit</span></button>
                        <p class="text-center text-sm text-blue-400" style="margin-top: 20px;">Powered by <i class="fa-brands fa-paypal"></i></p>
                    </div>

                    <div>
                        <p class="text-center text-red-200 mt-7">Other payment options? No worries, send us a message by clicking the button.</p>
                        <div class="flex justify-center">
                            <a href="https://www.facebook.com/thebrownscasita" target="blank" class="bg-blue-500 text-white p-10 pt-1 pb-1 rounded-xl mt-4 hover:bg-blue-600">Message Us</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>  
        </div>
        
        <script>
            // Disable form submission on Enter key press
            document.addEventListener("DOMContentLoaded", function() {
                var form = document.querySelector("#form1");
                form.addEventListener("keydown", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                    }
                });
            });
        </script>

    </form>

@endforeach





