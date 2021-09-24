@extends("layouts.app")
@section('head')
<link rel="stylesheet" href="{{ asset("css/slider/owl.carousel.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/slider/owl.theme.green.min.css") }}">
<link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section("content")
    {{-- <breadcrumb> --}}
    <div class="mt-6 md:block hidden mr-10">
        <nav class="bg-grey-light p-3 rounded font-sans w-full text-sm">
            <ol class="list-reset flex text-grey-dark">
              <li><a href="#" class="text-custom-blue font-bold">خانه</a></li>
              <li><span class="mx-2">/</span></li>
              <li><a href="#" class="text-custom-blue font-bold">کالای دیجیتال</a></li>
              <li><span class="mx-2">/</span></li>
              <li><a href="#" class="text-custom-blue font-bold">گوشی موبایل و لوازم جانبی</a></li>
              <li><span class="mx-2">/</span></li>
              <li><a href="#" class="text-custom-blue font-bold">گوشی موبایل</a></li>
              <li><span class="mx-2">/</span></li>
              <li class="text-gray-dark">گوشی موبايل سامسونگ مدل Samsung Galaxy A12 </li>
            </ol>
          </nav>
    </div>
    {{-- </breadcrumb> --}}
    {{-- <product> --}}
    <div class="flex flex-col shadow sm:flex-row sm:w-11/12 mt-2 rounded-lg mx-auto bg-white pb-10">
        <div class="sm:w-1/3 p-3">
            <div class="flex flex-col sm:border-l">
                <div class="flex items-center">
                    <div class="flex flex-col text-gray-dark mt-4 mr-2">
                        <span class="border pt-2 pb-1 px-2 rounded mb-2"><a href="#"><i class="fal fa-heart"></i></a></span>
                        <span class="border pt-2 pb-1 px-2 rounded mb-2"><a href="#"><i class="fal fa-exchange"></i></a></span>
                        <span class="border pt-2 pb-1 px-2 rounded mb-2"><a href="#"><i class="fal fa-bell"></i></a></span>
                        <span class="border pt-2 pb-1 px-2 rounded"><a href="#"><i class="far fa-chart-line"></i></a></span>
                    </div>
                    <div class="w-52 h-52 mx-auto mt-9">
                        {{-- <a href="/"> --}}
                            {{-- <img class="zoom" src="{{asset("images/uploads/products/1/1.jpg")}}" alt=""> --}}
                            <img src="{{asset("images/uploads/products/1/1.jpg")}}" class="zoom" data-magnify-src="{{asset("images/uploads/products/1/1.jpg")}}">
                        {{-- </a> --}}
                    </div>
                </div>
                <div class="flex justify-center mt-10 mb-6">
                    <span class="w-20 border rounded p-2"><img src="{{ asset('images/uploads/products/1/3.jpg') }}" alt=""></span>
                    <span class="w-20 border rounded p-2 mr-2"><img src="{{ asset('images/uploads/products/1/2.jpg') }}" alt=""></span>
                    <span class="w-20 border rounded p-2 mr-2"><img src="{{ asset('images/uploads/products/1/4.jpg') }}" alt=""></span>
                </div>
            </div>
        </div>
        <div class="pr-2 sm:pr-0 sm:w-2/3 flex flex-col">
            <div class="text-custom-black text-base mt-8">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت</div>
            <div class="text-gray-dark text-xs mt-2 sm:w-7/12 border-b pb-1">Samsung Galaxy A32 SM-A325F/DS Dual Sim 128GB And 6GB RAM Mobile Phone</div>
            <div class="flex flex-col sm:flex-row mt-3">
                <div class="sm:w-7/12 flex flex-col">
                    <div class="text-xs flex">
                        <div class="text-custom-black">شناسه محصول: <span class="text-custom-red">km360</span> </div>
                        <div class="mr-3"><i class="fas fa-star text-yellow-300"></i> <span>4.3</span> <span class="text-gray-dark">(191)</span></div>
                        <div class="mr-3"><span class="text-gray-dark">27 دیدگاه کاربران</span></div>
                        <div class="mr-3"><span class="text-gray-dark">دسته بندی:</span>
                            <a href="#"><span class="text-custom-red">گوشی‌موبایل</span></a>
                        </div>
                    </div>
                    <div class="text-gray-dark text-base mt-10"><span>رنگ:</span> <span>بنفش</span></div>
                    <div class="mt-2 flex pb-4">
                        <div class="border rounded-full p-1">
                            <a href="#"><div class="border rounded-full bg-custom-red h-10 w-10 space-x-3"></div></a>
                        </div>
                        <div class="border rounded-full p-1 mr-2">
                            <a href="#"><div class="border rounded-full bg-yellow-300 h-10 w-10 space-x-3"></div></a>
                        </div>
                        <div class="border rounded-full p-1 mr-2">
                            <a href="#"><div class="border rounded-full bg-custom-green h-10 w-10 space-x-3"></div></a>
                        </div>
                        <div class="border rounded-full p-1 mr-2">
                            <a href="#"><div class="border rounded-full bg-custom-blue h-10 w-10 space-x-3"></div></a>
                        </div>
                    </div>
                    <hr class="w-2/3">
                    <div class="mt-4 text-custom-black">ویژگی های کالا</div>
                    <div class="mt-1">
                        <ul class="list-disc mr-5 leading-8 mb-3">
                            <li class="text-custom-red text-xl"><span class="text-custom-black text-sm">حافظه داخلی: 128 گیگابایت</span></li>
                            <li class="text-custom-red text-xl"><span class="text-custom-black text-sm">مقدار رم: 4 گیگابایت</span></li>
                            <li class="text-custom-red text-xl"><span class="text-custom-black text-sm">اندازه: 6.5 اینچ</span></li>
                            <li class="text-custom-red text-xl"><span class="text-custom-black text-sm">شبکه های ارتباطی:4G، 3G، 2G</span></li>
                        </ul>
                        <a href="#" class="text-custom-red mr-1 broder-b border-dashed border-custom-red">مشاهده بیشتر <i class="text-xs far fa-plus"></i></a>
                    </div>
                </div>
            
                <div class="mx-auto mt-4 sm:mt-0 sm:mr-5 w-11/12 sm:w-4/12 text-xs md:text-sm bg-gray-background px-2 py-4 rounded">
                    <div class="text-custom-black border-b text-center pb-4"><i class="text-custom-green text-base fal fa-shield-check"></i> 18 ماه گارانتی اصل- رجیسترشده</div>
                    <div class="text-custom-black mt-8 border-b pb-2"><i class="far fa-store text-custom-red"></i>  فروشنده: گیل مارکت</div>
                    <div class="text-custom-black mt-3 border-b pb-2"><i class="far fa-truck text-custom-red"></i>  آماده ارسال توسط گیل مارکت</div>
                    <div class="text-custom-black mt-3 border-b pb-2"><i class="far fa-ballot-check text-custom-red text-base"></i>  موجود در انبار گیل مارکت</div>
                    <div class="text-left mt-5 font-bold">625،000،000 تومان</div>
                    <div class="text-center mt-9"><button type="submit" class="bg-custom-green rounded hover:bg-green-500 py-3 px-3 w-5/6 text-white font-bold text-base"><i class="far fa-cart-arrow-down text-xl"></i> افزودن به سبد خرید</button></div>
                </div>
            </div>
        </div>
    </div>
    {{-- </product> --}}
    {{-- <banner> --}}
    <div class="md:flex md:grid-cols-none md:gap-0 grid grid-cols-3 gap-8 shadow rounded-lg bg-white sm:w-11/12 mx-auto md:text-sm text-xs text-custom-black text-center py-16 mt-6">
        <div class="flex-none sm:flex-1">
            <div><i class="text-xl text-purple-500 far fa-undo-alt"></i></div>
            <div>7 روز ضمانت بازگشت</div>
        </div>
        <div class="flex-none sm:flex-1">
            <div><i class="text-xl text-purple-500 far font-bold fa-truck"></i></div>
            <div>سفارش بالای 300 هزار تومان رایگان</div>
        </div>
        <div class="flex-none sm:flex-1">
            <div><i class="text-xl text-purple-500 font-bold fal fa-hand-holding-usd"></i></div>
            <div>امکان پرداخت در محل</div>
        </div>
        <div class="flex-none sm:flex-1">
            <div><i class="text-xl text-purple-500 font-bold fal fa-history"></i></div>
            <div>ارسال در سریعترین زمان</div>
        </div>
        <div class="flex-none sm:flex-1">
            <div><i class="text-xl text-purple-500 font-bold fal fa-shield-check"></i></div>
            <div>ضمانت اصالت کالا</div>
        </div>
    </div>
    {{-- </banner> --}}

    {{-- Similar product slider --}}
    <div class="flex flex-col justify-between mx-5 md:mx-8 2xl:mx-24 py-5 shadow-md bg-white rounded-md my-20 ">
        <div class="flex justify-between">
            <div class="mr-5 pb-5 border-b border-custom-red">
                <span class="font-yekan font-bold text-sm">محصولات مرتبط</span>
            </div>
            <div class="flex-1 text-left mr-5 ml-8 pb-5 border-b border-gray-300">
                <a href="#" class="text-gray-600 text-xs font-bold font-yekan py-1.5  border-dashed border-b border-gray-400">
                    <i class="fal fa-plus"></i>
                    نمایش بیشتر
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-center similar-product-slider owl-carousel owl-theme owl-rtl owl-loaded owl-drag relative"> 
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p1.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p2.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p4.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p5.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item border-l border-gray-100 mt-4">
                        <div class="cursor-pointer flex flex-col w-56  bg-white rounded-lg mx-auto mt-4">
                            <img src="{{ asset("images/product/p3.jpg") }}" class="px-12 py-3">
                            <span class="font-yekan text-xs text-gray-600 text-justify px-4 mb-16 leading-6">گوشی موبايل سامسونگ مدل Samsung Galaxy A22 دو سیم کارت</span>
                            <div class="flex mt-5 mb-2 items-center">
                                <span class="flex-shrink-0 text-center mx-auto font-yekan text-md text-gray-800 text-bold">۳٫۷۸۰٫۰۰۰ تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <div class="owl-prev similar-product-custom-prev custom-prev disabled">prev</div>
                <div class="owl-next similar-product-custom-next custom-next">next</div>
            </div>
        </div>
    </div>
    {{-- End of similar product slider --}}
    {{-- <product details and comments> --}}
    <div class="mt-6 sm:w-11/12 mx-auto shadow text-sm">
        <div class="border-b rounded-t-lg">
            <ul id="tabs" class="inline-flex w-full border-b">
                <li class="bg-white px-4 text-custom-red font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first"><i class="fal fa-list"></i> مشخصات</a></li>
                <li class="px-4 text-gray-dark font-semibold py-2 rounded-t"><a href="#second"><i class="fas fa-comments-alt"></i> نظرات کاربران</a></li>
            </ul>
        </div>
        <div id="tab-contents" class="bg-white rounded-b-lg">
            <div id="first" class="p-4">
                <div class="text-xs text-gray-dark">گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت</div>
                <div class="mt-10 mb-2"><i class="fas fa-caret-left"></i> <span>مشخصات فیزیکی</span></div>
                <div class="grid grid-cols-3 gap-4 text-gray-dark">
                    <div class="bg-gray-background px-4 py-2">ابعاد</div>
                    <div class="bg-gray-background px-4 py-2 col-span-2">164x75.8x8.9 میلی متر </div>
                    <div class="bg-gray-background px-4 py-2">وزن</div>
                    <div class="bg-gray-background px-4 py-2 col-span-2">502 گرم </div>
                    <div class="bg-gray-background px-4 py-2">ویژگی های بدنه</div>
                    <div class="bg-gray-background px-4 py-2 col-span-2">- جنس بدنه : شیشه و پلاستیک، جلو شیشه، پشت پلاستیک، فریم پلاستیک مناسب عکاسی , مناسب عکاسی سلفی </div>
                </div>
                <div class="mt-10 mb-2"><i class="fas fa-caret-left"></i> <span>پردازنده</span></div>
                <div class="grid grid-cols-3 gap-4 text-gray-dark">
                    <div class="bg-gray-background px-4 py-2">تراشه</div>
                    <div class="bg-gray-background px-4 py-2 col-span-2">Mediatek Helio G80 (12 nm) Chipset</div>
                    <div class="bg-gray-background px-4 py-2">پردازنده مرکزی</div>
                    <div class="bg-gray-background px-4 py-2 col-span-2">Dual-Core Cortex-A76 & Hexa-Core Cortex-A55</div>
                </div>
            </div>
            <div id="second" class="hidden p-4">
              <div class="sm:flex">
                    <div class="sm:w-3/5">
                        <div class="border md:text-sm text-xs border-gray-100 rounded-lg bg-gray-50 text-gray-dark px-2 py-2 mt-5">
                            <div class="md:flex border-b pb-3">
                                <div class="md:w-5/12 md:text-justify text-center">کاربر مجاهد خضیراوی <span class="text-2xs text-gray-400">22 شهریور 1400</span></div>
                                <div class="md:w-5/12 text-custom-green md:text-justify text-center md:mt-0 mt-2"><i class="fal fa-thumbs-up"></i> خرید این محصول را توصیه می‌کنم</div>
                                <div class="md:w-2/12 md:text-left text-center mt-2 md:mt-0"><span class="border text-yellow-300 border-yellow-200 rounded-lg px-3 py-1">خریدار</span></div>
                            </div>
                            <div class="text-gray-dark mt-4">ظاهر گوشی و آپشن ها عالیه تنها ضعفش نسبت به گوشیای شیاومی مدت نگهداری شارژشه که دقیقا نصفه.</div>
                            <div class="flex">
                                <div class="w-1/2 flex flex-col px-4 py-3 leading-7">
                                    <div class="text-gray-dark"><i class="text-custom-green fas fa-plus-circle"></i> باکیفیت</div>
                                    <div class="text-gray-dark"><i class="text-custom-green fas fa-plus-circle"></i> خیلی خوش فرم وعالیه</div>
                                </div>
                                <div class="w-1/2 flex flex-col px-4 py-3 leading-7">
                                    <div class="text-gray-dark"><i class="text-custom-red fas fa-minus-circle"></i> زود داغ میشه</div>
                                </div>
                            </div>
                        </div>

                        <div class="border md:text-sm text-xs border-gray-100 rounded-lg bg-gray-50 text-gray-dark px-2 py-2 mt-5">
                            <div class="md:flex border-b pb-3">
                                <div class="md:w-5/12 md:text-justify text-center">کاربر مجاهد خضیراوی <span class="text-2xs text-gray-400">22 شهریور 1400</span></div>
                                <div class="md:w-5/12 text-custom-red md:text-justify text-center md:mt-0 mt-2"><i class="fal fa-thumbs-down"></i> خرید این محصول را توصیه نمی‌کنم</div>
                                {{-- <div class="w-2/12 text-left"><span class="border text-yellow-300 border-yellow-200 rounded-lg px-3 py-1">خریدار</span></div> --}}
                            </div>
                            <div class="text-gray-dark mt-4">ظاهر گوشی و آپشن ها عالیه تنها ضعفش نسبت به گوشیای شیاومی مدت نگهداری شارژشه که دقیقا نصفه.</div>
                            <div class="flex">
                                <div class="w-1/2 flex flex-col px-4 py-3 leading-7">
                                    <div class="text-gray-dark"><i class="text-custom-green fas fa-plus-circle"></i> باکیفیت</div>
                                    <div class="text-gray-dark"><i class="text-custom-green fas fa-plus-circle"></i> خیلی خوش فرم وعالیه</div>
                                </div>
                                <div class="w-1/2 flex flex-col px-4 py-3 leading-7">
                                    <div class="text-gray-dark"><i class="text-custom-red fas fa-minus-circle"></i> زود داغ میشه</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:w-2/5 mt-5">
                        {{-- <div class=""> --}}
                            <div class="mx-auto border text-sm border-gray-100 rounded-lg bg-gray-50 text-gray-dark px-2 py-10 sm:w-5/6">
                                <div class="text-center">
                                    <div class="font-bold text-xl">4.2</div>
                                    <div class="mt-1">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                        <i class="fas fa-star text-yellow-300"></i>
                                    </div>
                                    <div class="text-xs mt-1">از مجموع 143 امتیاز</div>
                                </div>
                                <div class="mt-4 text-sm">
                                    <div class="mt-2">کیفیت ساخت</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 77%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 3.9 </div>
                                    </div>

                                    <div class="mt-2">ارزش خرید به نسبت قیمت</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 92%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 4.5 </div>
                                    </div>

                                    <div class="mt-2">نوآوری</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 66%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 2.9 </div>
                                    </div>


                                    <div class="mt-2">امکانات و قابلیت ها</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 92%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 4.5 </div>
                                    </div>

                                    <div class="mt-2">سهولت استفاده</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 97%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 4.8 </div>
                                    </div>

                                    <div class="mt-2">طراحی و ظاهر</div>
                                    <div class="flex">
                                        <div class="w-5/6 bg-grey-light border rounded-full h-2.5 mt-1">
                                            <div class="bg-yellow-400 text-xs leading-none py-1 text-center text-white" style="width: 66%"></div>
                                        </div>
                                        <div class="text-center w-1/6 text-xs"> 2.9 </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="w-5/6 mx-auto text-center mt-3">
                                <button class="mx-auto border rounded-lg text-center bg-custom-green hover:bg-green-500 px-16 py-2 text-white" type="submit">
                                    افزودن نظر جدید
                                </button>
                            </div>
                        {{-- </div> --}}
                    </div>         
              </div>
            </div>
        </div>
    </div>
    {{-- </product details> --}}
