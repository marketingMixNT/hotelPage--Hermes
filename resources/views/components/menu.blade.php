<div id="menu" class=" menu-close bg-bg fixed  top-0 bottom-0 right-0 left-0 xs
        :overflow-hidden z-50">
    <div class="modal">



        <div
            class="border border-[#ffffff70] rounded-lg flex justify-between items-center button  lg:px-4   lg:gap-3 hover:border-white duration-500 group z-50 absolute left-4 md:left-16 top-7">
            <div class="flex justify-center items-center ml-1 lg:ml-0 mt-1 ">

                <x-header.hamburger />
                <span class="uppercase text-fontWhite font-primary text-sm hidden lg:inline-block">Menu</span>
            </div>
            <span class="text-fontWhite hidden lg:inline-block">|</span>
            <div><a href=""class="link hidden lg:inline-block " style="margin-top:-1px">Rezerwacja</a>
            </div>

        </div>

        <div class="flex justify-between w-full h-[94%]">
            <div class="w-full lg:w-1/2 lg:border-r border-fontThird flex flex-col justify-center items-center">

                <!--NAV ITEMS-->
                <ul class=" flex justify-center items-center flex-col gap-4 ">

                    <x-menu_item href="{{route('rooms')}}" data-bg="/assets/menu/1.jpg">Pokoje</x-menu_item>
                    <x-menu_item href="{{route('restaurant')}}" data-bg="/assets/menu/2.jpg">Restauracja</x-menu_item>
                    <x-menu_item href="{{route('spa')}}" data-bg="/assets/menu/4.jpg">Spa</x-menu_item>
                    <x-menu_item href="{{route('attractions')}}" data-bg="/assets/menu/5.jpg">Atrakcje</x-menu_item>
                    <x-menu_item href="{{route('contact')}}" data-bg="/assets/menu/3.jpg">Kontakt</x-menu_item>
                </ul>

                <div class=" flex flex-col justify-center items-center mt-16 gap-1">


                    <div class="text-fontWhite font-text"><span class="font-semibold">E:</span> <a href="#"
                            class="text-sm  mt-1 hover:text-fontThird duration-500 lowercase">kontakt@tatrygrandhotel.pl</a>
                    </div>
                    <div class="text-fontWhite font-text"><span class="font-semibold">T:</span> <a href="#"
                            class="text-sm text-fontWhite  hover:text-fontThird duration-500">+48 123 456 789</a></div>

                    <div class="flex gap-3 mt-3">
                        <a href="#">

                            <img src="{{ asset('assets/icons/facebook.svg') }}" alt="" class="w-5">
                        </a>
                        <a href="#">

                            <img src="{{ asset('assets/icons/instagram.svg') }}" alt="" class="w-5">
                        </a>
                    </div>

                </div>
            </div>
            <div class="lg:w-1/2 hidden lg:flex justify-center items-center">
                <div id="test"
                    class=" w-[420px] h-[600px] rounded-t-full rounded-b-lg bg-cover" style="background-image: url('assets/menu/main.jpg');transition: background-image 0.5s ease-in-out;">

                </div>
            </div>

        </div>

    </div>
</div>
