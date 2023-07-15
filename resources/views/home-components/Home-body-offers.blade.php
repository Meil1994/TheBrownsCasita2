<div class="tracking-2 pt-10">
    <div class="text-center p-3 pb-0 pt-0">
        <h1 class="text-md 823:text-xl text-slate-800 mt-10 mb-10">
            “Discover the best deals at the exclusive tropical hideaway villa nestled in <br class="hidden 823:block"/> Carmen, Davao del Norte.”
        </h1>
    </div>

    <div class="block p-2 ms:flex ms:justify-evenly mm:p-10 mm:pt-0 m:p-100 m:pt-0">
        <div class="ms:h-850 pb-7 ms:pb-0 border border-slate-400 p-1 w-100 ml-auto mr-auto mmmm:w-500 hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500">
            <div class="w-100 h-350 flex justify-center">
                <img class="w-100 h-350 object-fit" src="{{asset('images/tbc14a.jpeg')}}" alt=""/>
            </div>
            <div class="ms:h-430 pt-2">
                <p class="text-2xl mt-4 pl-2 h-130 text-red-500 flex justify-center items-center overflow-auto">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_1 > 0)
                            {{ number_format($discount->discount_1, 0) }}%
                            {{ $discount->label_1 }}
                        @endif
                    @endforeach
                </p>
                <hr class="ml-2 mr-2 bg-slate-500/50" style="height: 3px;"/>
                <ul class="ms:h-280 font-light list-disc pt-2 pb-2 pl-2 overflow-auto">
                    <p>Your dream vacation just got more affordable! Enjoy 10% off for your first booking.</p>
                    <p class="mt-7">With a tranquil setting and exclusive amenities, our rental villa 
                        property is the perfect escape for families, friends, business 
                        travellers & honeymooners alike.
                    </p>
                </ul>
            </div>
            <div class="mt-2">
                <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                    Book Now
                </button>
            </div>
        </div>

        <div class="mt-10 ms:mt-0 ms:m-2 ms:h-850 pb-7 ms:pb-0 border  border-slate-400 p-1 w-100 ml-auto mr-auto mmmm:w-500  hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500">
            <div class="w-100 h-350 flex justify-center">
                <img class="w-100 h-350 object-fit" src="{{asset('images/tbc15.jpg')}}" alt=""/>
            </div>
            <div class="ms:h-430 pt-2">
                <p class="text-2xl mt-4 pl-2 h-130 text-red-500 flex justify-center items-center overflow-auto">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_2 > 0)
                            {{ number_format($discount->discount_2, 0) }}%
                        @endif
                        {{ $discount->label_2 }}
                    @endforeach
                </p>
                <hr class="ml-2 mr-2 bg-slate-500/50" style="height: 3px;"/>
                <ul class="ms:h-280 font-light list-disc pt-2 pb-2 pl-2 overflow-auto">
                    <p>Book a 2-night stay and receive a complimentary bottle of Australia's 
                        finest - Yellow Tail - Cabernet Sauvignon. Experience the ultimate 
                        retreat in Carmen, Davao del Norte.
                    </p>
                </ul>
            </div>
            <div class="mt-2">
                <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                    Book Now
                </button>
            </div>
        </div>

        <div class="mt-10 ms:mt-0 ms:h-850 pb-7 ms:pb-0 border border-slate-400 p-1 w-100 ml-auto mr-auto mmmm:w-500 hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500">
            <div class="w-100 h-350 flex justify-center">
                <img class="w-100 h-350 object-fit" src="{{asset('images/tbc16.jpg')}}" alt=""/>
            </div>
            <div class="ms:h-430 pt-2">
                <p class="text-2xl pt-4 pl-2 h-130 text-red-500 flex justify-center items-center overflow-auto">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_3 > 0)
                            {{ number_format($discount->discount_3, 0) }}%
                        @endif
                        {{ $discount->label_3 }}
                    @endforeach
                </p>
                <hr class="ml-2 mr-2 bg-slate-500/50" style="height: 3px;"/>
                <ul class="ms:h-280 font-light list-disc pt-2 pb-2 pl-2 overflow-auto">
                    <p>Enjoy 7 nights stay and just pay for only 6 nights deal.</p>
                    <p class="mt-7">
                        Our exclusive rental villa property offers the perfect blend of 
                        indoor-outdoor living and local experiences in Carmen, 
                        Davao del Norte.
                    </p>
                </ul>
            </div>
            <div class="mt-2">
                <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                    Book Now
                </button>
            </div>
        </div>
    </div>
</div>
