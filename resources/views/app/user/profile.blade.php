@extends("layouts.app")

@section("content")
    <div class="w-10/12 mx-auto bg-white rounded mt-12 py-4 shadow-sm">
        <ul class="hidden md:flex text-sm font-bold">
            <li class="mr-3 border-l">
              <a class="inline-block py-1 px-4 text-custom-red" href="#">اطلاعات کاربری</a>
            </li>
            <li class="mr-3 border-l">
              <a class="inline-block py-1 px-4 hover:text-custom-red text-custom-black" href="#">سفارشات من</a>
            </li>
            <li class="mr-3 border-l">
                <a class="inline-block py-1 px-4 hover:text-custom-red text-custom-black" href="#">آدرس های من</a>
            </li>
            <li class="mr-3 border-l">
                <a class="inline-block py-1 px-4 hover:text-custom-red text-custom-black" href="#">لیست ها</a>
            </li>
            <li class="mr-3">
                <a class="inline-block py-1 px-4 hover:text-custom-red text-custom-black" href="#">دعوت از دوستان</a>
            </li>
        </ul>

        <div class="md:hidden flex items-center mr-3">
            <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                {{-- <i class="fas fa-bars"></i> --}}
            </button>
        </div>
        <ul class="hidden mobile-menu">
            <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-custom-red font-semibold">اطلاعات کاربری</a></li>
            <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-custom-red transition duration-300">سفارشات من</a></li>
            <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-custom-red transition duration-300">آدرس های من</a></li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-custom-red transition duration-300">لیست ها</a></li>
            <li><a href="#referal" class="block text-sm px-2 py-4 hover:bg-custom-red transition duration-300">دعوت از دوستان</a></li>
        </ul>
    </div>

    @include("app.user.partials.".$page)

    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        window.addEventListener("resize", function(event) {
            if(window.innerWidth > 767)
            menu.classList.add("hidden");
        })
    </script>
@endsection