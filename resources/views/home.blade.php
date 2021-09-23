@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/slider/owl.carousel.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/slider/owl.theme.green.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('navigation-menu')
<div class="absolute bottom-0 pr-10 z-10">
    <ul class="flex">
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="group py-2 text-xs font-bold text-custom-black border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-bars"></i>
                @lang("layout.header.category-title")
                <i class="fas fa-caret-down"></i>
                
                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-40 top-12 right-0 z-50">
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
@endsection
@section('content') 
{{-- Slider --}}
<div class="sm:flex sm:flex-col md:flex-row hidden justify-around md:justify-center sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl mx-auto py-10">
    <div class=" w-2/3 sm:w-full h-full bg-gray-400 rounded-xl overflow-hidden m-1 ">
        <div class="banner-slider owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
                <img src="{{ asset("images/slider1.png") }}" class="" alt="">
                <img src="{{ asset("images/slider2.png") }}" class="" alt="">
        </div>
    </div>
    <div class="w-1/3 bg-gray-300 m-1 hidden md:inline h-auto rounded-xl overflow-hidden">
        <img src="{{ asset("images/top-banner.png") }}" class="h-full" alt="">
    </div>
</div>
{{-- End of slider --}}

{{-- Product ribbon --}}
<div class="hidden sm:flex justify-around sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl mx-auto py-5 shadow-md bg-white rounded-md mb-10 ">
    <span class="flex justify-center items-center">
        <img src="images/svg/product-ribbon/badge.svg" width="70" height="70" alt="">
        <span class="font-yekan font-bold text-gray-600 mr-1">@lang("layout.ribbon.percent")</span>
    </span>
    <span class="flex justify-center items-center">
        <img src="images/svg/product-ribbon/clock.svg" width="70" height="70" alt=""> 
        <span class="font-yekan font-bold text-gray-600 mr-4">@lang("layout.ribbon.delivery")</span>
    </span>
    <span class="flex justify-center items-center">
        <img src="images/svg/product-ribbon/delivery.svg" width="70" height="70" alt=""> 
        <span class="font-yekan font-bold text-gray-600 mr-4">@lang("layout.ribbon.free")</span>
    </span>
    <span class="flex justify-center items-center">
        <img src="images/svg/product-ribbon/shield.svg" width="70" height="70" alt=""> 
        <span class="font-yekan font-bold text-gray-600 mr-4">@lang("layout.ribbon.warranty")</span>
    </span>
</div>
{{-- End of product ribbon --}}

{{-- Special offer slider --}}
<div class="flex flex-col justify-center items-center w-full pb-5 pt-16 shadow bg-custom-red  mb-10 relative sm:mt-20">
    <span class="absolute top-0 rounded-b-lg py-3 px-20 bg-white text-gray-600 font-bold font-yekan">پیشنهاد ویژه</span>
    <div class="flex flex-row justify-center special-offer-slider owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p1.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 hover:bg-green-200 cursor-pointer bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 hover:bg-yellow-200 cursor-pointer bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:bg-red-200 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p2.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:text-red-400 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:text-red-400 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p4.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:text-red-400 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p5.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:text-red-400 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="py-3 relative w-56 mx-auto">
                        <div class="flex flex-col w-56  bg-white rounded-lg shadow mx-auto">
                            <span class="absolute top-0 left-5 py-1 px-2 rounded-lg bg-white text-custom-red border border-gray-500">۲۰٪</span>
                            <img src="{{ asset("images/product/p2.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <span class="text-left ml-8 font-yekan text-xs text-gray-400 line-through">۴٫۳۰۰٫۰۰۰ تومان</span>
                            <span class="text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            <div class="flex mt-5 mb-2">
                                <span class="flex-1">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 bg-yellow-100 text-yellow-500"><i class="fas fa-star"></i></span>
                                </span>
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center rounded-full h-9 w-9 cursor-pointer hover:text-red-400 bg-red-100 text-red-500 mr-1 ml-3"><i class="fas fa-exchange-alt cursor-pointer"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav">
            <div class="owl-prev special-offer-custom-prev custom-prev disabled">prev</div>
            <div class="owl-next special-offer-custom-next custom-next">next</div>
        </div>
    </div>
