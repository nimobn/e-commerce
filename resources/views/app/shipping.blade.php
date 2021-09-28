@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content') 
<div class="hidden lg:flex flex-col items-start  justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-xl  mx-auto mt-20">
    <div class="flex flex-col lg:flex-row items-center lg:items-start  justify-between w-full px-1.5"> 
        <div class="flex flex-col flex-grow items-center w-full justify-between mx-2 lg:ml-2 lg:mr-0 lg:mb-0">
            <div class="flex w-full justify-between items-center mx-auto text-gray-500">
                <span class="flex justify-center items-center rounded-full p-2.5 bg-blue-400 relative post-title"></span>
                <span class="flex justify-center items-center  flex-1 bg-gray-300" style="height: 4px"></span>
                <span class="flex justify-center items-center rounded-full p-2.5 bg-gray-300 relative" id="payment-title"></span>
                <span class="flex justify-center items-center flex-1 bg-gray-300" style="height: 4px"></span>
                <span class="flex justify-center items-center rounded-full p-2.5 bg-gray-300 relative" id="finish-title"></span>
            </div>
        </div>
        <div class="flex flex-col flex-shrink-0 items-center w-full lg:w-80 justify-between mx-2 lg:mr-2 lg:ml-0">
        </div>
    </div>
</div>
<div class="flex flex-col items-start  justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-xl  mx-auto pb-5 mb-10 mt-7">
    <div class="flex flex-col lg:flex-row items-center lg:items-start  justify-between w-full px-1.5"> 
        <div class="flex flex-col flex-grow items-center sm:items-start w-full justify-between   mx-2 lg:ml-2 lg:mr-0 mb-5 lg:mb-0">
            <div class="w-full bg-white rounded-md shadow px-4 py-5 mb-5">
                <span class="font-bold text-sm text-right w-full">آدرس تحویل سفارش را انتخاب نمایید:</span>
                <div class="flex items-start justify-between w-full border-b border-gray-300 mb-4">
                    <span class="font-yekan font-bold text-xs border-b-4 border-custom-red text-custom-red px-2 py-2 mt-5">آدرس های شما</span>
                </div>
                <div class="flex flex-wrap items-start">
                    <div class="flex flex-col w-72 flex-shrink-0 border-2 h-64 border-blue-300 rounded-md px-3 pb-5 sm:ml-3 mb-3 cursor-pointer">
                        <div class="flex items-center w-full  py-3 mb-3 border-b border-gray-200 text-xs text-gray-600">
                            <i class="fas fa-dot-circle ml-3 text-lg text-blue-400"></i>
                            <span>به این آدرس ارسال می شود</span>
                        </div>
                        <span class="text-xs text-gray-700 font-bold leading-6">گیلان، صومعه سرا، بلوار برادران سرشاد، عربان، خ. فرشید صالح عربانی، ک. دانا ساختمان نیما، پلاک ۱، واحد ۱</span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-envelope text-base ml-2 pb-1"></i>
                            <span>۴۳۶۱۷۸۴۸۴۱</span>
                        </span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-phone text-base ml-2 pb-1"></i>
                            <span>۰۹۳۸۲۹۹۵۶۷۸</span>
                        </span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-user text-base ml-2 pb-1"></i>
                            <span>مجاهد خزیراوی</span>
                        </span>
                        <span class="flex items-center justify-end text-blue-400 font-bold text-xs mt-2">
                            <span class="cursor-pointer px-1.5">ویرایش</span>
                            <span class="cursor-pointer border-r border-gray-200 px-1.5">حذف</span>
                        </span>
                    </div>
                    <div class="flex flex-col w-72 flex-shrink-0 border-2 h-64 border-gray-300 rounded-md px-3 pb-5 sm:ml-3 mb-3 cursor-pointer">
                        <div class="flex items-center w-full  py-3 mb-3 border-b border-gray-200 text-xs text-gray-600">
                            <i class="fas fa-dot-circle ml-3 text-lg text-gray-300"></i>
                            <span>ارسال به این آدرس</span>
                        </div>
                        <span class="text-xs text-gray-700 font-bold leading-6">گیلان، صومعه سرا، بلوار برادران سرشاد، عربان، خ. فرشید صالح عربانی، ک. دانا ساختمان نیما، پلاک ۱، واحد ۱</span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-envelope text-base ml-2 pb-1"></i>
                            <span>۴۳۶۱۷۸۴۸۴۱</span>
                        </span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-phone text-base ml-2 pb-1"></i>
                            <span>۰۹۳۸۲۹۹۵۶۷۸</span>
                        </span>
                        <span class="flex items-center text-gray-400 text-xs mt-2">
                            <i class="far fa-user text-base ml-2 pb-1"></i>
                            <span>مجاهد خزیراوی</span>
                        </span>
                        <span class="flex items-center justify-end text-blue-400 font-bold text-xs mt-2">
                            <span class="cursor-pointer px-1.5">ویرایش</span>
                            <span class="cursor-pointer border-r border-gray-200 px-1.5">حذف</span>
                        </span>
                    </div>
                    <div class="text-gray-500 flex flex-col justify-center items-center h-64 w-72 flex-shrink-0 border-2 border-dashed h- border-gray-300 rounded-md px-3  sm:ml-3 mb-3 cursor-pointer">
                        <i class="fas fa-plus"></i>
                        <span>افزودن آدرس جدید</span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white rounded-md shadow px-4 py-5">
                <span class="font-bold text-sm">مرسوله (۲) <i class="fas fa-truck text-custom-red mr-2 pr-3 border-r border-gray-300"></i> <span class="text-gray-400 text-xs">ارسال عادی</span></span>
                <div class="flex justify-start items-center mt-8">
                    <div>
                        <div class="w-28">
                            <img src="{{ asset('images/product/p2.jpg') }}" alt="">
                        </div>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-1.5">
                            <span class="flex w-3 justify-center rounded-full bg-blue-500 p-1.5 ml-2 mr-0.5"></span>
                            آبی
                        </span>
                    </div>
                    <div>
                        <div class="w-28">
                            <img src="{{ asset('images/product/p3.jpg') }}" alt="">
                        </div>
                        <span class="flex justify-start items-center text-xs text-gray-500 mb-1.5">
                            <span class="flex w-3 justify-center rounded-full bg-black p-1.5 ml-2 mr-0.5"></span>
                            مشکی
                        </span>
                    </div>
                </div>
            </div>
            <span class="cursor-pointer flex items-center text-blue-600 justify-start w-full px-3 mt-2 text-sm"><i class="fas fa-angle-right ml-1.5"></i>بازگشت به سبد خرید</span>

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
                    <span>جمع</span>
                    <span>۲۷،۳۰۰،۰۰۰ تومان</span>
                </div>
                <div class="flex justify-between border-b border-gray-200  w-full pb-2 mb-2">
                    <span>هزینه ارسال</span>
                    <span>۰</span>
                </div>
                <div class="flex justify-between  w-full text-gray-800 font-bold mb-4">
                    <span>مبلغ قابل پرداخت</span>
                    <span>۲۷،۳۰۰،۰۰۰ تومان</span>
                </div>
                <button class="w-full py-3 bg-custom-red text-white rounded-md mt-7">ادامه فرایند خرید</button>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection