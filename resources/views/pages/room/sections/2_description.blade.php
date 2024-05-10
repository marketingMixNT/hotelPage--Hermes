<x-section class="bg-bgPrimary 2xl:pt-40 lg:pb-20 ">


    <x-grid>
        <div
            class="xl:col-start-1 xl:col-end-8 rounded-lg min-h-[500px] xl:max-h-[1000px] xl:min-h-[1000px] w-full object-cover order-1 lg:order-none">

            <img src="{{ asset('assets/images/1.jpeg') }}" alt="wnętrze hotelu"
                class="rounded-lg h-full w-full object-cover"></img>
        </div>
        <div
            class="xl:col-start-9 xl:col-end-13 xl:mt-24 xl:ml-20 flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 md:opacity-1 fade-in">


            <h2 class="heading">{{$room['title_one']}}</h2>
            <p class=" text">
               {{$room['desc_one']}}
            </p>
            {{-- <a href="#" class="link-dotted">Odkryj je wszystkie</a> --}}
        </div>





    </x-grid>
</x-section>


<x-section class="bg-bgPrimary 2xl:pt-40 lg:pb-20 ">


    <x-grid>

        <div
            class="xl:col-start-1 xl:col-end-4 xl:mt-24 xl:ml-20 flex flex-col items-start gap-4 lg:mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 order-1 lg:order-none pt-20 md:opacity-1 fade-in">


            <h2 class="heading">Udogodnienia</h2>
            <ul class=" lg:mt-12 flex flex-col justify-start items-start gap-4">
       
                        @foreach ($room['amenities'] as $item)
                        <li class="flex justify-center items-center gap-3 text"><img src="{{ asset('assets/icons/star.svg') }}"
                            alt="" class="w-3"> {{$item}}</li>
                        @endforeach
            </ul>
        </div>

        <div class="xl:col-start-5 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[1000px] w-full object-cover ">

            <img src="{{ asset('assets/images/2.jpeg') }}" alt="wnętrze hotelu"
                class="rounded-lg h-full w-full object-cover"></img>
        </div>



    </x-grid>
</x-section>



<x-section class="bg-bgPrimary 2xl:pt-40 pb-20 lg:pb-40 ">


    <x-grid>
        <div class="xl:col-start-1 xl:col-end-5 rounded-lg min-h-[500px] xl:min-h-[700px] w-full object-cover pl-0 sm:pl-20 md:pl-40 xl:pl-0">

            <img src="{{ asset('assets/images/rooms/1.jpeg') }}" alt="wnętrze hotelu"
                class="rounded-lg h-full w-full object-cover"></img>
        </div>
        <div
            class="xl:col-start-8 xl:col-end-13 xl:mt-24 xl:ml-20 flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 mt-20 lg:mt-0 md:opacity-1 fade-in">


            <h2 class="heading lg:-ml-20">~ {{$room['title_two']}}</h2>
            <p class=" text">
                {{$room['desc_two']}}
            </p>
            {{-- <a href="#" class="link-dotted">Odkryj je wszystkie</a> --}}
        </div>





    </x-grid>
</x-section>
