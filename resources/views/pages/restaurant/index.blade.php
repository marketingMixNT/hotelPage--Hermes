<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

       
       <x-header.hero--secondary title="Restauracja" subtitle="lorem ipsum dolor sit amet" />

     @include('pages.restaurant.sections.1_section')
     @include('pages.restaurant.sections.2_section')
     @include('pages.restaurant.sections.3_section')
     @include('pages.restaurant.sections.4_section')
     @include('pages.restaurant.sections.5_section')
     @include('pages.restaurant.sections.6_section')
     @include('pages.restaurant.sections.7_section')
     @include('pages.restaurant.sections.8_section')
       

    </x-layouts.default>