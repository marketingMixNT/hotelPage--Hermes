<x-layouts.default>

    @section('title', 'Kontakt - Tatry Grand Hotel')
    @section('description',
        'Odkryj luksus i komfort w Tatry Grand Hotel - Twoim idealnym schronieniu w sercu Zakopanego. Rezerwuj teraz!')

       
       <x-header.hero--secondary title="Kontakt" subtitle="lorem ipsum dolor sit amet" style="background-image: url('{{asset('assets/images/9.jpeg')}}')"/>



       <section class="px-10 xl:px-20 pb-20 pt-40 bg-bgPrimary relative">

        <p class="mx-20 font-primary font-normal text-fontPrimary xs:text-xl md:text-2xl xl:text-3xl max:text-4xl pt-12 max:pt-24 leading-snug tracking-wide mb-12 text-center xl:text-left md:opacity-0 fade-in">
            <span class="font-normal uppercase">Odkryj Urok Tatry Grand Hotelu</span>
            Zapraszamy do miejsca, gdzie każdy moment staje się niezapomnianą przygodą. Tatry Grand Hotel, położony w sercu malowniczych Tatr, jest synonimem luksusu, który harmonijnie współgra z górskim krajobrazem. Nasza oferta, od ekskluzywnych pokoi po mistrzowską kuchnię, została stworzona z myślą o tych, którzy szukają wyjątkowego wypoczynku w otoczeniu natury.
        </p>
        
    
            <x-grid class=" pt-20 xl:pt-32">
    
                <div class="xl:col-start-1 xl:col-end-8 rounded-lg min-h-[500px] xl:min-h-[1000px] w-full object-cover xl:ml-20">
        
                    <img src="{{asset('assets/images/17.jpeg')}}" alt="widok z hotelu Tatry Grand Hotel" class="rounded-lg h-full w-full object-cover"></img>
                </div>

                <div class="xl:col-start-9 xl:col-end-13 xl:mt-24 xl:ml-20 flex flex-col items-start gap-4 mb-10 xl:mb-0 mr-0 sm:mr-20 md:mr-56 xl:mr-0 md:opacity-0 fade-in">
                    <h2 class="heading">Odkryj Malownicze Widoki w  Tatry Grand Hotel</h2>
    <p class="text">
        Otoczony majestatem Tatr, Tatry Grand Hotel oferuje nie tylko nocleg, ale prawdziwe okno na przyrodę. Każdy widok z naszych okien to jak żywy obraz, zmieniający się wraz z porami roku. <span class="uppercase font-semibold">Góry przywołują ciszę i spokój,</span> a Zakopane zachęca swoim bogactwem kultury i historii. Zapraszamy, abyś doświadczył tego unikalnego połączenia natury z luksusem, gdzie każdy dzień jest inspiracją i niezapomnianą przygodą.
    </p>
    
                               {{-- <a href="#" class="link-dotted">Odkryj je wszystkie</a> --}}
                            </div>
        
                           
        
               
                
                        </x-grid>
    
    </section>

       @include('pages.restaurant.sections.8_map')
       

    </x-layouts.default>