<x-sections.standard sectionClasses="bg-bgPrimary pb-20 xl:pb-40">

    {{--left side --}}
    <div
        class="xl:col-start-1 xl:col-end-5 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0">
        <h2 class="heading">Oaza Zmysłów</h2>
       
        <p class=" text">
            Nasze eleganckie SPA to miejsce, gdzie ciało i umysł znajdują harmonię w otoczeniu <span class="uppercase font-semibold">luksusu i spokoju</span>. Oferujemy wyjątkowe udogodnienia od kameralnych gabinetów masażu po egzotyczny hammam, zapewniając niezapomnianą podróż do odprężenia i regeneracji.
        </p>

       
    </div>

    {{--right side --}}
    <div class="xl:col-start-6 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[1000px] w-full object-cover">

        <img src="{{ asset('assets/images/spa/6.jpeg') }}" alt="bar w restauracji"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>
</x-sections.standard>
