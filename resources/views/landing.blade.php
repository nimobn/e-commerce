@extends('layouts.app')
@section('navigation-menu')
<div class="absolute bottom-0 pr-10">
    <ul class="flex">
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-gray-600 border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-bars"></i>
                @lang("layout.header.category-title")
                <i class="fas fa-caret-down"></i>
            </div>
        </li>
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-gray-600 border-l border-gray-200 px-6 cursor-pointer">
                <i class="fas fa-badge-percent"></i>
                @lang("layout.header.special-offer")
            </div>
        </li>
        <li class="li-navbar  flex group flex-col-reverse items-center justify-between cursor-pointer">
            <div class="py-2 text-xs font-bold text-gray-600 border-l border-gray-200 px-6 cursor-pointer">
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
