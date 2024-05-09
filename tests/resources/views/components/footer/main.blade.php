<footer class="bg-secondary-400 bg-fixed  pt-16 pb-6 ">
    <div class="px-10 xl:px-20  mx-auto w-full ">

        <div class="text-center mb-10 lg:mb-20">

            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-24 mx-auto">
            <div class="flex flex-col gap-1 mt-4">

                <span class="font-primary text-fontThird">Tatry Grand Hotel</span>
                <span class="font-primary text-fontThird">Zakopiańska 45, Zakopane <a href="#">(mapa)</a></span>
            </div>
        </div>

        <div class=" flex flex-col justify-center items-center mb-10 lg:mb-0 lg:hidden">

            <h2 class="font-primary text-fontWhite text-xl uppercase mb-4">Kontakt</h2>
            <div class="text-fontWhite font-text"><span class="font-semibold">E:</span> <a href="#"
                    class="text-sm mt-1 hover:text-fontThird duration-500 lowercase">kontakt@tatrygrandhotel.pl</a>
            </div>
            <div class="text-fontWhite font-text"><span class="font-semibold">T:</span> <a href="#"
                    class="link link">+48 123 456 789</a></div>

            <div class="flex gap-3 mt-3">
                <a href="#">

                    <img src="{{ asset('assets/icons/facebook.svg') }}" alt="" class="w-5">
                </a>
                <a href="#">

                    <img src="{{ asset('assets/icons/instagram.svg') }}" alt="" class="w-5">
                </a>
            </div>

        </div>

        <div class="flex flex-col lg:flex-row gap-4 lg:gap-0 justify-between items-center">

            <div>
                <ul class="flex gap-4">
                    <li><a href="#" class="link">Rezerwacja</a></li>
                    <li><a href="#" class="link">Polityka Prywatności</a></li>
                    <li><a href="#" class="link">Regulamin</a></li>

                </ul>
            </div>



            <div class="flex flex-col sm:flex-row  justify-center items-center gap-3 sm:gap-6 text-fontThird mt-2 sm:mt-0">
                <span class="font-primary">© <span class="footerYear">2024</span> Tatry Grand Hotel</span>
                <a href="#" class="flex justify-center items-center gap-2">Wykonanie<img
                        src="{{ asset('assets/marketingmix.svg') }}" alt="" class="w-24"></a>
            </div>

            
        </div>
    </div>

    <hr class="my-5 border-fontThird hidden lg:block">
    <div class="px-10 xl:px-20 justify-between hidden lg:flex">


        <div class="border-r border-fontThird py-32 w-1/2 flex justify-center items-center">

            <ul class="space-y-3">
                <li><a href="#" class="font-primary text-fontWhite text-3xl uppercase hover:text-fontThird duration-500">Item 1</a></li>
                <li><a href="#" class="font-primary text-fontWhite text-3xl uppercase hover:text-fontThird duration-500">Item 2</a></li>
                <li><a href="#" class="font-primary text-fontWhite text-3xl uppercase hover:text-fontThird duration-500">Item 3</a></li>
                <li><a href="#" class="font-primary text-fontWhite text-3xl uppercase hover:text-fontThird duration-500">Item 4</a></li>
                <li><a href="#" class="font-primary text-fontWhite text-3xl uppercase hover:text-fontThird duration-500">Item 5</a></li>
            </ul>
        </div>
        <div class="py-48 w-1/2 flex flex-col justify-center items-center">

            <h2 class="font-primary text-fontWhite text-3xl uppercase mb-4">Kontakt</h2>
            <div class="text-fontWhite font-text"><span class="font-semibold">E:</span> <a href="#"
                    class="text-sm mt-1 hover:text-fontThird duration-500 lowercase">kontakt@tatrygrandhotel.pl</a>
            </div>
            <div class="text-fontWhite font-text"><span class="font-semibold">T:</span> <a href="#"
                    class="link link">+48 123 456 789</a></div>

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
</footer>
