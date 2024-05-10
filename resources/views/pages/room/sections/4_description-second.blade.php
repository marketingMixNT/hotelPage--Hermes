
<x-section class="bg-bgThird 2xl:pt-40 lg:pb-20 ">
 
   
    <x-grid>
        
    <div class="xl:col-start-1 xl:col-end-5 xl:mt-24  flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 md:opacity-1 fade-in">


        <h2 class="heading">{{$room['title_one']}}</h2>
                    <p class=" text">
                        {{$room['desc_one']}}
                    </p>
                   {{-- <a href="#" class="link-dotted">Odkryj je wszystkie</a> --}}
                </div>

                <div class="xl:col-start-7 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[800px] xl:max-h-[1000px] w-full object-cover pl-0 sm:pl-20 md:pl-40 xl:pl-0">

                    <img src="{{asset('assets/images/rooms/5.jpeg')}}" alt="wnętrze hotelu" class="rounded-lg h-full w-full object-cover"></img>
                </div>


                <div class="xl:col-start-1 xl:col-end-7  rounded-lg min-h-[500px] xl:min-h-[800px] xl:max-h-[1000px] w-full object-cover mt-20 lg:-mt-[300px] pr-0 sm:pr-20 md:pr-40 xl:pr-12">

                    <img src="{{asset('assets/images/rooms/3.jpeg')}}" alt="wnętrze hotelu" class="rounded-lg h-full w-full object-cover"></img>
                </div>
   
    
            </x-grid>
</x-section>


<x-section class="bg-bgThird 2xl:pt-40 pb-20 ">
 
   
    <x-grid>
        
    <div class="xl:col-start-1 xl:col-end-5 xl:mt-24 xl:ml-20 flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 md:opacity-1 fade-in">

        <h2 class="heading">{{$room['title_two']}}</h2>
        <p class=" text">
            {{$room['desc_two']}}

        </p>
                </div>

                <div class="xl:col-start-6 xl:col-end-13 rounded-lg min-h-[500px] xl:min-h-[800px] xl:max-h-[1000px] w-full object-cover">

                    <img src="{{asset('assets/images/rooms/4.jpeg')}}" alt="wnętrze hotelu" class="rounded-lg h-full w-full object-cover"></img>
                </div>

   
    
            </x-grid>
</x-section>



