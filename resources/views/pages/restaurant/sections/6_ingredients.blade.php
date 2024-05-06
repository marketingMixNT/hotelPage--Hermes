<x-sections.standard sectionClasses="bg-bgPrimary pb-20 xl:pb-40">

    {{-- left side --}}
    <div
        class="xl:col-start-1 xl:col-end-8 rounded-lg min-h-[500px] xl:min-h-[1000px] max-h-[1000px] w-full object-cover order-1 xl:order-none">

        <img src="{{ asset('assets/images/restaurant/6.jpeg') }}" alt="wnętrze hotelu"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>

    {{-- right side --}}
    <div
        class="xl:col-start-9 xl:col-end-13 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 xl:ml-20">
        <h2 class="heading">Skarby Regionu </h2>
        <p class=" text">
            W naszej kuchni w Tatry Grand Hotel nie uznajemy kompromisów, gdy chodzi o jakość składników. Pragniemy zapewnić naszym gościom tylko najlepsze, dlatego też korzystamy wyłącznie z <span class="uppercase font-semibold">najwyższej jakości lokalnych produktów</span>. Nasza pasja do doskonałych smaków prowadzi nas do poszukiwań najświeższych warzyw, mięsa od lokalnych hodowców oraz świeżych ryb z pobliskich wód. Dzięki temu możemy zagwarantować, że każde danie, które trafia na nasze stoły, to prawdziwa uczta dla podniebienia, pełna autentycznych smaków regionu.
        </p>
        <x-base.link-btn href='#'>Zarezerwuj stolik</x-base.link-btn>

    </div>

</x-sections.standard>
