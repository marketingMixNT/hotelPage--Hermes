<x-layouts.default>

    @section('title', 'SPA & Wellness - Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

       
       <x-header.hero--secondary title="SPA & Wellness" subtitle="lorem ipsum dolor sit amet" style="background-image: url('{{asset('assets/images/spa/3.jpeg')}}')"/>

     @include('pages.spa.sections.1_about')
     @include('pages.spa.sections.2_description')
     @include('pages.spa.sections.3_opening')
     @include('pages.spa.sections.4_hero')
     @include('pages.spa.sections.5_sauna')

       

    </x-layouts.default>