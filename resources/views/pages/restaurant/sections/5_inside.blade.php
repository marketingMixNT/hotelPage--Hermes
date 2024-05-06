<x-sections.standard sectionClasses="bg-bgPrimary md:pb-20 xl:pb-40">

    {{-- left side --}}
    <div
        class="xl:col-start-1 xl:col-end-5 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0">
        <h2 class="heading">Oaza Elegancji</h2>
        <p class=" text">
           
            Wnętrze restauracji w Tatry Grand Hotel to prawdziwe odejście od codzienności - otoczone zielenią i
            dopieszczone w najdrobniejszych detalach. Tu elegancja spotyka się z naturą, tworząc wyjątkową atmosferę,
            która zaprasza do relaksu i delektowania się wyśmienitymi smakami. Wśród bujnej zieleni i subtelnego
            oświetlenia można poczuć się jak w <span class="uppercase font-semibold">magicznym ogrodzie</span>, gdzie czas płynie wolniej, a każdy moment jest
            wyjątkowy. To miejsce, w którym design i harmonia spotykają się, aby stworzyć niepowtarzalne doświadczenie
            dla zmysłów i duszy.
        </p>

    </div>

    {{-- right side --}}
    <div
        class="xl:col-start-7 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[800px] max-h-[1000px] w-full object-cover">

        <img src="{{ asset('assets/images/restaurant/4.jpeg') }}" alt="wnętrze hotelu"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>
</x-sections.standard>
