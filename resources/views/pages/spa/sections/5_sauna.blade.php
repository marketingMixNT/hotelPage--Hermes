<x-sections.standard sectionClasses="bg-bgThird md:pb-20 xl:pb-20">

    {{-- left side --}}
    <div
        class="xl:col-start-1 xl:col-end-5 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0">
        <h2 class="heading">UNIKALNE DOŚWIADCZENIE RELAKSU</h2>
       
        <p class=" text">
            Zanurz się w naszej oazie relaksu, gdzie sauna staje się potężnym źródłem odprężenia dla ciała i umysłu. Dzięki wysokiej jakości wyposażeniu i profesjonalnemu podejściu naszych terapeutów do każdej sesji, gwarantujemy <span class="uppercase font-semibold">niezapomniane doznania i pełne odprężenie.</span>


        </p>

    </div>

    {{-- right side --}}
    <div
        class="xl:col-start-7 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[800px] max-h-[1000px] w-full object-cover">

        <img src="{{ asset('assets/images/spa/13.jpeg') }}" alt="wnętrze hotelu"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>
</x-sections.standard>

<x-sections.standard sectionClasses="bg-bgThird pb-20 xl:pb-40">

    {{-- left side --}}
    <div
        class="xl:col-start-1 xl:col-end-8 rounded-lg min-h-[500px] xl:min-h-[1000px] max-h-[1000px] w-full object-cover order-1 xl:order-none">

        <img src="{{ asset('assets/images/spa/14.jpeg') }}" alt="wnętrze hotelu"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>

    {{-- right side --}}
    <div
        class="xl:col-start-9 xl:col-end-13 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 xl:ml-20">
        <h2 class="heading">Miejsce Odpoczynku i Ukojenia </h2>
        <p class=" text">
            Przekrocz progi naszej sauny i przenieś się w <span class="uppercase font-semibold">magiczny świat odprężenia</span>, gdzie ciepło i spokój otulą Twoje ciało. Oferujemy unikalne doświadczenia, w tym seanse aromaterapeutyczne i saunarium, które pozwolą Ci poczuć się odnowionym i pełnym energii.
        </p>
        
        <x-base.link-btn href='#'>Zarezerwuj</x-base.link-btn>

    </div>

</x-sections.standard>
