<header>
    {{-- Regular Menu --}}
    <nav {{ $attributes->merge(['class' => 'fixed w-full hidden md:block transition-all duration-500  z-40']) }}  id="navigation">
        <div class="relative">
            <div class="md:w-8/12 m-auto py-3 flex">
                <ul class="list-none grid grid-cols-6 grid-flow-col text-center font-mulish m-auto w-full relative">
                    <li class="hidden md:flex m-auto drop-shadow-lmd  relative">
                        <a href="/" title="Home" {{ $attributes['hidden'] }}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 absolute -left-24 fill-devarana-pearl" viewBox="0 0 24 24" id="homeIcon">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </a>
                        <a href="{{ route('quienes-somos') }}" class="hover:underline hover:decoration-2 underline-offset-1">Quiénes somos</a>
                    </li>
                    <li class="hidden md:flex m-auto drop-shadow-lmd hover:underline hover:decoration-2 underline-offset-1"><a href="{{ route('nuestra-trayectoria') }}">Nuestra trayectoria</a></li>
                    <li class="hidden md:flex m-auto drop-shadow-lmd hover:underline hover:decoration-2 underline-offset-1 col-span-2"> 
                        <a href="{{ route('/') }}">
                            {{ $slot }}
                        </a>
                    </li>
                    <li class="hidden md:flex m-auto drop-shadow-lmd hover:underline hover:decoration-2 underline-offset-1"><a href="{{ route('nuestro-equipo') }}">Nuestro Equipo</a></li>
                    <li class="hidden md:flex m-auto drop-shadow-lmd hover:underline hover:decoration-2 underline-offset-1"><a href="{{ route('contacto') }}">Contacto</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>   
    
    {{-- Responsive Menu --}}
    <nav class="md:hidden hidden mobile-menu fixed w-full bg-devarana-midnight z-40 transition-all duration-300 ease-in-out opacity-0 shadow-lg h-screen overflow-hidden">
        <div class="flex py-2">
            <a class="m-auto" href="/"><img src="{{ asset("img/logos/Isotipo_blanco.png") }}" alt="Devarana Logotipo" class="w-[50px]" id="devaranaLogoBlanco"></a>
        </div>
        <div class="flex h-full">
            <ul class="text-devarana-pearl  p-3 w-full m-auto text-center">
                <a href="{{ route('/') }}" class="text-2xl hover:underline"> <li class="m-auto py-4"> Home </li> </a>
                <a href="{{ route('quienes-somos') }}" class="text-2xl hover:underline"> <li class="m-auto py-4"> Quiénes somos </li> </a>
                <a href="{{ route('nuestra-trayectoria') }}" class="text-2xl hover:underline"> <li class="m-auto py-4"> Nuestra trayectoria </li> </a>
                <a href="{{ route('nuestro-equipo') }}" class="text-2xl hover:underline"> <li class="m-auto py-4"> Nuestro Equipo </li> </a>
                <a href="{{ route('contacto') }}" class="text-2xl hover:underline"> <li class="m-auto py-4"> Contacto </li> </a>
            </ul>
        </div>
    </nav>
    <div class="relative">
        <div class="md:hidden flex fixed top-2 right-1 z-50 ">
            <button class="outline-none mobile-menu-button ml-auto p-5 shadow-lg" id="btnResponsiveMenu">
                <img id="imgOpen" src="{{ asset('img/icons/burger.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400">
                <img id="imgClose" src="{{ asset('img/icons/cross.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400 hidden">
            </button>
        </div>
    </div>
</header>