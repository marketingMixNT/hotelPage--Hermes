<section id="header-hero"
class="bg-bgThird">

<div class="pt-40 pb-20 flex flex-col gap-10">
    <div class="px-10 xl:px-20 2xl:px-40 flex justify-start items-end">
        <h1 class="font-primary font-semibold md:font-normal  text-fontPrimary text-2xl md:text-3xl 2xl:text-6xl  leading-snug tracking-wide uppercase">{{$room['name']}}</h1>
        <span class="font-text font-light text-fontPrimary  leading-normal tracking-wide text-xl ml-6 mb-1">{{ $room['short_description'] }}</span>
    </div>

    <div class="flex">
        <div class="swiper room-photos ">
            <div class="swiper-wrapper">
                {{-- ITEM --}}
                @foreach ($room['photos'] as $photo)
                    <div
                        class="swiper-slide border min-h-[500px] lg:min-h-[650px] xl:min-h-[750px] 2xl:min-h-[1000px]   bg-gray-400 bg-blend-multiply bg-center rounded-lg">
                        <img src="{{asset($photo)}}" alt=""
                            class="w-full  h-full object-cover rounded-lg">
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <div class="mt-20 flex flex-col lg:flex-row justify-between  px-10 xl:px-20 2xl:px-40">

        <div class="lg:w-1/2 flex flex-col justify-start items-start md:opacity-1 fade-in">
        
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

            <div class="flex flex-col mt-6">

                <div class="text-fontPrimary font-text"><span class="font-semibold">E:</span> <a href="#" class="text-sm mt-1 hover:text-fontThird duration-500 lowercase">kontakt@tatrygrandhotel.pl</a></div>
                <div class="text-fontPrimary font-text"><span class="font-semibold">T:</span> <a href="#" class="link link--gold">+48 123 456 789</a></div>
            </div>

            <div class="border border-primary-400 rounded-lg py-3 px-6 mt-12 btn relative border-opacity-40 group hover:border-opacity-100 duration-500">
                <a href="#" class="uppercase font-semibold font-primary text-fontPrimary flex justify-center items-center gap-2 z-20"><span class="z-10">Zarezerwuj pokój</span> <img src="{{asset('assets/icons/arrow-right.svg')}}" alt="" class="w-8 z-10 group-hover:translate-x-2 duration-500"></a>
            </div>
        </div>


        <div class="lg:w-1/2 md:opacity-1 fade-in">

            <h2 class="font-primary font-normal text-fontPrimary xs:text-xl md:text-2xl xl:text-3xl mr-0 sm:mr-20 md:mr-40 xl:mr-0  max:text-4xl mt-12 max:mt-24 leading-relaxed tracking-wide mb-12 lg:-ml-52 ">~ {{$room['heading']}}</h2>

            <p class="font-primary font-normal text-fontPrimary xs:text-xl md:text-2xl xl:text-3xl mr-0 sm:mr-20 md:mr-40 xl:mr-0  max:text-4xl mt-12 max:mt-24 leading-relaxed tracking-wide mb-12">{{$room['description']}}</p>

        </div>
        

    </div>
</div>
</section>