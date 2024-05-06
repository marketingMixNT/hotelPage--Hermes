@props(['href'])


<a href="{{ $href }}" class="link-btn group ">
 {{$slot}} <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt=""
        class="w-8 z-10 group-hover:translate-x-2 duration-500"></a>
</a>
