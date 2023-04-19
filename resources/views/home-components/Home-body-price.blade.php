<div class="grid grid-cols-1 divide-x tracking-2 l:grid-cols-2">
    <div class="block p-2 mmm:flex border-none pt-0 m:pt-0 m:p-100 m:pb-0 l:pt-100 l:pr-0 mm:p-10 mm:pt-0 mmm:pt-10">
        <img class="h-300 w-100 border border-black p-1 bg-slate-100 mt-10 mmm:m-1" src="{{asset('images/photo3.jpeg')}}" alt=""/>
        <img class="h-300 w-100 border border-black p-1 bg-slate-100 mt-10 mmm:mt-20 mmm:m-1" src="{{asset('images/photo8.jpeg')}}" alt=""/>
    </div>
    <div class="p-2 border-none pb-0 m:pb-0 m:p-100 m:pt-10 pt-2 mm:p-10 mm:pt-0 l:pt-100 mm:pb-0">
        <p class="text-blue-500 text-2xl font-light">
            Price
        </p>
        <h1 class="text-4xl mt-2">
            Start your stay by checking the price
        </h1>
        <p class="text-2xl mt-4">
            @foreach ($discounts as $discount)
               PHP {{ $discount->price }}
            @endforeach /<span class="text-sm font-light">DAY</span>
        </p>
        <ul class="font-light mt-2 list-disc pl-3">
            <li>Free use all available facilities.</li>
            <li>Free toiletries including soap, shampoo, tooth paste, and tooth brush.</li>
            <li>Free drinking water.</li>
            <li>Complementary food.</li>
        </ul>
        <button onclick="window.location.href='/calendar'" class="border h-9 border-indigo-500 w-170 text-indigo-500 mt-2 mb-2 hover:bg-indigo-500 hover:text-white hover:ease-in-out duration-300">
            Book Now
        </button>
    </div>
</div>