</div>
{{-- End of special offer slider --}}


{{-- Most sale slider --}}
<div class="flex flex-col justify-between mx-5 md:mx-8 2xl:mx-24 py-5 shadow-md bg-white rounded-md my-20 ">
    <div class="flex justify-between">
        <div class="mr-5 pb-5 border-b border-custom-red">
            <span class="font-yekan font-bold text-sm">پرفروش ترین ها</span>
        </div>
        <div class="flex-1 text-left mr-5 ml-8 pb-5 border-b border-gray-300">
            <a href="#" class="text-gray-600 text-xs font-bold font-yekan py-1.5  border-dashed border-b border-gray-400">
                <i class="fal fa-plus"></i>
                نمایش بیشتر
            </a>
        </div>
    </div>
    <div class="flex flex-row justify-center most-sale-slider owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p1.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p2.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p4.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p5.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav">
            <div class="owl-prev most-sale-custom-prev custom-prev disabled">prev</div>
            <div class="owl-next most-sale-custom-next custom-next">next</div>
        </div>
    </div>
</div>
{{-- End of most sale slider --}}

{{-- Banner section --}}
<div class="flex flex-col lg:flex-row justify-center items-center  mx-5 md:mx-8 2xl:mx-24 py-5 rounded-md my-20 ">
    <div class="w-full lg:w-1/2 m-2">
        <img src="{{ asset("images/slider1.png") }}" class="rounded-lg" alt="">
    </div>
    <div class="w-full lg:w-1/2 m-2">
        <img src="{{ asset("images/slider2.png") }}" class="rounded-lg" alt="">
    </div>
</div>
{{-- End of banner section --}}

{{-- New product slider --}}
<div class="flex flex-col justify-between mx-5 md:mx-8 2xl:mx-24 py-5 shadow-md bg-white rounded-md my-20 ">
    <div class="flex justify-between">
        <div class="mr-5 pb-5 border-b border-custom-red">
            <span class="font-yekan font-bold text-sm">جدیدترین محصولات</span>
        </div>
        <div class="flex-1 text-left mr-5 ml-8 pb-5 border-b border-gray-300">
            <a href="#" class="text-gray-600 text-xs font-bold font-yekan py-1.5  border-dashed border-b border-gray-400">
                <i class="fal fa-plus"></i>
                نمایش بیشتر
            </a>
        </div>
    </div>
    <div class="flex flex-row justify-center new-product-slider owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p1.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p2.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p4.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p5.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product-box-shadow flex flex-col w-56  bg-white rounded-lg mx-auto mt-4 most-sale-box">
                        <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                        <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                        
                        <div class="flex mt-5 mb-2 items-center">
                            <span class="flex-1">
                                <span class="flex items-center justify-center rounded-full h-9 w-9 bg-green-100 text-green-500 mr-3"><i class="far fa-cart-arrow-down text-base"></i></span>
                            </span>
                            <span class="flex-shrink-0 text-left ml-4 font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav">
            <div class="owl-prev new-product-custom-prev custom-prev disabled">prev</div>
            <div class="owl-next new-product-custom-next custom-next">next</div>
        </div>
    </div>
</div>
{{-- End of New product slider --}}
@endsection

@section('script')
<script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
<script src="{{ asset("js/owl.carousel.min.js") }}"></script>

