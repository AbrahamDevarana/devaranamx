<header class="md:pb-0 pb-10">
    {{-- Regular Menu --}}
    <nav {{ $attributes->merge(['class' => 'fixed top-0 w-full hidden md:block transition-all duration-500  z-40']) }}  id="navigation">
        <div class="relative">
            <div class="md:w-10/12 m-auto py-3 flex">
                <ul class="list-none grid grid-cols-6 grid-flow-col text-center font-playfair m-auto w-full relative">
                    <a href="/" title="Home" {{ $attributes['hidden'] }} class="h-7 w-7 absolute -left-9 bottom-[22%]">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 690.2 536.1" style="enable-background:new 0 0 690.2 536.1;" xml:space="preserve" id="homeIcon" class="fill-devarana-blue sm:fill-devarana-pearl hover:opacity-40">
                            <g id="sNsvAO_00000016066314239023043860000010785574361992754585_">
                                <g>
                                    <path d="M578.6,392.4c0,44-0.2,87.9,0.2,131.9c0.1,9.3-3,11.9-12.1,11.8c-44.6-0.4-89.2-0.4-133.8,0c-8.7,0.1-11.6-2.8-11.5-11.5
                                        c0.4-28.2,0.4-56.4,0.1-84.6c-0.4-35.6-22.4-64.1-56.5-73.8c-45.5-12.9-93.9,21.1-95.7,68.3c-1.2,29.7-0.4,59.4-0.5,89.1
                                        c-0.1,11.9-0.4,12.2-12.3,12.2c-44.3,0-88.6-0.2-132.9,0.2c-9.2,0.1-11.9-2.8-11.9-11.9c0.3-87.9,0.3-175.9,0-263.8
                                        c0-7.5,2.7-12.2,8.5-16.7C192.9,187.4,265.4,131,337.8,74.4c5-3.9,8.9-4.9,14.3-0.6c73.3,57.4,146.7,114.6,220.2,171.7
                                        c5,3.9,6.3,8.2,6.3,14C578.5,303.8,578.6,348.1,578.6,392.4z"/>
                                    <path d="M216.5,47.9c0,12.7-0.1,25.5,0.1,38.2c0,2.5-1.3,6.1,1.9,7.3c2.3,0.8,4.2-1.9,6.1-3.4c33.3-26.2,66.6-52.6,100-78.8
                                        c19-15,23-14.8,41.8,0.1C469.5,92.8,572.7,174.4,675.9,256c3.1,2.4,6.1,5,8.8,7.9c6.6,7,7.3,17.1,1.9,24c-5,6.4-15.3,8.5-23.1,3.5
                                        c-8.9-5.7-17.1-12.6-25.4-19.1c-95.2-75-190.5-150.1-285.5-225.3c-5.8-4.6-9.5-3.9-14.9,0.4c-99.9,78.9-199.9,157.7-299.9,236.5
                                        c-2.4,1.9-4.8,3.8-7.2,5.5c-9.7,6.9-20.7,6-26.9-2c-6.2-8.2-4.4-19.1,4.8-26.5c17-13.7,34.2-27.1,51.3-40.7
                                        c26.2-20.7,52.2-41.5,78.6-61.9c5.9-4.6,8.3-9.3,8.3-16.8c-0.3-42.7-0.1-85.5-0.1-128.2c0-12.8,0-12.9,13.3-12.9
                                        c15.8,0,31.5,0.2,47.3-0.1c7.1-0.2,9.8,2.4,9.5,9.5C216.2,22.4,216.5,35.1,216.5,47.9z"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <li class="hidden md:flex m-auto drop-shadow-xl growLine headLink relative tracking-widest {{ request()->is('quienes-somos')? 'text-devarana-salmon after:bg-devarana-salmon' : 'after:bg-devarana-pearl' }}">
                        <a href="{{ route('quienes-somos') }}">Quiénes somos</a>
                    </li>
                    <li class="hidden md:flex m-auto drop-shadow-xl growLine headLink relative tracking-widest {{ request()->is('nuestro-equipo')? 'text-devarana-salmon after:bg-devarana-salmon' : 'after:bg-devarana-pearl' }}">
                        <a href="{{ route('nuestro-equipo') }}">Nuestro equipo</a>
                    </li>

                    <li class="hidden md:flex m-auto drop-shadow-xl hover:opacity-50 tracking-widest col-span-2">
                        <a href="{{ route('/') }}" class="after:bg-devarana-blue">
                            {{ $slot }}
                        </a>
                    </li>
                   
                    <li 
                        class="hidden md:flex m-auto drop-shadow-xl growLine headLink relative tracking-widest 
                        {{ request()->is('nuestra-trayectoria')? 'text-devarana-salmon after:bg-devarana-salmon' : 'after:bg-devarana-pearl' }} ">
                        <a href="{{ route('nuestra-trayectoria') }}">Nuestra trayectoria</a>
                    </li>
                    <li class="hidden md:flex m-auto drop-shadow-xl growLine headLink relative tracking-widest 
                        {{ request()->is('contacto')? 'text-devarana-salmon after:bg-devarana-salmon' : 'after:bg-devarana-pearl' }} ">
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Responsive Menu --}}
    <nav class="md:hidden hidden mobile-menu fixed w-full bg-devarana-blue z-50 transition-all duration-300 ease-in-out opacity-0 shadow-lg h-screen overflow-hidden">
        <div class="flex h-full py-10">
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
        <div class="md:hidden fixed z-[10000] w-full bg-devarana-blue mb-5 ">
            <div class="grid grid-cols-12">
                <div class="col-span-10 flex col-start-2">
                    <a class="text-center m-auto" href="/"><img src="{{ asset("img/logos/LogotipoDevarana_blanco.png") }}" alt="Devarana Logotipo" class="w-[150px] py-2" id="devaranaLogoBlanco"></a>
                </div>
                <div class="col-span-1 py-2">        
                    <button class="outline-none mobile-menu-button ml-auto active:rotate-270 active:scale-50 focus:outline-0 transition-all ease-in-out duration-500" id="btnResponsiveMenu">
                        <img id="imgOpen" src="{{ asset('img/icons/burger.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400">
                        <img id="imgClose" src="{{ asset('img/icons/cross.svg') }}" alt="burger" height="30px" width="30px" class="text-gray-400 hidden">
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
