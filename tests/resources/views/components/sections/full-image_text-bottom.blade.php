


@props(['class' =>'','subtitle'=>'','title'=>''])

<section
    class="px-10 xl:px-20 2xl:px-40  py-10  h-[90vh] 
    
    {{$class}}

    bg-cover bg-center bg-fixed relative bg-gray-300 bg-blend-multiply flex justify-end items-end">


    <div class="">
        <p class="xs:text-xl md:text-2xl xl:text-3xl text-fontWhite font-light font-text leading-normal tracking-wide"> <span
                class="uppercase font-normal text-base mr-8">{{$subtitle}}
            </span> <span class="font-normal uppercase">{{$title}}</span>
           {{$slot}}</p>
    </div>
</section>
