@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content') 

<div class="flex flex-col items-start  justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-xl  mx-auto pb-5 my-10 ">
    <div class="flex items-start justify-between w-full border-b border-gray-300 mb-4">
        <span class="font-yekan font-bold text-sm border-b-4 border-custom-red text-custom-red px-8 py-2">سبد خرید <span class="rounded-full px-2 py-0.5  bg-custom-red text-white">۲</span></span>
    </div>
    <div class="flex flex-col lg:flex-row items-center lg:items-start  justify-between w-full px-1.5"> 
        <div class="flex flex-col flex-grow items-center w-full justify-between  bg-white rounded-md mx-2 lg:ml-2 lg:mr-0 overflow-hidden shadow py-5 px-4 mb-5 lg:mb-0">
            <div class="flex flex-col items-center w-full justify-between border-b border-gray-200 pb-5 mb-5">
                <div class="flex items-center w-full justify-between">
                    <div class="w-20 sm:w-36 mx-5 flex items-center justify-center">
                        <img src="{{ asset('images/product/p2.jpg') }}" alt="">
                    </div>
                    <div class="flex-1 py-2">
                        <span class="flex font-yekan text-md text-gray-600 mb-3">گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 128 گیگابایت</span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-1.5">
                            <span class="flex w-3 justify-center rounded-full bg-blue-500 p-1.5 ml-2 mr-0.5"></span>
                            آبی
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-2">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-shield-check text-base text-gray-400"></i></span>
                            گارانتی اصالت و سلامت فیزیکی کالا
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-2">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-store-alt text-sm text-gray-400"></i></span>
                            گیل مارکت
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-6">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-clipboard-check text-base text-blue-400"></i></span>
                            موجود در انبار
                        </span>
                    </div>
                </div>
                <div class="flex w-full justify-between">
                    <div class="w-32 sm:w-36 mx-5 items-center justify-center hidden sm:flex"></div>
                    <div class="flex flex-1">
                        <div class="flex justify-between items-center w-24 border border-gray-200 rounded-lg text-xs text-gray-500 mb-2 py-1.5 px-2">
                            <span><i class="fas fa-plus text-blue-400 cursor-pointer"></i></span>
                            <span class="text-blue-400 text-base">1</span>
                            <span><i class="fas fa-minus text-gray-200"></i></span>
                        </div>
                        <div class="flex items-center justify-center mb-2 text-gray-500 mr-4 text-sm">
                            <i class="fas fa-trash-alt ml-1"></i>
                            <span>حذف</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="flex items-center text-custom-red text-xs mb-2">تخفیف ۴۵۰,۰۰۰ تومان</span>
                        <span class="flex items-center ">۲۴,۷۰۰,۰۰۰ تومان</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-full justify-between">
                <div class="flex items-center w-full justify-between">
                    <div class="w-20 sm:w-36 mx-5 flex items-center justify-center">
                        <img src="{{ asset('images/product/p3.jpg') }}" alt="">
                    </div>
                    <div class="flex-1 py-2">
                        <span class="flex font-yekan text-md text-gray-600 mb-3">گوشی موبایل سامسونگ مدل Galaxy A71 SM-A715F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت</span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-1.5">
                            <span class="flex w-3 justify-center rounded-full bg-blue-500 p-1.5 ml-2 mr-0.5"></span>
                            آبی
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-2">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-shield-check text-base text-gray-400"></i></span>
                            گارانتی اصالت و سلامت فیزیکی کالا
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-2">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-store-alt text-sm text-gray-400"></i></span>
                            گیل مارکت
                        </span>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-6">
                            <span class="flex w-4 justify-center ml-1.5"><i class="far fa-clipboard-check text-base text-blue-400"></i></span>
                            موجود در انبار
                        </span>
                    </div>
                </div>
                <div class="flex w-full justify-between">
                    <div class="w-32 sm:w-36 mx-5 items-center justify-center hidden sm:flex"></div>
                    <div class="flex flex-1">
                        <div class="flex justify-between items-center w-24 border border-gray-200 rounded-lg text-xs text-gray-500 mb-2 py-1.5 px-2">
                            <span><i class="fas fa-plus text-blue-400 cursor-pointer"></i></span>
                            <span class="text-blue-400 text-base">1</span>
                            <span><i class="fas fa-minus text-gray-200"></i></span>
                        </div>
                        <div class="flex items-center justify-center mb-2 text-gray-500 mr-4 text-sm">
                            <i class="fas fa-trash-alt ml-1"></i>
                            <span>حذف</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="flex items-center ">۴,۵۰۰,۰۰۰ تومان</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-shrink-0 items-center w-full lg:w-80 justify-between mx-2 lg:mr-2 lg:ml-0">
            <div class="flex flex-col items-center justify-between w-full bg-white rounded-md shadow px-5 py-7 text-sm text-gray-500">
                <div class="flex justify-between w-full mb-3">
                    <span>قیمت کالاها (۲)</span>
                    <span>۲۸،۷۵۰،۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between border-b border-gray-200  w-full pb-2 mb-2">
                    <span>تخفیف کالاها</span>
                    <span class="text-custom-red">(۸٪) ۴۵۰،۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between  w-full text-gray-800 font-bold mb-4">
                    <span>جمع سبد خرید</span>
                    <span>۲۷،۳۰۰،۰۰۰ تومان</span>
                </div>
                <span class="text-xs text-gray-400" style="font-size: 0.65rem">هزینه‌ی ارسال در ادامه بر اساس آدرس، زمان و نحوه‌ی ارسال انتخابی شما‌ محاسبه و به این مبلغ اضافه خواهد شد</span>
                <button class="w-full py-3 bg-custom-red text-white rounded-md mt-7">ادامه فرایند خرید</button>
            </div>
            <span class="text-gray-400 text-xs mt-3 text-justify leading-6 px-1">کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.</span>
            <div class="flex items-center justify-between  bg-white rounded-md shadow text-sm text-gray-500 w-full mt-3 overflow-hidden">
                <div class="flex flex-col justify-between items-start py-3 pr-5">
                    <span class="font-bold text-xs text-gray-800 py-1">ارسال رایگان سفارش</span>
                    <span class="text-xs text-gray-400 py-1">سفارش های بالای ۱۰۰ هزار تومان</span>
                </div>
                <div>
                    <img src="{{ asset('images/free.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection