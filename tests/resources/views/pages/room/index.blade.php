<x-layouts.default>

    @section('title', 'Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

        
@include('pages.room.sections.first-section')
@include('pages.room.sections.description')
@include('pages.room.sections.hero')
@include('pages.room.sections.description-second')
@include('pages.room.sections.other-rooms')

    </x-layouts.default>