<header class="w-full flex shadow-xl bg-white">
    <div class="w-2/12 bg-gray-background">
        <div class="w-3/6 mx-auto mt-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="" class="w-1/2 mx-auto">
        </div>
        <div class="w-3/6 mx-auto pt-2 text-sm">فروشگاه اینترنتی</div>
    </div>
    <div class="w-8/12 relative">
        <div class="w-6/12 mx-auto mt-2 relative">
                <input type="text" placeholder="@lang("layout.header.search_placeholder")" class="bg-gray-100 p-3 pr-4 placeholder-gray-400 border border-gray-200 focus:ring-1 focus:ring-blue-300 focus:outline-none rounded-lg w-full text-xs text-gray-600"  name="search" id="">
                <i class="fal fa-search absolute left-3 top-3 text-xl text-gray-400 pr-2 border-r border-gray-300" ></i>
        </div>
        {{-- @yield('navigation-menu') --}}

        <div class="absolute bottom-0 pr-10">
            <ul class="flex">
                <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
                    <div class="group py-2 text-xs font-bold text-custom-black border-l border-gray-200 px-6 cursor-pointer">
                        <i class="fas fa-bars"></i>
                        @lang("layout.header.category-title")
                        <i class="fas fa-caret-down"></i>
                        
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-40 right-11 z-50">
                            <li class="">
                              <a
                                class="rounded-tl bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                                href="#"
                                >کالای دیجیتال</a
                              >
                            </li>
                            <li class="">
                              <a
                                class="bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                                href="#">آشپزخانه</a
                              >
                            </li>
                            <li class="">
                              <a
                                class="rounded-b bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                                href="#">کالای خواب</a
                              >
                            </li>
                          </ul>
        
        
                    </div>
                    
                </li>
                <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
                    <div class="py-2 text-xs font-bold text-custom-black border-l border-gray-200 px-6 cursor-pointer">
                        <i class="fas fa-badge-percent"></i>
                        @lang("layout.header.special-offer")
                    </div>
                </li>
                <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
                    <div class="py-2 text-xs font-bold text-custom-black px-6 cursor-pointer">
                        <i class="fas fa-info-circle"></i>
                        @lang("layout.header.buy-guide")
                    </div>
                </li>
            </ul>
        
        </div>

    </div>
    <div class="w-2/12 flex flex-wrap content-center my-3">
        <div class="w-full">
            <button class="bg-custom-red text-white lg:w-5/6 w-12 rounded-lg mr-0 lg:pl-6 text-xs flex flex-row-reverse justify-between items-center">
                <span class="hidden lg:block">@lang("layout.header.login_button")</span>
                <span class="bg-custom-orange text-white w-12 py-2 px-3 lg:rounded-r-lg lg:rounded-l-none rounded-lg lg:ml-2 text-xs "><i class="fas fa-user text-base"></i></span>
            </button>
        </div>
        <div class="w-full mt-2">
            <button class="bg-custom-red text-white lg:w-5/6 w-12  lg:pl-3 rounded-lg mr-0 text-xs flex flex-row-reverse justify-between items-center">
                <span class="hidden lg:block rounded-md bg-white text-custom-red font-yekan py-1 px-1.5 text-xs">3</span>
                <span class="hidden lg:block">@lang("layout.header.basket_button")</span>
                <span class="bg-custom-orange text-white w-12 py-2 px-3 lg:rounded-r-lg lg:rounded-l-none rounded-lg lg:ml-2 text-xs "><i class="far fa-cart-arrow-down text-base"></i></span>
            </button>
        </div>
    </div>
</header>