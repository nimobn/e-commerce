<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>ورود/ثبت نام</title>
</head>
<body dir="rtl" class="font-yekan h-screen items-center justify-center flex">
        <div class="flex flex-col justify-center items-center max-w-sm  py-5 border border-gray-200 bg-white rounded-lg px-8 mx-auto">
            <div class="w-14">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <span class="font-yekan text-xs text-gray-600">فروشگاه اینترنتی</span>
            <div class="flex flex-col mt-14 w-80">
                <span class="font-yekan font-bold text-md text-gray-800 mb-4">ورود / ثبت نام</span>
                <span class="font-yekan text-xs text-gray-500 mb-2">لطفا شماره موبایل یا پست الکترونیکی خود را وارد کنید</span>
                <input name="username" class="focus:border-blue-400 appearance-none border border-blue-300 font-yekan text-md rounded-md w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button class="py-3 font-yekan font-bold text-xs rounded-md bg-red-600 hover:bg-red-700 text-white mt-2">ورود به فروشگاه</button>
                <span class="text-gray-600 mt-5 text-center leading-6 px-3 mb-5" style="font-size: 0.65rem;">با ورود و یا ثبت نام در فروشگاه شما شرایط و قوانین استفاده از سرویس های سایت و قوانین حریم خصوصی آن را می پذیرید.</span>
        
            </div>
        </div>
 
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>