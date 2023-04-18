<div class="border border-slate-500 w-100 mt-2 p-2">
    <div class="w-100 p-2 3m:flex 3m:justify-between items-center">
        <h1>Card payment</h1>
        <img class="h-5 " src="{{asset('images/photo20.png')}}" alt="" class="logo"/>
    </div>
    <hr/>
    <form class="p-3">
        <div class="p-2 mt-4">
            <p>Enter your card details</p>
        </div>
        <div class="p-2 pt-0">
            <label class="font-light">Card Number</label>
            <input required type="number" class="border border-slate-500 rounded-md w-100 pl-2"></input>
        </div>
        <div class="p-2 pt-0">
            <label class="font-light">Name on Card</label>
            <input required type="text" class="border border-slate-500 rounded-md w-100 pl-2"></input>
        </div>
        <div class="p-2 pt-0">
            <label class="font-light">CCV</label>
            <input required type="number" class="border border-slate-500 rounded-md w-100 pl-2"></input>
        </div>

        <div class="p-2 pt-0">
            <label class="font-light">Expiration</label>
            <div class="flex justify-between">
                <input placeholder="month" required type="number" class="border border-slate-500 rounded-md w-100 pl-2 capitalize text-center mr-1"></input>
                <input placeholder="year" required type="number" class="border border-slate-500 rounded-md w-100 pl-2 capitalize text-center ml-1"></input>
            </div>
        </div>


        <div class="b:ml-2 mb-4 text-center">
            <button class="border border-slate-500 w-50 mt-4 rounded-md hover:bg-slate-200">Submit</button>
        </div>
    </form>
</div>