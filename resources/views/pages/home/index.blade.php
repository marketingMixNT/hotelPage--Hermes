<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

        @include('pages.home.sections.hero-header')
        @include('pages.home.sections.about')
        @include('pages.home.sections.hero-second')
        @include('pages.home.sections.apartments-description')
        @include('pages.home.sections.apartments-swiper')
        @include('pages.home.sections.restaurant-menu')
        @include('pages.home.sections.restaurant-bar')

    </x-layouts.default>
