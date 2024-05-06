<x-sections.standard sectionClasses="bg-bgPrimary pb-40">

    {{-- left side --}}
    <div
        class="xl:col-start-1 xl:col-end-8 rounded-lg min-h-[500px] xl:min-h-[1000px] max-h-[1000px] w-full object-cover">

        <img src="{{ asset('assets/images/restaurant/6.jpeg') }}" alt="wnętrze hotelu"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>

    {{-- right side --}}
    <div
        class="xl:col-start-9 xl:col-end-13 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 xl:ml-20">
        <h2 class="heading">Pięć pokojowych światów w Tatry Grand Hotel czeka na odkrycie</h2>
        <p class=" text">
            Zanurz się w ekskluzywności pięciu niepowtarzalnych środowisk, które oferuje Tatry Grand Hotel. Każdy pokój
            to dzieło sztuki, od intymnych standardów po królewskie apartamenty. Odkryj miejsce, gdzie design spotyka
            funkcjonalność, a <span class="uppercase font-semibold">każdy kąt opowiada inną historię.</span> Zapraszamy
            do eksploracji naszych przestrzeni i wybrania tej, która najlepiej oddaje Twój własny styl odpoczynku.
        </p>
        <x-base.link-btn href='#'>Zarezerwuj stolik</x-base.link-btn>

    </div>

</x-sections.standard>
