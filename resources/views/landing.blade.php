@extends('layouts.app')
@section('navigation-menu')
<div class="absolute bottom-0 pr-10">
    <ul class="flex">
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="group py-2 text-xs font-bold text-gray-600 border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-bars"></i>
                @lang("layout.header.category-title")
                <i class="fas fa-caret-down"></i>
                
                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-40 top-12 right-0">
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
            <div class="py-2 text-xs font-bold text-gray-600 border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-badge-percent"></i>
                @lang("layout.header.special-offer")
            </div>
        </li>
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-gray-600 px-6 cursor-pointer">
                <i class="fas fa-info-circle"></i>
                @lang("layout.header.buy-guide")
            </div>
        </li>
    </ul>

</div>
@endsection
@section('content') 


@endsection

@section('script')

@endsection