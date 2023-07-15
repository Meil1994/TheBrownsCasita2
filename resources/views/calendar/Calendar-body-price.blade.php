<div class="p-4 grid grid-cols-1 divide-x tracking-2 l:grid-cols-3 l:mt-10">
    <div class="border-none 2m:p-10 2m:pb-0 mmm:p-28 mmm:pt-10 mmm:pb-5 l:p-10 l:col-span-1">
        <p class="text-blue-500 text-2xl font-light">
            Price
        </p>
        <h1 class="text-4xl mt-2">
            Price starts at
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
    </div>
    <div class="block mmm:flex border-none 2m:p-10 2m:pt-0 l:mt-10 l:col-span-2 l:pl-0 l:ml-0">
        <img class="border border-slate-500 h-300 w-100 p-1 bg-slate-100 mt-10 mmm:m-1 object-cover" src="{{asset('images/photo7.jpeg')}}" alt=""/>
        <img class="border border-slate-500 hidden 3m:block w-100 h-300 p-1 bg-slate-100 mt-10 mmm:m-10 mmm:ml-0 mmm:mr-0 object-cover" src="{{asset('images/photo14.jpeg')}}" alt=""/>
        <img class="border border-slate-500 h-300 w-100 p-1 bg-slate-100 mt-10 mmm:mt-20 mmm:m-1 object-cover" src="{{asset('images/photo8.jpeg')}}" alt=""/>
    </div>
    
</div>