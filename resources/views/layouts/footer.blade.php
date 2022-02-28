<footer>
    <div class="bg-devarana-gray w-full md:pb-10 pb-28 py-10  font-mulish  text-base">

        <div class="grid grid-cols-3 w-10/12 m-auto">
            <div class="md:col-span-1 col-span-3">
                <a href="{{ route('/') }}">
                    {{-- <img src="{{ asset('img/logos/Logotipo Devarana_blanco.png') }}" alt="Devarana Logo Blanco" class=""> --}}
                    <picture>
                        <source srcset="{{ asset('img/logos/LogotipoDevarana_blanco.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/logos/LogotipoDevarana_blanco.png')}}" type="image/png"> 
                        <img src="{{ asset('img/logos/LogotipoDevarana_blanco.png')}}" alt="Inauguración Devarana" class="w-[250px] max-w-full m-auto">
                    </picture>
                </a>
            </div>
            <div class="text-devarana-pearl text-center md:col-span-1 col-span-3">
                <ul>
                    <li><p>Ventas</p></li>
                    <li><a href="tel:4424026197" class="hover:underline hover:decoration-2 underline-offset-1">(442) 402 6197</a></li>
                    <li><a href="tel:4428244444" class="hover:underline hover:decoration-2 underline-offset-1">(442) 824 4444</a></li>
                    <li class="pt-5"><p>Corporativo</p></li>
                    <li><a href="tel:4424021073" class="hover:underline hover:decoration-2 underline-offset-1">(442) 402 1073</a></li>
                    <li class="pt-5"><p>Compras</p></li>
                    <li><a href="mailto:compras@devarana.mx" class="hover:underline hover:decoration-2 underline-offset-1">compras@devarana.mx</a></li>
                </ul>
            </div>

            <div class="relative md:col-span-1 col-span-3 py-2">
                <div class="md:absolute bottom-0 right-0 block text-right">
                    <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank" class="align-bottom text-devarana-pearl">Av. Valle de Acantha 88, Fracc. Zibatá, Sección Acantha, CP 76269, El Marqués, Querétaro.</a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative">
        {{-- <div class="fixed right-4 bottom-4 z-30"> --}}
            <div class="z-30 fixed bottom-[6rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-200 socialGroup">
            </div>
            <div class="z-30 fixed bottom-[11rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-300 socialGroup">
            </div>
            <div class="z-30 fixed bottom-[16rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-500 socialGroup">
            </div>
            <div class="z-30 fixed bottom-[21rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-700 socialGroup">
            </div>
            <div class="z-30 fixed bottom-[26rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-1000 socialGroup">
            </div>
            <button class="fixed right-4 bottom-[1rem] z-30 w-16 h-16 bg-devarana-midnight rounded-full my-2 flex content-center m-auto" id="social">
                <p class="m-auto text-devarana-pearl">Social</p>
            </button>                                                       
        {{-- </div> --}}
    </div>
</footer>