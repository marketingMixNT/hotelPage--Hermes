<section class="bg-bgThird  pb-40 relative">

    <div class="px-10 xl:px-20  ">

        <div class="flex flex-col xs:flex-row gap-4 xs:gap-0 justify-between items-center ">
            <h2 class=" heading">Nasze Pokoje</h2>
        </div>
        <div class="mt-12">

            <hr class=" border-primary-400 w-full absolute left-0 right-0">
            <hr class=" border-primary-400 w-full mt-2 absolute left-0 right-0">
        </div>

    </div>


{{--SINGLE ROOM LOOP--}}
@foreach ($rooms as $room)
    

    <div class="pt-40 flex flex-col gap-10">
        <div class="px-10 xl:px-20 2xl:px-40 ">
            <a href="#" class="heading hover:text-fontThird duration-500 uppercase">{{ $room['name'] }}</a>
            <span class="text ml-4">{{ $room['short_description'] }}</span>
        </div>

        <div class="flex">
            <div class="swiper room-photos ">
                <div class="swiper-wrapper">
                    {{-- ITEM --}}
                    @foreach ($room['photos'] as $photo)
                        <div
                            class="swiper-slide border min-h-[500px] lg:min-h-[650px] xl:min-h-[750px] 2xl:min-h-[850px]   bg-gray-400 bg-blend-multiply bg-center rounded-lg">
                            <img src="{{ $photo }}" alt=""
                                class="w-full  h-full object-cover rounded-lg">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-between px-10 xl:px-20 2xl:px-40 gap-20 sm:gap-0">
            <div class="sm:w-1/2 flex flex-col justify-start items-start">
                <div class="flex flex-col justify-start items-start gap-2">
                    <div class="flex justify-center items-center gap-4"><img src="{{ asset('assets/icons/users.svg') }}"
                            alt="" class="w-10"><span class="font-primary text-fontPrimary ">{{ $room['persons'] }}</span>
                    </div>
                    <div class="flex justify-center items-center gap-4"><img src="{{ asset('assets/icons/bed.svg') }}"
                            alt="" class="w-10"><span class="font-primary text-fontPrimary ">{{ $room['bed'] }}</span>
                    </div>
                    <div class="flex justify-center items-center gap-4"><img src="{{ asset('assets/icons/size.svg') }}"
                            alt="" class="w-10"><span class="font-primary text-fontPrimary ">{{ $room['surface'] }} m² </span>
                    </div>
                </div>

                <div class="border border-primary-400 rounded-lg py-3 px-6 mt-12 btn relative border-opacity-40 group hover:border-opacity-100 duration-500">
                    <a href="#" class="uppercase font-semibold font-primary text-fontPrimary flex justify-center items-center gap-2 z-20"><span class="z-10"> Zobacz pokój</span> <img src="{{asset('assets/icons/arrow-right.svg')}}" alt="" class="w-8 z-10 group-hover:translate-x-2 duration-500"></a>
                </div>
                
                
            
        
            </div>
            
            <div class="w-full sm:w-1/3 flex flex-col gap-6 justify-start items-start">
                <p class="text">{{ $room['description'] }}</p>
                <a href="#" class="link-dotted">Zarezerwuj</a>
            </div>

        </div>
    </div>
    @endforeach
</section>
