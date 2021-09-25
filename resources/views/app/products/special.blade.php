@extends("layouts.app")
@section("head")
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section("content")
    <div class="flex items-center lg:w-2/5 md:w-3/5 w-4/5 rounded-lg bg-gray-200 mt-9 px-3 py-2 mr-7 text-sm">
        <div class="flex px-3">
            <label class="block uppercase tracking-wide text-custom-black text-xs font-bold pt-2 pl-2" for="grid-state">
              مرتب سازی بر اساس
            </label>
            <div class="relative">
              <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-2 pr-2 pl-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer" id="grid-state">
                <option>پرفروش ترین</option>
                <option>جدیدترین</option>
                <option>محبوب ترین</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-1 pt-1 text-gray-700">
                <i class="fas fa-chevron-down"></i>
              </div>
            </div>
        </div>
        <div class="flex items-center justify-center">  
            <label 
            for="toogleA"
            class="flex items-center cursor-pointer"
            >
            <!-- label -->
            <div class="ml-3 text-gray-700 font-medium">
                فقط کالاهای موجود
            </div>
            <!-- toggle -->
            <div class="relative">
                <!-- input -->
                <input id="toogleA" type="checkbox" class="sr-only" />
                <!-- line -->
                <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                <!-- dot -->
                <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
            </div>
            
            </label>
        
        </div>
    </div>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 mt-5 mr-7 ml-7">
        {{-- <product box> --}}
        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>
        {{-- </product box> --}}
        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>

        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>


        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>

        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>


        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>


        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>


        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>


        <div class="bg-white rounded py-3 px-3 transition duration-500 ease-in-out hover:shadow-xl">
            <div class="mx-auto w-44 relative">
                <a href="#"><img class="w-full" src="{{ asset('images/uploads/products/1/1.jpg') }}" alt=""></a>
                <div class="absolute left-1 top-2 text-2xs text-custom-red transform -rotate-45 font-bold">شگفت انگیز</div>
            </div>
            
            <div class="text-left ml-4 mt-2">
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
                <i class="fas fa-star text-yellow-300"></i>
            </div>

            <div class="text-custom-black text-xs mx-auto mt-3">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS</div>

            <div class="flex mt-2 relative">
                <a href="#"><div class="border rounded-full bg-green-200 px-3 py-2"><i class="far fa-cart-arrow-down text-base text-green-600"></i></div></a>
                <div class="w-full text-left text-sm ml-8">
                    <div class="text-xs text-gray-dark pl-2 line-through">175,000 تومان</div>
                    <div class="text-custom-black">100,000 تومان</div>
                </div>
                <div class="absolute bg-custom-red px-1 py-1.5 text-white rounded-full left-0 text-xs">20%</div>
            </div>
        </div>
        
    </div>
@endsection