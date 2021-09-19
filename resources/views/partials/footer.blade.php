<footer class="flex flex-col divide-y divide-gray-light bg-gray-200">
    <div class="flex flex-row mt-10 text-xs">
        <div class="w-1/12"></div>
        <div class="w-2/12">
            <div class="text-custom-black font-bold mb-4">@lang("layout.footer.shop.title")</div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.shop.about_us")</a></div>
            <div class="text-gray-dark"><a href="#">@lang("layout.footer.shop.contact_us")</a></div>
        </div>
        <div class="w-2/12">
            <div class="text-custom-black font-bold mb-4">@lang("layout.footer.customer.title")</div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.customer.paymetn_guide")</a></div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.customer.rules")</a></div>
            <div class="text-gray-dark"><a href="#">@lang("layout.footer.customer.faq")</a></div>
        </div>
        <div class="w-3/12">
            <div class="text-custom-black font-bold mb-4">@lang("layout.footer.user.title")</div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.user.register")</a></div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.user.profile")</a></div>
            <div class="text-gray-dark mb-3"><a href="#">@lang("layout.footer.user.privacy")</a></div>
            <div class="text-gray-dark"><a href="#">@lang("layout.footer.user.order_follow")</a></div>
        </div>
        <div class="w-4/12">
            <div class="text-custom-black font-bold mb-4">
                @lang("layout.footer.social media")
                <div class="flex space-x-3 space-x-reverse text-xl mt-2 mr-3 text-red-500">
                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="text-custom-black font-bold mb-4 mt-6">@lang("layout.footer.newsletter")</div>
                <div>
                    <form action="#">
                        <input class="shadow appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         type="text" name="newsletter" placeholder="@lang("layout.footer.news placeholder")">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            @lang("layout.footer.news button")
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3 flex flex-row text-xs pt-3">
        <div class="w-1/12"></div>
        <div class="w-7/12">
            <div class="text-custom-black font-bold mb-4">@lang("layout.footer.about.title")</div>
            <div class="text-gray-dark mb-3 text-justify leading-6">@lang("layout.footer.about.body")</div>
        </div>
        <div class="w-4/12 flex justify-center items-center">
            <div class="flex">
                <a href="#"><img src="{{ asset('images/e-nemad2.png') }}" alt="" class="w-48"></a>
            </div>
            <div class="flex">
                <a href="#"><img src="{{ asset('images/e-nemad.png') }}" alt="" class="w-48"></a>
            </div>
        </div>
    </div>
</footer>