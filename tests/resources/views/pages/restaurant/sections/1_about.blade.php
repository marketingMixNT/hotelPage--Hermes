<x-sections.standard sectionClasses="bg-bgPrimary pb-20 xl:pb-40">

    {{--left side --}}
    <div
        class="xl:col-start-1 xl:col-end-5 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0">
        <h2 class="heading">Kulinarne Opowieści</h2>
        <p class=" text">
            Nasza restauracja w Tatry Grand Hotel to nie tylko miejsce, w którym gotujemy - to przestrzeń, w której <span class="uppercase font-semibold">tworzymy wspomnienia</span>. Inspirując się lokalnymi tradycjami kulinarnej sztuki, łączymy świeże składniki z kreatywnym podejściem, aby zapewnić Ci niezapomniane doświadczenia kulinarne. 
        </p>
        <p class="text">W naszych wnętrzach przeplatają się nuty elegancji z duchem nowoczesności, tworząc atmosferę sprzyjającą relaksowi i wyrafinowanym przyjemnościom smakoszy. </p>
        <x-base.link-btn href='#'>Zarezerwuj stolik</x-base.link-btn>
    </div>

    {{--right side --}}
    <div class="xl:col-start-6 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[1000px] w-full object-cover">

        <img src="{{ asset('assets/images/restaurant/5.jpeg') }}" alt="bar w restauracji"
            class="rounded-lg h-full w-full object-cover"></img>
    </div>
</x-sections.standard>
