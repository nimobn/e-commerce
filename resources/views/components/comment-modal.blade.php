<div>

    <!--Modal opacity-0-->
  <div class="opacity-0 modal transition duration-700 ease-in-out pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-10/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left text-sm text-custom-black">
        <!--Title-->
        <div class="flex justify-between items-center pb-3 border-b px-6">
          <p class="text-2xl font-bold">افزودن نظر جدید</p>
          <div class="modal-close cursor-pointer z-50">
            <i class="fas fa-times"></i>
          </div>
        </div>

        <!--Body-->
        <div class="flex px-10">
            <div class="w-7/12 text-right">
                <div class="mt-10">نظر شما <span class="text-custom-red">*</span></div>
                <div class="text-xs text-custom-black">
                    <textarea class="resize-none rounded border p-2 w-full" placeholder="لطفا نظر خود را بنویسید" name="comment" id="" cols="50" rows="10"></textarea>
                </div>
                <div class="flex text-xs mt-2">
                    <div class="positive flex flex-col w-6/12">
                        <div>نقاط قوت</div>
                        <div class="w-11/12"><input class="p-2 border rounded border-custom-green w-full" type="text"></div>
                        <div class="w-11/12 mt-1 border rounded px-2 py-3 bg-green-300 relative">نسبت به قیمت میارزه <i class="absolute left-2 top-4 fas fa-times"></i></div>
                        <div class="w-11/12 mt-1 border rounded px-2 py-3 bg-green-300 relative">نسبت به قیمت میارزه <i class="absolute left-2 top-4 fas fa-times"></i></div>
                    </div>
                    <div class="negative flex flex-col w-6/12 items-end">
                        <div class="w-11/12">نقات ضعف</div>
                        <div class="w-11/12"><input class="p-2 border rounded border-custom-red w-full" type="text"></div>
                        <div class="w-11/12 mt-1 border rounded px-2 py-3 bg-red-300 relative">زود داغ میکنه <i class="absolute left-2 top-4 fas fa-times"></i></div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-auto text-2xs">با “ثبت نظر” موافقت خود را با قوانین انتشار نظرات در گیل مارکت اعلام می‌کنم.</div>
                    <div class="flex-1 text-left"><button class="text-xs px-5 py-2 border bg-custom-green hover:bg-green-500 text-white rounded">ثبت نظر</button></div>
                </div>
            </div>

            <div class="w-4/12 mx-auto">
              <div class="mt-8">
                <div class="text-right text-xs text-custom-black">کیفیت ساخت:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="quality" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>
              <div class="mt-6">
                <div class="text-right text-xs text-custom-black">نوآوری:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="newavary" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>
              <div class="mt-6">
                <div class="text-right text-xs text-custom-black">ارزش خرید نسبت به قیمت:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="newavary" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>

              <div class="mt-6">
                <div class="text-right text-xs text-custom-black">امکانات و قابلیت ها:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="newavary" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>

              <div class="mt-6">
                <div class="text-right text-xs text-custom-black">طراحی و ظاهر:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="newavary" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>

              <div class="mt-6">
                <div class="text-right text-xs text-custom-black">سهولت استفاده:</div>
                <div class="flex flex-row-reverse items-center">
                  <input type="hidden" name="newavary" value="0">
                  <div class="w-2/12 state">متوسط</div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up"
                    data-rate="0" 
                    data-text="خیلی بد"
                  ></div>
                  <div
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="25" 
                    data-text="بد"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-purple-400 bg-purple-400 rate-up"
                  ></div>
                  <div 
                    class="w-3 h-3 border rounded-full border-purple-400 bg-purple-400 cursor-pointer rate rate-up" 
                    data-rate="50" 
                    data-text="متوسط"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="75" 
                    data-text="خوب"
                  ></div>
                  <div 
                    class="w-2/12 border rounded-lg h-1 border-gray-400 bg-gray-400 rate-up"
                  ></div>
                  <div 
                    class="w-2 h-2 border rounded-full border-gray-400 bg-gray-400 cursor-pointer rate rate-up" 
                    data-rate="100" 
                    data-text="عالی"
                  ></div>
                </div>
              </div>
            </div>
        </div>

        <!--Footer-->
        {{-- <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
          <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
        </div> --}}
        
      </div>
    </div>
  </div>


    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
            event.preventDefault()
            toggleModal()
          })
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }
        
        document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
            isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
          }
        };
        
        
        function toggleModal () {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
        }
        
         
    </script>

    <script>
      const rates = document.querySelectorAll(".rate");
      for(var i = 0; i < rates.length; i++){
        rates[i].addEventListener('click', updateSlider);
      }
      function updateSlider(){
        let p = this.parentElement;
        p.querySelector(".state").innerHTML = this.dataset.text;
        p.querySelector("input").value = this.dataset.rate;
        // if( this.dataset.rate > 0 ){
          let rate_ups = p.querySelectorAll(".rate-up");
          let up = false;
          for(i = 0; i < rate_ups.length; i++){
            if(i%2 == 0){
              rate_ups[i].classList.remove("h-3", "w-3");
              rate_ups[i].classList.add("h-2", "w-2");
            }
            if (up){
              rate_ups[i].classList.add("border-gray-400", "bg-gray-400");
              rate_ups[i].classList.remove("border-purple-400", "bg-purple-400");
            }else{
              rate_ups[i].classList.remove("border-gray-400", "bg-gray-400");
              rate_ups[i].classList.add("border-purple-400", "bg-purple-400");
              
            }
            if(rate_ups[i] == this)
              up = true;
              this.classList.remove("h-2", "w-2");
              this.classList.add("h-3", "w-3");
            // classList.remove .add
          }
        // }
      }
    </script>
</div>