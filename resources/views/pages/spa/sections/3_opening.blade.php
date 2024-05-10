<section class="px-10 xl:px-20 2xl:px-40  bg-bgPrimary">
    <x-grid>

        <div
            class="xl:col-start-1 xl:col-end-7  sm:pr-20 md:pr-64 xl:pr-0 max-h-[500px] md:max-h-[800px] xl:max-h-[1000px] mb-10 sm:mb-20 xl:mb-0 xl:mr-32">

            <img src="{{ asset('assets/images/spa/12.jpeg') }}" alt="danie w naszej restauracji"
                class=" rounded-lg  w-full h-full object-cover"></img>

        </div>


        <div
            class="xl:col-start-9 xl:col-end-13 flex flex-col  items-start gap-8 mt-10 sm:mt-0  sm:pl-20 md:pl-64 xl:pl-0 mb-10 sm:mb-20 xl:mb-0">

            <h2 class="heading mr-12"> Równowaga i Relaks</h2>
            <p class="text">
                Nasze Spa to enklawa relaksu, gdzie każdy detal został starannie zaplanowany, aby zapewnić naszym
                Gościom <span class="uppercase font-semibold">wyjątkowe doznania odprężenia i regeneracji.</span> Przeżyj
                niezapomnianą podróż z naszymi wyjątkowymi zabiegami od masażu po pielęgnację skóry, w otoczeniu
                eleganckiego designu i spokojnej atmosfery.
            </p>

            <div class="border-t border-b border-primary-400 w-full  sm:py-1 mt-6 flex justify-between items-center">
                <a href="#" class="link link--gold uppercase font-semibold ">Pobierz informator</a><img
                    src="{{ asset('assets/icons/arrow-right.svg') }}" alt="" class="w-8">
            </div>


        </div>

        <div
            class=" sm:pr-20 md:pr-64 xl:pr-0 xl:col-start-7 xl:col-end-13 min-h-[500px] md:min-h-[600px] xl:-mt-[100px]  3xl:-mt-[400px]">
            <img src="{{ asset('assets/images/spa/7.jpeg') }}" class=" rounded-lg  w-full h-full object-cover "></img>

        </div>


    </x-grid>
</section>



<section class="px-10 xl:px-20 2xl:px-40 pt-20 xl:pt-0 pb-20 xl:pb-40 bg-bgPrimary">
    <x-grid>
        <div
            class="menu-box border border-primary-400   relative px-4  w-full sm:w-3/4 xl:w-auto mx-auto    xl:col-start-1 xl:col-end-6 xl:mx-16  flex flex-col gap-6 justify-center items-center  xl:-mt-12 py-12 xl:py-20 xl:max-h-[325px] mb-10 sm:mb-20 xl:mb-0 ">
            <div class="flex flex-col justify-center items-center gap-1">
                <span class="uppercase  text-fontPrimary font-light  font-primary">SPA</span>
                <span class="uppercase  text-fontPrimary  font-light font-text">pon - nd <span
                        class="font-semibold">10:00 - 20:00</span></span>
            </div>
            <div class="flex flex-col justify-center items-center gap-1">
                <span class="uppercase  text-fontPrimary font-light font-primary">Masaże</span>
                <span class="uppercase  text-fontPrimary  font-light file:font-text">pon - nd <span
                        class="font-semibold">10:00 - 20:00</span></span>
            </div>
            <div class="flex flex-col justify-center items-center gap-1">
                <span class="uppercase  text-fontPrimary font-light font-primary">Sauna</span>
                <span class="uppercase  text-fontPrimary font-light font-text">pon - nd <span
                        class="font-semibold">10:00 - 20:00</span></span>
            </div>

        </div>

        <div class="xl:col-start-7 xl:col-end-13 xl:mt-32  flex flex-col gap-4 md:opacity-0 fade-in">

            <p
                class="font-headingSecondary  text-fontPrimary text-xl md:text-2xl xl:text-3xl  leading-snug tracking-wide">
                "Spędziłam cudowny dzień w Spa Tatry Grand Hotel. Obsługa była niezwykle miła i pomocna, a atmosfera była
                bardzo relaksująca. Wystrój zachwycił mnie swoją elegancją, a sauna była po prostu doskonała - idealne
                rozwiązanie na odprężenie. Masaże były absolutnie rewelacyjne! Polecam to Spa każdej osobie pragnącej
                relaksu w pięknym i luksusowym otoczeniu."
            </p>
            <div class="flex gap-6">

                <span class="uppercase text-primary-400 font-light">Leokadia, google / 21-08-2023</span>
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
