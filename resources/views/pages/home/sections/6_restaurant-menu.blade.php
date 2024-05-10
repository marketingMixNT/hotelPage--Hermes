<section class="px-10 xl:px-20 2xl:px-40  bg-bgThird">
    <x-grid>

      <div class="xl:col-start-1 xl:col-end-6  sm:pr-20 md:pr-64 xl:pr-0 max-h-[500px] md:max-h-[800px] xl:max-h-[1000px] mb-10 sm:mb-20 xl:mb-0">

        <img src="{{ asset('assets/images/6.jpeg') }}" alt="danie w naszej restauracji"
        class=" rounded-lg  w-full h-full object-cover"></img>
      </div>


        <div class="xl:col-start-9 xl:col-end-13 flex flex-col  items-start gap-8  sm:pl-20 md:pl-64 xl:pl-0 mb-10 sm:mb-20 xl:mb-0 md:opacity-0 fade-in">

            <h2 class="heading mr-12">Smakowite Chwile i Magiczne Wieczory w Tatry Grand Hotel</h2>
            <p class="text">
                Tatry Grand Hotel w Zakopanem to <span class="uppercase font-semibold">perła polskiej hotelarstwa</span>,
                oferująca luksus i relaks w sercu Tatr. Elegancja pięciogwiazdkowego zakwaterowania łączy się z ciepłem
                zakopiańskiej tradycji. Od wyrafinowanych wnętrz, przez ofertę spa, po widoki na góry – wszystko zostało
                dopracowane, by zapewnić niezapomniane wrażenia i komfort.
            </p>
            <a href="{{route('rooms')}}" class="link-dotted">Dowiedz się więcej</a>
            <div class="border-t border-b border-primary-400 w-full  sm:py-3 mt-6 flex justify-between items-center">
                <a href="#" class="link link--gold uppercase font-semibold ">Zobacz nasze menu </a><img src="{{asset('assets/icons/arrow-right.svg')}}" alt="" class="w-8">
            </div>
        </div>

        <div class=" sm:pr-20 md:pr-64 xl:pr-0 xl:col-start-7 xl:col-end-13 min-h-[500px] md:min-h-[600px] xl:-mt-[100px]  3xl:-mt-[400px]">
          <img src="{{ asset('assets/images/7.jpeg') }}"
          class=" rounded-lg  w-full h-full object-cover "></img>

        </div>


    </x-grid>
</section>



<section class="px-10 xl:px-20 2xl:px-40 pt-20 xl:pt-0 pb-20 xl:pb-40 bg-bgThird">
    <x-grid>
        <div
            class="menu-box border border-primary-400   relative px-4  w-full sm:w-3/4 xl:w-auto mx-auto    xl:col-start-1 xl:col-end-6 xl:mx-16  flex flex-col gap-6 justify-center items-center  xl:-mt-12 py-12 xl:py-0 xl:max-h-[325px] mb-10 sm:mb-20 xl:mb-0">
            <div class="flex flex-col justify-center items-center gap-1 md:opacity-0 fade-in">
                <span class="uppercase  text-fontPrimary font-light  font-primary">Śniadania</span>
                <span class="uppercase  text-fontPrimary  font-light font-text">pon - nd <span
                        class="font-semibold">07:30 - 10:00</span></span>
            </div>
            <div class="flex flex-col justify-center items-center gap-1 md:opacity-0 fade-in">
                <span class="uppercase  text-fontPrimary font-light font-primary">Restauracja</span>
                <span class="uppercase  text-fontPrimary  font-light file:font-text">pon - nd <span
                        class="font-semibold">12:00 - 23:00</span></span>
            </div>
            <div class="flex flex-col justify-center items-center gap-1 md:opacity-0 fade-in">
                <span class="uppercase  text-fontPrimary font-light font-primary">Kolacje Degustacyjne</span>
                <span class="uppercase  text-fontPrimary font-light font-text">pt - sb <span class="font-semibold">17:00
                        - 20:00</span></span>
            </div>

        </div>

        <div class="xl:col-start-7 xl:col-end-13 xl:mt-32  flex flex-col gap-4 md:opacity-0 fade-in">

            <p class="font-headingSecondary  text-fontPrimary text-xl md:text-2xl xl:text-3xl  leading-snug tracking-wide">
                "Podczas naszego pobytu w Grand Hotelu mieliśmy przyjemność zjeść kolację w hotelowej restauracji, i
                muszę przyznać, że było to jedno z najbardziej pamiętnych doświadczeń kulinar­nych, jakie kiedykolwiek
                mieliśmy. Danie za daniem zachwycało nas nie tylko wyjątkowym połączeniem smaków, ale także artystycznym
                sposobem podania. Szef kuchni zdecydowanie wie, jak łączyć lokalne produkty z innowacyjnymi technikami,
                tworząc niesamowite kompozycje, które są prawdziwym uczciem dla oczu i podniebienia."
            </p>
            <div class="flex gap-6">

                <span class="uppercase text-primary-400 font-light">Marian, google / 21-08-2023</span>
                <div class="flex " style="margin-top:-3px ">
                  <img src="{{ asset('assets/icons/star.svg') }}" alt="" class="w-5">
                  <img src="{{ asset('assets/icons/star.svg') }}" alt="" class="w-5">
                  <img src="{{ asset('assets/icons/star.svg') }}" alt="" class="w-5">
                  <img src="{{ asset('assets/icons/star.svg') }}" alt="" class="w-5">
                  <img src="{{ asset('assets/icons/star.svg') }}" alt="" class="w-5">
                
                </div>
            </div>
        </div>
    </x-grid>
</section>
