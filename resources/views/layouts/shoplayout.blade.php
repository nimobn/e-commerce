<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body dir="rtl" class="font-yekan">
    <main class="bg-gray-background w-full h-100">
        <header class="w-full flex shadow-xl bg-white">
            <div class="w-2/12 bg-gray-background pb-3">
                <div class="w-3/5 mx-auto mt-3">
                    <a href="" class="no-underline"><img src="{{ asset('images/logo.jpg') }}" alt="" class="w-1/2 mx-auto"></a>
                </div>
                <div class="w-2/5 mx-auto mt-2 text-xs">@lang("layout.header.shop_name")</div>
            </div>
            <div class="w-8/12">
                <div class="w-6/12 mx-auto mt-3">
                     <input type="text" placeholder="@lang("layout.header.search_placeholder")" class="bg-gray-background p-3 rounded-xl w-full text-white"  name="search" id=""> 
                </div>
            </div>
            <div class="w-2/12 flex flex-wrap content-center">
                <div class="w-full flex">
                    <span class="bg-custom-orange text-white py-3 px-4 rounded-r-lg text-xs">icon</span>
                    <button class="bg-custom-red text-white py-3 px-4 rounded-l-lg text-xs">
                        @lang("layout.header.login_button")
                    </button>
                </div>
                <div class="mt-2 w-full flex">
                    <span class="bg-custom-orange text-white py-3 px-4 rounded-r-lg text-xs">icon</span>
                    <button class="bg-custom-red text-white  py-3 px-4 rounded-l-lg mr-0 text-xs">
                        @lang("layout.header.basket_button") <span class="bg-white rounded-full text-black py-1 px-3">3</span>
                    </button>
                </div>
            </div>
        </header>
    </main>
</body>
</html>