@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/slider/owl.carousel.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/slider/owl.theme.green.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content') 

{{-- Product ribbon --}}
<div class="flex flex-col items-start justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl  mx-auto  my-10 px-2 sm:px-10 py-5 rounded-md">
    <span class="font-yekan font-bold text-md text-gray-700 mb-3">تماس با فروشگاه</span>
    <span class="font-yekan text-xs text-gray-600">لطفا قبل از تماس با گیل مارکت صفحه <a href="#" class="text-blue-400">پرسش های متداول</a> را مشاهده کنید. پاسخ بسیاری از سوالات شما آنجاست.</span>
    <div class="flex flex-col items-start justify-between w-full mx-auto  my-10 px-8 sm:px-16 py-16 bg-white shadow-md rounded-md">
        <span class="font-yekan font-bold text-sm text-gray-600">برای پیگیری سفارش خود و یا طرح سوال، فرم زیر را تکمیل کنید.</span>
        <div class="flex flex-col lg:flex-row items-start justify-between w-full mx-auto  my-10  py-5">
            <div class="flex flex-col items-start justify-between w-full mx-auto  py-5 pl-6">
                <div class="flex flex-col md:flex-row justify-between w-full">
                    <div class="flex flex-col item mb-7 mx-1">
                        <label class="font-yekan font-bold text-xs text-gray-600">موضوع<span class="text-red-600">*</span></label>
                        <label class="wrap">
                            <select class="select-wrapper form-select  focus:border-blue-200 border border-gray-200 font-yekan text-xs rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  mt-2" id="selectState" name="state">
                                <option class="text-gray-400" value="" selected disabled>--انتخاب موضوع--</option>
                                <option value="volvo">پیگیری سفارش</option>
                                <option value="saab">انتقادات</option>
                                <option value="mercedes">خدمات پس از فروش</option>
                                <option value="audi">سایر</option>
                            </select>
                        </label>
                    </div>
                    <div class="flex flex-col item mb-7 mx-1">
                        <label class="font-yekan font-bold text-xs text-gray-600">نام ونام خانوادگی<span class="text-red-600">*</span></label>
                        <input name="" placeholder="نام و نام خانوادگی" class="focus:border-blue-200 appearance-none border border-gray-200 font-yekan text-xs rounded w-64 py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between w-full">
                    <div class="flex flex-col item mb-7 mx-1">
                        <label class="font-yekan font-bold text-xs text-gray-600">ایمیل<span class="text-red-600">*</span></label>
                        <input name="" placeholder="ایمیل خود را وارد نمایید" class="focus:border-blue-200 appearance-none border border-gray-200 font-yekan text-xs rounded w-64 py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  mt-2">
                    </div>
                    <div class="flex flex-col item mb-7 mx-1">
                        <label class="font-yekan font-bold text-xs text-gray-600">تلفن تماس<span class="text-red-600">*</span></label>
                        <input name="" placeholder="تلفن تماس خود را وارد نمایید" class="focus:border-blue-200 appearance-none border border-gray-200 font-yekan text-xs rounded w-64 py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2">
                    </div>
                </div>
                <div class="flex flex-col justify-between w-full">
                    <label class="font-yekan font-bold text-xs text-gray-600">متن پیام<span class="text-red-600">*</span></label>
                    <textarea name="" rows="7" class="bg-gray-50 focus:border-blue-200 appearance-none border border-gray-200 font-yekan text-xs rounded w-full py-2.5 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline mt-2"></textarea>
                </div>
                <div class="flex flex-col justify-between w-full items-end">
                    <button class="w-48 bg-green-400 py-2.5 px-16 rounded-md font-yekan font-bold text-xs text-white mt-3">ثبت و ارسال</button>
                </div>
                
            </div>
            <div class="flex flex-col items-start justify-between w-full mx-auto  py-5 lg:border-r lg:border-gray-200 px-5 mt-10 lg:mt-0">
                <span class="font-bold text-md mb-2">دفتر مرکزی</span>
                <span class="text-xs text-gray-600 mb-2">استان گیلان - شهر رشت - خیابان معلم - پلاک ۸۴ - ساختمان گیل مارکت</span>
                <span class="font-bold text-md mt-5 mb-2">مراکز امور مشتریان</span>
                <span class="text-xs text-gray-600 mb-2 mr-2"><span style="font-size: 0.35rem"><i class="fas fa-circle ml-1"></i></span>رشت - خیابان بیستون - جنب بانک ملی پلاک ۱۸ - ساختمان اهورا</span>
                <span class="text-xs text-gray-600 mb-2 mr-2"><span style="font-size: 0.35rem"><i class="fas fa-circle ml-1"></i></span>لاهیجان - خیابان بهمن - مجتمع باهنر - پلاک ۷</span>
                <span class="text-xs text-gray-600 mb-2 mr-2"><span style="font-size: 0.35rem"><i class="fas fa-circle ml-1"></i></span>صومعه سرا - روستای دهنده - جنب مرکز خرید ایرانیان - ساختمان مصطفی</span>
                <span class="font-bold text-md mt-5 mb-2">خدمات پس از فروش</span> 
                <span class="text-xs text-gray-600 mb-2 mr-2">لطفا در صورت درخواست جهت بازگرداندن کالا به واحد خدمات پس از فروش گیل مارکت از طریق پست، تنها به صندوق پستی ۱۵۹۵-۱۳۱۸۵ ارسال کنید.</span> 
                <div class="flex w-full sm:w-2/3 mx-auto mt-10 justify-between">
                    <span>شماره تماس:</span>
                    <span class="font-bold">۰۱۳-۴۴۳۳۴۵۴۵</span>
                </div>
                <div class="flex w-full sm:w-2/3 mx-auto mt-5 justify-between">
                    <span>آدرس ایمیل:</span>
                    <span class="font-bold">info@gilmarket.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End of product ribbon --}}


@endsection

@section('script')
@endsection