@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content') 


<div class="flex flex-col items-start justify-between sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl  mx-auto  my-10 px-2 sm:px-10 py-5 rounded-md">
    <div class="relative flex flex-col items-start justify-between w-full h-auto mx-auto  my-10 shadow-md rounded-tr-3xl rounded-bl-3xl overflow-hidden" style="border-top-left-radius: 5rem; border-bottom-right-radius: 5rem;">
        <img src="{{ asset('images/about-us.jpg') }}" class="hidden xl:block" alt="">
        <div class="flex xl:absolute flex-col w-full h-full bg-white xl:bg-black opacity-80 px-7 p-7">
            <span class="font-yekan font-bold text-2xl text-gray-700 xl:text-white mb-5">درباره فروشگاه</span>
            <span class="font-yekan text-sm text-gray-600 xl:text-white mb-7 leading-8">در دنیای امروز برای تامین مایحتاج زندگی، هیچ گونه نیازی به حضور فیزیکی در مراکز خرید و فروشگاه ها نیست. خوشبختانه با ورود فروشگاه های اینترنتی یا آنلاین شاپ ها به عرصه ی خرید و فروش، بستر مناسبی فراهم شده تا شهروندان در جوامع مختلف بتوانند در کمترین زمان ممکن و با اطمینان خاطر، به هر آنچه نیاز دارند دسترسی پیدا کنند. بی شک جلب اعتماد مشتریان، ارائه ی خدمات با کیفیت و پشتیبانی پس از فروش، از جمله مهترین ویژگی های یک فروشگاه اینترنتی است.</span>
        </div>
    </div>
    <div class="flex flex-col items-start justify-between w-full h-auto mx-auto  my-10 text-sm text-gray-600 leading-8">
        <span>گیل مارکت در طول فعالیتش اثبات کرده است که تمام توانش را در راستای رسیدن به این اهداف به کار گرفته است و با اعطای امتیازات ویژه ای از جمله تضمین اصالت کالا، پرداخت درب منزل، ضمانت بازگشت کالا تا 7 روز و ارسال رایگان بالای 100 هزار تومان بر این ادعا صحه گذاشته است. زمینه ی فعالیت فروشگاه بسیار گسترده است و از تنوع شگفت انگیزی برخوردار است. محصولات متنوع در زمینه های گوناگون از جمله کالاهای دیجیتال، مد و پوشاک، لوازم خانه و...بخشی از مهم ترین دسته بندی های محصولات قابل ارائه در این مجموعه است.</span>
    </div>

    <div class="flex flex-col lg:flex-row items-start justify-between w-full h-auto mx-auto  my-10 overflow-hidden">
        <div class="px-2 mb-3">
            <img src="{{ asset('images/post.png') }}" class="rounded-tr rounded-bl shadow-md" style="border-top-left-radius: 3rem; border-bottom-right-radius: 3rem;" alt="">
        </div>
        <div class="px-2 mb-3 relative">
            <img src="{{ asset('images/buy.png') }}" class="rounded-tr rounded-bl shadow-md" style="border-top-left-radius: 3rem; border-bottom-right-radius: 3rem;" alt="">
        </div>
    </div>
    <div class="flex flex-col items-start justify-between w-full h-auto mx-auto  my-10 overflow-hidden">
        <div class="px-4 mb-2">
            <i class="fas fa-circle text-custom-red" style="font-size: 0.6rem"></i>
            <span class="text-gray-600">ما خریدهای کوچک و بزرگ شما را در سراسر کشور رایگان به دستتان می‌رسانیم.</span>
        </div>
        <div class="px-4 mb-2">
            <i class="fas fa-circle text-custom-red" style="font-size: 0.6rem"></i>
            <span class="text-gray-600">برای هر کالایی که می‌خرید، ده روز ضمانت بازگشت داریم و تا وقتی که مطمئن شویم تجربه خرید رضایت‌بخشی داشتید، پشتیبان شما هستیم.</span>
        </div>
        <div class="px-4 mb-2">
            <i class="fas fa-circle text-custom-red" style="font-size: 0.6rem"></i>
            <span class="text-gray-600">برای ما مهم است اگر به دنبال کالای اصل هستید، در فروشگاه آن را پیدا کنید. کالاهای اصل را برای شما نشان کرده‌ایم و اصالتشان را تضمین می‌کنیم.</span>
        </div>
        <div class="px-4 mb-2">
            <i class="fas fa-circle text-custom-red" style="font-size: 0.6rem"></i>
            <span class="text-gray-600">ما اولین‌بار شما را با لندو شناختیم و به همین خاطر، خرید اقساطی بدون نیاز به ضامن و چک را در فروشگاه هم برایتان ممکن کرده‌ایم.</span>
        </div>
    </div>
</div>



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