<x-layouts.default>

    @section('title', 'Królewski Szczyt')
    @section('description',
        'Odkryj luksus i komfort w Królewskim Szczycie - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

        @include('pages.home.sections.hero-header')
        @include('pages.home.sections.about')
        @include('pages.home.sections.hero-second')
        @include('pages.home.sections.description')
        @include('pages.home.sections.cottages')
        @include('pages.home.sections.restaurant-menu')
        @include('pages.home.sections.restaurant-bar')

    </x-layouts.default>
