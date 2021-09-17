<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("fonts/fontawesome/css/all.css") }}">
</head>
<body dir="rtl" class="font-yekan">
    <main class="bg-gray-background w-full h-100">
        <header class="w-full flex shadow-xl bg-white">
            <div class="w-2/12 bg-gray-background">
                <div class="w-3/4 mx-auto pt-2">
                    <img src="{{ asset('images/logo.jpg') }}" alt="" class="w-full">
                </div>
                <div class="w-3/5 mx-auto pb-2 text-sm">فروشگاه اینترنتی</div>
            </div>
            <div class="w-8/12">
                <div class="w-6/12 mx-auto mt-8">
                     <input type="text" placeholder="@lang("layout.header.search_placeholder")" class="bg-gray-background p-3 rounded-xl w-full text-white"  name="search" id=""> 
                </div>
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
                        <span class="rounded-full bg-white text-custom-red font-yekan py-1 text-center font-bold px-2">3</span>
                        @lang("layout.header.basket_button") 
                        <span class="bg-custom-orange text-white w-12 block py-3 px-4 rounded-r-lg ml-2 text-xs "><i class="far fa-cart-arrow-down text-base"></i></span>
                    </button>
                </div>
            </div>
        </header>
    </main>
</body>
</html>