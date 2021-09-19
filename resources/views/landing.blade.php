@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset("css/slider/owl.carousel.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/slider/owl.theme.green.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('navigation-menu')
<div class="absolute bottom-0 pr-10">
    <ul class="flex">
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="group py-2 text-xs font-bold text-custom-black border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-bars"></i>
                @lang("layout.header.category-title")
                <i class="fas fa-caret-down"></i>
                
                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-40 top-12 right-0 z-50">
                    <li class="">
                      <a
                        class="rounded-tl bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                        href="#"
                        >کالای دیجیتال</a
                      >
                    </li>
                    <li class="">
                      <a
                        class="bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                        href="#">آشپزخانه</a
                      >
                    </li>
                    <li class="">
                      <a
                        class="rounded-b bg-white hover:bg-gray-100 hover:text-custom-red py-2 px-4 block whitespace-no-wrap"
                        href="#">کالای خواب</a
                      >
                    </li>
                  </ul>


            </div>
            
        </li>
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-custom-black border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-badge-percent"></i>
                @lang("layout.header.special-offer")
            </div>
        </li>
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-custom-black px-6 cursor-pointer">
                <i class="fas fa-info-circle"></i>
                @lang("layout.header.buy-guide")
            </div>
        </li>
    </ul>

</div>
@endsection
@section('content') 
{{-- Slider --}}
<div class="sm:flex sm:flex-col md:flex-row hidden justify-around sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl mx-auto py-10">
    <div class=" w-2/3 sm:w-full h-full bg-gray-400 rounded-xl overflow-hidden m-1 ">
        <div class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
                <img src="{{ asset("images/slider1.png") }}" class="" alt="">
                <img src="{{ asset("images/slider2.png") }}" class="" alt="">
        </div>
    </div>
    <div class="w-1/3 bg-gray-300 m-1 h-auto rounded-xl overflow-hidden">
        <img src="{{ asset("images/top-banner.png") }}" class="h-full" alt="">
    </div>
</div>
{{-- End of Slider --}}

@endsection

@section('script')
<script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
<script src="{{ asset("js/owl.carousel.min.js") }}"></script>

<script>
    $('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    center:true,
    nav:true,
    items:1,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:true,
            dots:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        }
    }
})
$('.owl-prev').html("<i class='far fa-angle-right'></i>");
$('.owl-next').html("<i class='far fa-angle-left'></i>");
</script>
@endsection