@endsection

@section("script")
<script>
    // $(document).ready(function() {
    //     $('.zoom').magnify({
    //         speed: 200
    //     });
    // });

    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {
        
        tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white", "text-custom-red");  tabContents.children[i].classList.remove("hidden");
        tabTogglers[i].parentElement.classList.add("text-gray-dark");
        if ("#" + tabContents.children[i].id === tabName) {
            tabTogglers[i].parentElement.classList.remove("text-gray-dark");
            continue;
        }
        tabContents.children[i].classList.add("hidden");
        
        }
        let element = e.target.parentElement;
        if(e.target.tagName.toLowerCase() == "i")
            element = e.target.parentElement.parentElement;
        element.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white", "text-custom-red");
    });
    });
</script>

<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
<script>    
    let similarProduct = $('.similar-product-slider');
    similarProduct.owlCarousel({
        rtl:true,
        center:false,
        dots:false,
        items:1,
        responsiveClass:true,
        responsive:{
            600:{
                items:2,
                dots:false,
                autoplay:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
            },
            768:{
                items:3,
                dots:false,
                autoplay:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
            },
            1050:{
                items:4,
                dots:false,
                autoplay:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
            },
            1360:{
                items:5,
                dots:false,
                autoplay:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
            },
        }
    });
    similarProduct.on('changed.owl.carousel', function(property) {
        if( property.item.index == 0 ){
            $(property.target).find(".similar-product-custom-prev").addClass('disabled');
            $(property.target).find(".similar-product-custom-next").removeClass('disabled');

        }else{
            let currnetel = property.item.index + property.page.size;
        // last element
            if( currnetel ==  property.item.count ){
            $(property.target).find(".similar-product-custom-next").addClass('disabled');
                $(property.target).find(".similar-product-custom-prev").removeClass('disabled');
            }else{
                $(property.target).find(".similar-product-custom-next").removeClass('disabled');
                $(property.target).find(".similar-product-custom-prev").removeClass('disabled');
            }
            }
    })


    $('.similar-product-custom-prev').click(function() {
        similarProduct.trigger('prev.owl.carousel');
    });
    $('.similar-product-custom-next').click(function() {
        similarProduct.trigger('next.owl.carousel');
    });

    $('.owl-prev').html("<i class='far fa-angle-right'></i>");
    $('.owl-next').html("<i class='far fa-angle-left'></i>");
</script>

@endsection