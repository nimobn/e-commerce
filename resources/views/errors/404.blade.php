<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>صفحه مورد نظر یافت نشد.</title>
</head>
<body dir="rtl" class="font-yekan h-screen items-center justify-center flex">
        <div class="flex flex-col justify-center items-center max-w-xl  py-5 px-8 mx-auto">
         
                <img src="{{ asset('images/404.png') }}" alt="">
       
            <span class="font-yekan font-bold text-lg text-gray-700 mt-10">اینجا چیزی نیست، نیمه پر سایت رو ببین!</span>
            <div class="flex flex-col mt-7 w-56">
                <a href="{{route('landing')}}" class="py-3 font-yekan font-bold text-xs text-center rounded-md bg-green-400 hover:bg-green-500 text-white mt-2">صفحه اصلی</a>
            </div>
        </div>
 
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>