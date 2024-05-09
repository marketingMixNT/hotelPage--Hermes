<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

        @include('pages.home.sections.1_hero-header')
        @include('pages.home.sections.2_about')
        @include('pages.home.sections.3_hero-second')
        @include('pages.home.sections.4_apartments-description')
        @include('pages.home.sections.5_apartments-swiper')
        @include('pages.home.sections.6_restaurant-menu')
        @include('pages.home.sections.7_restaurant-bar')
        @include('pages.home.sections.8_pool')
        @include('pages.home.sections.9_contact')

    </x-layouts.default>
