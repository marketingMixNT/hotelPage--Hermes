<x-section class="bg-bgThird 2xl:pt-40 pb-40">

    <div class="flex flex-col xs:flex-row gap-4 xs:gap-0 justify-between items-center">
        <h2 class=" heading">Nasze Pokoje</h2>
        <a href="#" class="link-dotted">Zobacz
            wszystkie</a>
    </div>

    <div class="swiper cottages mt-16">
        <div class="swiper-wrapper">
            {{-- ITEM --}}
            @foreach ($rooms as $room)
                <div class="swiper-slide border min-h-[500px]  md:min-h-[850px] rounded-lg  bg-gray-400 bg-blend-multiply bg-center "
                    style="background-image: url('{{ asset($room['thumbnail']) }}')">
                    <div
                        class="min-h-[500px]  md:min-h-[850px] w-full flex flex-col justify-end items-center text-fontWhite gap-4 pb-10">
                        <h3 class=" font-headingSecondary  text-3xl xs:text-4xl  leading-snug tracking-wide uppercase">
                            {{ $room['name'] }}</h3>

                        <span
                            class=" font-headingSecondary font-extralight  text-lg  leading-snug tracking-wide uppercase mb-6">{{ $room['persons'] }}</span>
                        <a href="{{route('room',$room['name'])}}" class="link-dotted link-dotted--white ">Zobacz pokój</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

   <x-marquee/>
</x-section>
