<div>
    @extends('admin.Admin-layout')
    @section('content')


    @foreach ($discounts as $discount)
    <div class="p-2 pt-10 mm:p-20 mm:pt-20 bg-slate-300 h-screen">
        <h1 class="text-center text-4xl text-zinc-700">Edit Profile</h1>
        <hr class="w-50 ml-auto mr-auto mb-10 bg-slate-300 h-1"/>
        <div class="bg-white w-100 ml-auto mr-auto p-4 shadow-lg shadow-black l:w-50 pt-3 pb-3">
            <form 
                action="/pricing/edit" 
                method="POST">
                    @csrf
                    @method('PUT')
                <div>
                    <div class="form-group pl-1 mb-3 bg-slate-400 pb-2 pr-1 pt-1">
                        <label for="price">Price</label>
                        <div class="flex">
                            <input type="text" name="price" value="{{ $discount->price }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0 pl-10">
                            <span class="absolute ML-2">PHP</span>
                        </div>
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="bg-slate-400 pb-2 pr-1 pt-1">
                        <div class="form-group pl-1 ">
                            <label for="discount_1">Discount 1</label>
                            <div class="flex">
                                <input type="text" name="discount_1" value="{{ number_format($discount->discount_1, 0) }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                                <span class="absolute ml-10">%</span>
                            </div>
                            @error('discount_1')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
    
                        <div class="form-group pl-1">
                            <label for="label_1">Discount 1 Label</label>
                            <input type="text" name="label_1" value="{{ $discount->label_1 }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                            @error('label_1')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="bg-slate-400 pb-2 pr-1 pt-1 mt-3">
                        <div class="form-group pl-1">
                            <label for="discount_2">Discount 2</label>
                            <div class="flex">
                                <input type="text" name="discount_2" value="{{ number_format($discount->discount_2, 0) }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                                <span class="absolute ml-10">%</span>
                            </div>
                            @error('discount_1')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
    
                        <div class="form-group pl-1">
                            <label for="label_2">Discount 2 Label</label>
                            <input type="text" name="label_2" value="{{ $discount->label_2 }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                            @error('label_2')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="bg-slate-400 pb-2 pr-1 pt-1 mt-3">
                        <div class="form-group pl-1">
                            <label for="discount_3">Discount 3</label>
                            <div class="flex">
                                <input type="text" name="discount_3" value="{{ number_format($discount->discount_3, 0) }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                                <span class="absolute ml-10">%</span>
                            </div>
                            @error('discount_3')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
    
                        <div class="form-group pl-1">
                            <label for="label_3">Discount 3 Label</label>
                            <input type="text" name="label_1" value="{{ $discount->label_3 }}" class="form-control border border-slate-500 rounded-md w-100 p-2 pt-0 pb-0">
                            @error('label_3')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                

                <div class="text-center">
                    <button type="submit" class="border hover:border-indigo-700 hover:bg-white hover:text-indigo-700 p-4 pt-1 pb-1 bg-indigo-700 text-white mt-10">Update</button>
                </div>

            </form>
        </div>
    </div>
    @endforeach
  
    




    @endsection
</div>