<header>
    {{-- Regular Menu --}}
    <nav {{ $attributes->merge(['class' => 'fixed w-full hidden md:block transition-all duration-500  z-40']) }}  id="navigation">
        <div class="relative">
            <div class="md:w-10/12 m-auto py-3 flex">
                <ul class="list-none grid grid-cols-6 grid-flow-col text-center font-playfair m-auto w-full relative">
                    <li class="hidden md:flex m-auto drop-shadow-lg  relative">
                        <a href="/" title="Home" {{ $attributes['hidden'] }}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 absolute -left-24  {{ $attributes['contacto']? 'fill-devarana-midnight' : 'fill-devarana-pearl' }}" viewBox="0 0 24 24" id="homeIcon">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </a>
                        <a href="{{ route('quienes-somos') }}" class="relative growLine headLink {{  !$attributes['contacto']? "after:bg-devarana-pearl": "after:bg-devarana-blue" }}  tracking-widest {{ request()->is('quienes-somos')? 'text-devarana-blue' : '' }}">Quiénes somos</a>
                    </li>

                    <li class="hidden md:flex m-auto drop-shadow-lg growLine headLink {{  !$attributes['contacto']? "after:bg-devarana-pearl": "after:bg-devarana-blue" }} tracking-widest {{ request()->is('nuestro-equipo')? 'text-devarana-blue' : '' }}"><a href="{{ route('nuestro-equipo') }}">Nuestro equipo</a></li>
                    <li class="hidden md:flex m-auto drop-shadow-lg hover:opacity-50 tracking-widest col-span-2">
                        <a href="{{ route('/') }}" class="after:bg-devarana-blue">
                            {{ $slot }}
                        </a>
                    </li>
                    <li class="hidden md:flex m-auto drop-shadow-lg growLine headLink {{  !$attributes['contacto']? "after:bg-devarana-pearl": "after:bg-devarana-blue" }} relative tracking-widest {{ request()->is('nuestra-trayectoria')? 'text-devarana-blue' : '' }}"><a href="{{ route('nuestra-trayectoria') }}">Nuestra trayectoria</a></li>
                    <li class="hidden md:flex m-auto drop-shadow-lg growLine headLink {{  !$attributes['contacto']? "after:bg-devarana-pearl": "after:bg-devarana-blue" }} relative tracking-widest {{ request()->is('contacto')? 'text-devarana-blue' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Responsive Menu --}}
    <nav class="md:hidden hidden mobile-menu fixed w-full bg-devarana-blue z-50 transition-all duration-300 ease-in-out opacity-0 shadow-lg h-screen overflow-hidden">
        <div class="flex py-5">
            <a class="m-auto" href="/"><img src="{{ asset("img/logos/Isotipo_blanco.png") }}" alt="Devarana Logotipo" class="w-[50px]" id="devaranaLogoBlanco"></a>
        </div>
        <div class="flex h-full">
            <ul class="text-devarana-pearl px-3 w-full my-10 text-center font-playfair">
                <a href="{{ route('/') }}" class="hover:underline"> <li class="m-auto py-4 text-3xl"> Home </li> </a>
                <a href="{{ route('quienes-somos') }}" class="hover:underline"> <li class="m-auto py-4 text-3xl"> Quiénes somos </li> </a>
                <a href="{{ route('nuestro-equipo') }}" class="hover:underline"> <li class="m-auto py-4 text-3xl"> Nuestro equipo </li> </a>
                <a href="{{ route('nuestra-trayectoria') }}" class="hover:underline"> <li class="m-auto py-4 text-3xl"> Nuestra trayectoria </li> </a>
                <a href="{{ route('contacto') }}" class="hover:underline"> <li class="m-auto py-4 text-3xl"> Contacto </li> </a>
            </ul>
        </div>
    </nav>
    <div class="relative">
        <div class="md:hidden flex fixed top-2 right-1 z-[10000] ">
            <button class="outline-none mobile-menu-button ml-auto p-5 shadow-[0_0_5px_1px_rgba(0,0,0,0.2)]" id="btnResponsiveMenu">
                <img id="imgOpen" src="{{ asset('img/icons/burger.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400">
                <img id="imgClose" src="{{ asset('img/icons/cross.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400 hidden">
            </button>
        </div>
    </div>
</header>
