<x-layouts.default>

    @section('title', 'Górski Azyl')
    @section('description',
        'Odkryj Górski Azyl – Twoje idealne miejsce na wypoczynek w sercu gór. Ciesz się ciszą,
        przyrodą i komfortem naszego domku. Idealny na rodzinne wakacje lub romantyczny wyjazd.')

        @include('pages.home.sections.hero')
        @include('pages.home.sections.about')
        @include('pages.home.sections.hero-second')
        @include('pages.home.sections.description')
        @include('pages.home.sections.cottages')

    </x-layouts.default>