<script>
    $('.banner-slider').owlCarousel({
    rtl:true,
    loop:true,
    center:true,
    nav:true,
    items:1,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true,
            dots:true,
            center:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        600:{
            items:1,
            nav:true,
            loop:true,
            dots:true,
            center:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1000:{
            items:1,
            nav:true,
            loop:true,
            dots:true,
            center:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        }
    }
})
let specialOffer = $('.special-offer-slider');
specialOffer.owlCarousel({
    rtl:true,
    center:false,
    loop:false,
    navRewind:false,
    dots:false,
    items:1,
    responsiveClass:true,
    responsive:{
        600:{
            items:2,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        768:{
            items:3,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1050:{
            items:4,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1360:{
            items:5,
            dots:false,
            loop:false,
            navRewind:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
    }
});
specialOffer.on('changed.owl.carousel', function(property) {
    if( property.item.index == 0 ){
        $(property.target).find(".special-offer-custom-prev").addClass('disabled');
        $(property.target).find(".special-offer-custom-next").removeClass('disabled');

    }else{
        var currnetel = property.item.index + property.page.size;
    // last element
        if( currnetel ==  property.item.count ){
        $(property.target).find(".special-offer-custom-next").addClass('disabled');
            $(property.target).find(".special-offer-custom-prev").removeClass('disabled');
        }else{
            $(property.target).find(".special-offer-custom-next").removeClass('disabled');
            $(property.target).find(".special-offer-custom-prev").removeClass('disabled');
        }
        }
})


$('.special-offer-custom-prev').click(function() {
    specialOffer.trigger('prev.owl.carousel');
})
$('.special-offer-custom-next').click(function() {
    specialOffer.trigger('next.owl.carousel');
})


let mostSale = $('.most-sale-slider');
mostSale.owlCarousel({
    rtl:true,
    center:false,
    dots:false,
    items:1,
    responsiveClass:true,
    responsive:{
        600:{
            items:2,
           
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        768:{
            items:3,
            
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1050:{
            items:4,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1360:{
            items:5,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
    }
});
mostSale.on('changed.owl.carousel', function(property) {
    if( property.item.index == 0 ){
        $(property.target).find(".most-sale-custom-prev").addClass('disabled');
        $(property.target).find(".most-sale-custom-next").removeClass('disabled');

    }else{
        var currnetel = property.item.index + property.page.size;
    // last element
        if( currnetel ==  property.item.count ){
        $(property.target).find(".most-sale-custom-next").addClass('disabled');
            $(property.target).find(".most-sale-custom-prev").removeClass('disabled');
        }else{
            $(property.target).find(".most-sale-custom-next").removeClass('disabled');
            $(property.target).find(".most-sale-custom-prev").removeClass('disabled');
        }
        }
})


$('.most-sale-custom-prev').click(function() {
    mostSale.trigger('prev.owl.carousel');
});
$('.most-sale-custom-next').click(function() {
    mostSale.trigger('next.owl.carousel');
});


let newProduct = $('.new-product-slider');
newProduct.owlCarousel({
    rtl:true,
    center:false,
    dots:false,
    items:1,
    responsiveClass:true,
    responsive:{
        600:{
            items:2,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        768:{
            items:3,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1050:{
            items:4,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
        1360:{
            items:5,
            dots:false,
            autoplay:false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        },
    }
});
newProduct.on('changed.owl.carousel', function(property) {
    if( property.item.index == 0 ){
        $(property.target).find(".new-product-custom-prev").addClass('disabled');
        $(property.target).find(".new-product-custom-next").removeClass('disabled');

    }else{
        var currnetel = property.item.index + property.page.size;
    // last element
        if( currnetel ==  property.item.count ){
        $(property.target).find(".new-product-custom-next").addClass('disabled');
            $(property.target).find(".new-product-custom-prev").removeClass('disabled');
        }else{
            $(property.target).find(".new-product-custom-next").removeClass('disabled');
            $(property.target).find(".new-product-custom-prev").removeClass('disabled');
        }
        }
})


$('.new-product-custom-prev').click(function() {
    newProduct.trigger('prev.owl.carousel');
});
$('.new-product-custom-next').click(function() {
    newProduct.trigger('next.owl.carousel');
});

$('.owl-prev').html("<i class='far fa-angle-right'></i>");
$('.owl-next').html("<i class='far fa-angle-left'></i>");
</script>
@endsection