<header class="w-full flex shadow-xl bg-white">
    <div class="w-2/12 bg-gray-background">
        <div class="w-3/4 mx-auto pt-2">
            <img src="{{ asset('images/logo.jpg') }}" alt="" class="w-full">
        </div>
        <div class="w-3/5 mx-auto pb-2 text-sm">فروشگاه اینترنتی</div>
    </div>
    <div class="w-8/12 relative">
        <div class="w-6/12 mx-auto mt-8 relative">
                <input type="text" placeholder="@lang("layout.header.search_placeholder")" class="bg-gray-100 p-3 pr-4 placeholder-gray-400 border border-gray-200 focus:ring-1 focus:ring-blue-300 focus:outline-none rounded-lg w-full text-xs text-gray-600"  name="search" id="">
                <i class="fal fa-search absolute left-3 top-3 text-xl text-gray-400 pr-2 border-r border-gray-300" ></i>
        </div>
        @yield('navigation-menu')
    </div>
    <div class="w-2/12 flex flex-wrap content-center">
        <div>
            <button class="bg-custom-red text-white w-48 rounded-lg mr-0 pl-6 text-xs flex flex-row-reverse justify-between items-center">
                @lang("layout.header.login_button")
                <span class="bg-custom-orange text-white w-12 block py-3 px-4 rounded-r-lg ml-2 text-xs "><i class="fas fa-user text-base"></i></span>
            </button>
        </div>
        <div class="mt-2">
            <button class="bg-custom-red text-white w-48  pl-3 rounded-lg mr-0 text-xs flex flex-row-reverse justify-between items-center">
                <span class="rounded-md bg-white text-custom-red font-yekan py-1 font-bold px-2">3</span>
                @lang("layout.header.basket_button") 
                <span class="bg-custom-orange text-white w-12 block py-3 px-4 rounded-r-lg ml-2 text-xs "><i class="far fa-cart-arrow-down text-base"></i></span>
            </button>
        </div>
    </div>
</header>