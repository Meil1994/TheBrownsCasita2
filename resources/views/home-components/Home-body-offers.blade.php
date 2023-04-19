<div class="tracking-2">
    <div class="text-center">
        <p class="text-blue-500 text-2xl font-light mt-10">
            Offers
        </p>
        <h1 class="text-4xl">
            Ongoing Offers
        </h1>
    </div>

    <div class="block p-2 ms:flex ms:justify-evenly l:mt-50 mm:p-10 m:p-100 m:pt-10 l:pt-0">
        <div class="border mt-2 border-black p-1 w-100 ml-auto mr-auto mmmm:w-500 l:m-2 hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500 ms:mt-10">
            <img class="w-100 h-300" src="{{asset('images/photo4.jpeg')}}" alt=""/>
            <div>
                <p class="text-2xl mt-4 pl-2">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_1 > 0)
                            {{ number_format($discount->discount_1, 0) }}%
                        @endif
                        {{ $discount->label_1 }}
                    @endforeach
            
            
                </p>
                <ul class="font-light mt-2 list-disc pl-4">
                    <li>Free use all available facilities.</li>
                    <li>Free toiletries including soap, shampoo, tooth paste, and tooth brush.</li>
                    <li>Free drinking water.</li>
                    <li>Complementary food.</li>
                </ul>
            </div>
            <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 mt-2 mb-2 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                Book Now
            </button>
        </div>

        <div class="border mt-10 border-black p-1 w-100 ml-auto mr-auto mmmm:w-500 l:m-2 hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500">
            <img class="w-100 h-300" src="{{asset('images/photo5.jpeg')}}" alt=""/>
            <div>
                <p class="text-2xl mt-4 pl-2">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_2 > 0)
                            {{ number_format($discount->discount_2, 0) }}%
                        @endif
                        {{ $discount->label_2 }}
                    @endforeach
                </p>
                <ul class="font-light mt-2 list-disc pl-4">
                    <li>Free use all available facilities.</li>
                    <li>Free toiletries including soap, shampoo, tooth paste, and tooth brush.</li>
                    <li>Free drinking water.</li>
                    <li>Complementary food.</li>
                </ul>
            </div>
            <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 mt-2 mb-2 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                Book Now
            </button>
        </div>

        <div class="border mt-10 border-black p-1 w-100 ml-auto mr-auto mmmm:w-500 l:m-2 hover:translate-y-[-20px] shadow-xl hover:shadow-slate-500">
            <img class="w-100 h-300" src="{{asset('images/photo6.jpeg')}}" alt=""/>
            <div>
                <p class="text-2xl mt-4 pl-2">
                    @foreach ($discounts as $discount)
                        @if ($discount->discount_3 > 0)
                            {{ number_format($discount->discount_3, 0) }}%
                        @endif
                        {{ $discount->label_3 }}
                    @endforeach
                </p>
                <ul class="font-light mt-2 list-disc pl-4">
                    <li>Free use all available facilities.</li>
                    <li>Free toiletries including soap, shampoo, tooth paste, and tooth brush.</li>
                    <li>Free drinking water.</li>
                    <li>Complementary food.</li>
                </ul>
            </div>
            <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-100 text-indigo-500 mt-2 mb-2 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
                Book Now
            </button>
        </div>
    </div>
</div>
