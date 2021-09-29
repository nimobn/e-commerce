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
                <span class="flex justify-center items-center  flex-1 bg-blue-400" style="height: 4px"></span>
                <span class="flex justify-center items-center rounded-full p-2.5 bg-blue-400 relative" id="payment-title"></span>
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
            <div class="w-full bg-white rounded-md shadow px-6 py-5 mb-5">
                <span class="font-bold text-base text-right w-full">شیوه پرداخت</span>
                <div>
                    <div class="flex justify-start items-center  py-5 cursor-pointer  border-b border-gray-200">
                        <i class="fas fa-dot-circle ml-3 text-lg text-blue-400"></i>
                        <i class="fad fa-credit-card text-3xl text-blue-400"></i>
                        <div class="flex flex-col justify-between items-start mr-7">
                            <span class="text-gray-700 text-base">پرداخت اینترنتی</span>
                            <span class="text-gray-400 text-sm">آنلاین با تمامی کارت‌های بانکی</span>
                        </div>
                    </div>
                    <div class="flex justify-start items-center py-5 cursor-pointer">
                        <i class="fas fa-dot-circle ml-3 text-lg text-gray-300"></i>
                        <i class="fad fa-wallet text-3xl text-gray-300"></i>
                        <div class="flex flex-col justify-between items-start mr-7">
                            <span class="text-gray-700 text-base">پرداخت با کیف پول</span>
                            <span class="text-gray-400 text-sm">آنلاین با استفاده از موجودی کیف پول</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white rounded-md shadow px-4 py-5">
                <span class="font-bold text-base text-right w-full">کد تخفیف</span>
                <div class="relative w-72 my-6">
                    <input name="" class="focus:border-blue-200 appearance-none border border-gray-200 font-yekan text-xs rounded w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">  
                    <span class="absolute left-3 top-2 text-sm text-gray-600 h-8 hover:text-blue-400 cursor-pointer">ثبت</span>
                </div>
            </div>
            <span class="cursor-pointer flex items-center text-blue-600 justify-start w-full px-3 mt-2 text-sm"><i class="fas fa-angle-right ml-1.5"></i>بازگشت به صفحه ارسال</span>

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
                <button class="w-full py-3 bg-custom-red text-white rounded-md mt-7">پرداخت و ثبت نهایی سفارش</button>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection