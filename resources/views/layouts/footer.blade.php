<footer>
    <div class="bg-devarana-pearl w-full md:pb-10 pb-28 font-mulish md:min-h-[200px]">

        <div class="grid grid-cols-3 w-10/12 m-auto">
            <div class="md:col-span-1 col-span-3">
                <a href="{{ route('/') }}">
                    <picture>
                        <source srcset="{{ asset('img/logos/LogoDevarana.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/logos/LogoDevarana.png')}}" type="image/png"> 
                        <img src="{{ asset('img/logos/LogoDevarana.png')}}" alt="Inauguración Devarana" class="w-[200px] max-w-full m-auto md:ml-0">
                    </picture>
                </a>
                <p class="text-center md:text-left font-extralight text-devarana-blue">Ventas: <a href="tel:4428244444" class="hover:underline hover:decoration-2 underline-offset-1 font-medium">  (442) 824 4444</a></p>
               
            </div>
            <div class="text-devarana-blue text-center md:col-span-1 col-span-3 md:pt-32 py-10">
                <ul>
                    <li> <span class="font-extralight hover:no-underline">Corporativo: </span> <a href="tel:4424021073" class="hover:underline hover:decoration-2 underline-offset-1 font-medium"> (442) 402 1073</a></li>
                    <li> <span class="font-extralight hover:no-underline">Compras: </span> <a href="mailto:compras@devarana.mx" class="hover:underline hover:decoration-2 underline-offset-1 font-medium"> compras@devarana.mx</a></li>
                </ul>
            </div>
            <div class="relative md:col-span-1 col-span-3 py-2">
                <div class="grid grid-cols-12 content-end items-end mt-auto h-full">
                    <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank" class="hover:opacity-40 col-span-1 md:col-start-10 col-start-6 py-2"> <img src="{{ asset('img/icons/map.svg') }}" alt="" class="w-[20px] fill-devarana-blue"></a>
                    <a href="https://www.facebook.com/DevaranaResidences/" target="_blank" class="hover:opacity-40 col-span-1 py-2"> <img src="{{ asset('img/icons/facebook.svg') }}" alt="" class="w-[20px] fill-devarana-blue"></a>
                    <a href="https://www.instagram.com/devarana.mx/?hl=es" target="_blank" class="hover:opacity-40 col-span-1 py-2"> <img src="{{ asset('img/icons/instagram.svg') }}" alt="" class="w-[20px] fill-devarana-blue"></a>
                    <div class="col-span-12 text-right">
                        <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank" class="text-right hover:underline hover:decoration-2 underline-offset-1 align-bottom text-devarana-blue font-medium">Av. Valle de Acantha 88, Fracc. Zibatá, Sección Acantha, CP 76269, El Marqués, Querétaro.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-devarana-blue text-devarana-pearl w-full text-center inline-flex justify-center py-2 font-mulish font-medium tracking-wide">
        <p>Derechos reservados DEVARANA 2022  </p> 
        <p class="px-2"> | </p>
        <a href="{{ route('aviso-de-privacidad') }}">  Aviso de Privacidad</a>
    </div>  

    <div class="relative">
        {{-- <div class="fixed right-4 bottom-4 z-30"> --}}
            <div class="z-30 fixed bottom-[6rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-200 socialGroup">
                <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank">
                    <img src="{{ asset("img/icons/map.svg") }}" alt="" class="w-full p-5">
                </a>
            </div>
            <div class="z-30 fixed bottom-[11rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-300 socialGroup">
                <a href="https://www.facebook.com/DevaranaResidences/" target="_blank">
                    <img src="{{ asset("img/icons/facebook.svg") }}" alt="" class="w-full p-5">
                </a>
            </div>
            <div class="z-30 fixed bottom-[16rem] -right-96 w-16 h-16 bg-devarana-midnight rounded-full my-2 content-center transition-all duration-500 socialGroup">
                <a href="https://www.instagram.com/devarana.mx/?hl=es" target="_blank">
                    <img src="{{ asset("img/icons/instagram.svg") }}" alt="" class="w-full p-5">
                </a>
            </div>
            <button class="fixed right-4 bottom-[1rem] z-30 w-16 h-16 bg-devarana-midnight rounded-full my-2 flex content-center m-auto" id="social">
                {{-- <img src="{{ asset("img/logos/DevaranaIsotipo.png") }}" alt=""> --}}
                <p class="m-auto text-devarana-pearl text-sm">Síguenos</p>
            </button>                                                       
        {{-- </div> --}}
    </div>
</footer>