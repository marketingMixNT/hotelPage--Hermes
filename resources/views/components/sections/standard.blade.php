@props(['sectionClasses'])


<section class="px-10 xl:px-20 2xl:px-40 pt-10 sm:pt-20  2xl:pt-40 {{ $sectionClasses }}">


    <div class="grid xl:grid-cols-12">

        {{ $slot }}



    </div>
</section>
