@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content') 


<div class="flex flex-col items-start justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl  mx-auto  my-10 px-2 sm:px-10 py-5 rounded-md">
    <span class="font-yekan font-bold text-md text-gray-700 mb-7">پرسش های متداول</span>
    <span class="font-yekan font-bold text-md text-gray-600 w-full text-center mb-12">سوال شما در کدام دسته بندی قرار می گیرد؟</span>
    <div class="w-full flex flex-wrap justify-center items-center">
        <div class="item-box flex flex-col justify-center items-center mb-4" id="1">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20  border-gray-400 text-4xl  mx-1 bg-custom-red text-white cursor-pointer">
                <i class="far fa-cart-arrow-down"></i>
            </span>
            <span class="item-text text-custom-red text-sm mt-4">خرید</span>
        </div>
        
        <div class="item-box flex flex-col justify-center items-center mb-4" id="2">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20 border border-gray-400 text-4xl text-gray-400 mx-1 cursor-pointer">
                <i class="fas fa-user"></i>        
            </span>
            <span class="item-text text-gray-500 text-sm mt-4">معرفی</span>
        </div>

        <div class="item-box flex flex-col justify-center items-center mb-4" id="3">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20 border border-gray-400 text-4xl text-gray-400 mx-1 cursor-pointer">
                <i class="fal fa-truck"></i>
            </span>
            <span class="item-text text-gray-500 text-sm mt-4">تحویل</span>
        </div>

        <div class="item-box flex flex-col justify-center items-center mb-4" id="4">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20 border border-gray-400 text-4xl text-gray-400 mx-1 cursor-pointer">
                <i class="fal fa-sack-dollar"></i>
            </span>
            <span class="item-text text-gray-500 text-sm mt-4">پرداخت</span>
        </div>

        <div class="item-box flex flex-col justify-center items-center mb-4" id="5">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20 border border-gray-400 text-4xl text-gray-400 mx-1 cursor-pointer">
                <i class="far fa-undo-alt"></i>
            </span>
            <span class="item-text text-gray-500 text-sm mt-4">مرجوعی</span>
        </div>

        <div class="item-box flex flex-col justify-center items-center mb-4" id="6">
            <span class="item-circle flex justify-center items-center rounded-full w-20 h-20 border border-gray-400 text-4xl text-gray-400 mx-1 cursor-pointer">
                <i class="fal fa-question-square"></i>
            </span>
            <span class="item-text text-gray-500 text-sm mt-4">عمومی</span>
        </div>
    </div>
    <div class="flex flex-col items-start justify-between w-full mx-auto  my-10 px-8 sm:px-16 py-5 bg-white shadow-md rounded-md">
        <div class="flex flex-col lg:flex-row items-start justify-between w-full mx-auto">
            <div class="w-full my-4 question-section section1">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        در کدام شهر ها از گیل مارکت می توانیم خرید کنیم؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        گیل مارکت در بیش از ۲۰۰ شهر ایران فعالیت دارد.
                    </div>
                </div>
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        پیگیری سفارشات در گیل مارکت به چه صورت است؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        به سختی.
                    </div>
                </div>
                
            </div>
            <div class="w-full my-4 question-section section2 hidden">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        شما کلا کی هستین؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        ما گل های گلیم.
                    </div>
                </div>
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        از کجا اومدین؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        مسکو.
                    </div>
                </div>
                
            </div>
            <div class="w-full my-4 question-section section3 hidden">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        کی میرسه؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        فردا.
                    </div>
                </div>
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        با چی میاد؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        تیپاکس.
                    </div>
                </div>
                
            </div>
            <div class="w-full my-4 question-section section4 hidden">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        چند میشه؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        5 تومن
                    </div>
                </div>
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        چطور پرداخت کنیم؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        نقد.
                    </div>
                </div>
                
            </div>
            <div class="w-full my-4 question-section section5 hidden">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        پس میگیرین؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                       اره
                    </div>
                </div>
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        واقعا؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                        نه.
                    </div>
                </div>
                
            </div>
            <div class="w-full my-4 question-section section6 hidden">
                <div x-data={show:false} class="rounded-md mb-2 group">
                    <div :class="[show ? 'rounded-t' : 'rounded']" class=" bg-gray-100  flex justify-between w-full relative">
                        <button @click="show=!show" class="text-xs text-right text-gray-600 font-bold px-7 py-4 w-full h-full" type="button">
                        هوا چطوره هوا؟
                        <i :class="[show ? 'fa-minus' : 'fa-plus']" class="fas  absolute left-3 top-4"></i>
                        </button>
                    </div>
                    <div x-show="show" class="border border-gray-200 text-gray-600 text-xs px-10 py-6 leading-6">
                       خوبه
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
{{-- End of product ribbon --}}


@endsection

@section('script')
<script>
$('.item-box').on('click', function(){
    $('.item-circle').removeClass('bg-custom-red text-white');
    $('.item-circle').addClass('border text-gray-400');
    $('.item-text').addClass('text-gray-500');
    $('.item-text').removeClass('text-custom-red');

    $(this).children().eq(0).addClass('bg-custom-red');
    $(this).children().eq(0).removeClass('border');
    $(this).children().eq(0).addClass('text-white');
    $(this).children().eq(0).removeClass('text-gray-400');
    $(this).children().eq(1).addClass('text-custom-red');
    
    $('.question-section').addClass('hidden');
    $('.section'+$(this).attr('id')).removeClass('hidden');
});
</script>

@endsection