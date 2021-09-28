<div class="w-10/12 mx-auto bg-white rounded mt-7 shadow-sm">
    <div class="text-sm text-gray-400 pt-10 text-center w-2/3">لینک دعوت اختصاصی برای شما</div>
    <div dir="ltr" class="text-center w-full text-sm flex justify-center mt-5 relative has-tooltip">
        <button onclick="myFunction()" class="w-2/12 sm:w-1/12 px-4 py-2 rounded-l bg-gray-500 text-white cursor-pointer">کپی</button>
        <input type="text" id="myInput" class="w-7/12 md:w-5/12 sm:w-6/12 rounded-r bg-gray-200 border border-gray-500 py-2 px-4 cursor-not-allowed outline-none" value="https://example.com/user/afshin/referal" readonly>
        {{-- <span id="clipboard" class='tooltip left-1/2 rounded shadow-lg p-1 bg-gray-400 text-white -mt-8 text-sm'>کپی در کلیپ بورد</span> --}}
    </div>
    <div class="mt-5 w-2/3 flex justify-center pb-5">
        <span class="text-sm">دعوت از دوستان با :</span>
        <a href="#" class="mr-2"><i class="fab fa-telegram text-custom-blue text-2xl"></i></a>
        <a href="#" class="mr-2"><i class="fab fa-instagram text-2xl"></i></a>
    </div>
</div>
<script>
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");
  var clip = document.getElementById("clipboard");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
//   clip.innerHTML = "کپی شد";
//   alert("Copied the text: " + copyText.value);
}
</script>