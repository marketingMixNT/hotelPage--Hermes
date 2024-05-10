<x-section class="{{$bgColor}} 2xl:pt-40">

    <x-grid>
        
     <div class="xl:col-start-1 xl:col-end-5 font-primary font-normal text-fontPrimary xs:text-xl md:text-2xl xl:text-3xl mr-0 sm:mr-20 md:mr-40 xl:mr-0  max:text-4xl mt-12 max:mt-24 leading-snug tracking-wide mb-12 md:opacity-0 fade-in space-y-6 ">
        <h2 class="heading">{{$title}}</h2>
        <p class=" text">
         {{$slot}}
        </p>
        


     </div>
 
        <div class="xl:col-start-8 2xl:col-start-9 xl:col-end-13 pl-10 sm:pl-20 md:pl-40 xl:pl-0 xl:min-h-[700px]  max-h-[900px] w-full mb-10 xl:mb-0" >

            <img src="{{$imgOne}}" alt="wnętrze hotelu" class="  h-full w-full object-cover rounded-lg" ></img>
        </div>

        <div class="xl:col-start-1 xl:col-end-7   max-h-[900px] w-full  xl:-mt-24 2xl:-mt-42  max:-mt-72 pr-10 sm:pr-20 md:pr-40 xl:pr-0">
            <img src="{{$imgTwo}}" alt="wnętrze hotelu" class=" rounded-lg  w-full object-cover h-full"></img>
        </div>
     
     <div class="xl:col-start-8 xl:col-end-11 mr-24  max-h-[500px] w-full mt-10 xl:mb-32 xl:mt-80 pl-16 sm:pl-32 md:pl-60 xl:pl-0 ">

         <img src="{{$imgThree}}" alt="wnętrze hotelu" class="rounded-lg  w-full  object-cover h-full "></img>
     </div>
 
    </x-grid>
</x-section>