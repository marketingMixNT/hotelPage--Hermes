<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--Title-->
    <title>@yield('title', 'Tatrzański Raj')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Fonts-->
  @include('partials.fonts')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden ">
    

        <x-preloader/>
        <x-header.main/>
        <x-menu/>
        <main >
            
            {{ $slot }}

            
        </main>

        <x-mobile_buttons/>
        <x-footer.main/>


    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</body>

</html>
