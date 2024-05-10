<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

       
       <x-header.hero--secondary title="Restauracja" subtitle="Smakuj życie w każdym kęsie" style="background-image: url('{{asset('assets/images/restaurant/1.jpeg')}}')"/>

     @include('pages.restaurant.sections.1_about')
     @include('pages.restaurant.sections.2_menu-opening')
     @include('pages.restaurant.sections.3_hero-opinion')
     @include('pages.restaurant.sections.4_chef')
     @include('pages.restaurant.sections.5_inside')
     @include('pages.restaurant.sections.6_ingredients')
     @include('pages.restaurant.sections.7_bar')
     @include('pages.restaurant.sections.8_map')
       

    </x-layouts.default>