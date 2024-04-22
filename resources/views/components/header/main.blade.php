<header id="header"
    class="w-full flex justify-between items-center fixed left-0 top-0 right-0 z-40 py-6 px-2 xs:px-6 xl:px-16 duration-300 ">

    {{-- left side --}}

    <div
        class="border border-[#ffffff70] rounded-lg flex justify-between items-center button relative lg:px-4   lg:gap-3 hover:border-white duration-500 group">
        <div class="flex justify-center items-center ml-1 lg:ml-0 mt-1 ">

            <x-header.hamburger />
            <span class="uppercase text-fontWhite font-primary text-sm hidden lg:inline-block " >Menu</span>
        </div>
        <span class="text-fontWhite hidden lg:inline-block">|</span>
        <div><a
                href=""class="link hidden lg:inline-block " style="margin-top:-1px">Rezerwacja</a>
        </div>

    </div>



    {{-- logo center --}}
    <a href="#"><img src="{{ asset('assets/logo.png') }}" alt="logo"
            class="w-20 md:w-24 2xl:w-28  duration-500 absolute top-6 md:top-3 left-1/2 transform -translate-x-1/2"></a>
    <div>

        {{-- right side --}}
        <div class="hidden lg:flex justify-between items-center gap-3 ">
            <a href="#" class="link">kontakt</a>

            <span class="text-fontWhite">|</span>
            <div class="mt-1 flex gap-2">
                <a href="#"><img src="{{ asset('assets/icons/facebook.svg') }}" alt="facebook"
                        class="w-5 hover:scale-95 duration-500 mb-1"></a>
                <a href="#"><img src="{{ asset('assets/icons/instagram.svg') }}" alt="instagram"
                        class="w-5 hover:scale-95 duration-500 mb-1"></a>

            </div>
        </div>
        <div class="lg:hidden flex justify-between items-center gap-3 ">
            <a href="#" class="link mt-1">Rezerwacja</a>
        </div>



    </div>

</header>
