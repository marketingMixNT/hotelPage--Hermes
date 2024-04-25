<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

        @include('pages.rooms.sections.hero-header')
        @include('pages.rooms.sections.description')
        @include('pages.rooms.sections.all-rooms')
       

    </x-layouts.default>