@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png" hidden="hidden">    
        {{-- <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav> --}}
        <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
    </x-nav>

    <div class="relative md:h-[100vh] h-[400px] overflow-hidden" id="header">
        <picture>
            <source srcset="{{ asset('img/home/Atardecer-render.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/home/Atardecer-render.png') }}" type="image/png">
            <img src="{{ asset("img/home/Atardecer-render.png") }}" alt="Atardecer Devarana" class="w-full transition duration-1000 absolute scale-110" id="bgHead">
        </picture>
        <picture>
            <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/home/Devarana_Fachada.png') }}" type="image/png">
                <img src="{{ asset("img/home/Devarana_Fachada.png") }}" alt="Devarana Oficinas" class="absolute transition duration-1000 top-[80px]" id="bgBuilding">
        </picture>
        
    </div>

    <div id="quienes" class="lg:py-20 md:py-10 px-10 bg-devarana-pearl">
        <div class="grid grid-cols-3">
            <div class="relative md:col-span-1 flex col-span-3">
                <h1 class="text-devarana-pink font-playfair text-5xl flex items-center justify-center w-full lg:py-0 py-10">Quiénes somos</h1>
                <div class="w-full inline-flex absolute text-4xl md:text-5xl lg:text-8xl uppercase top-5 right-0 bottom-0 lg:-top-5 lg:left-0 lg:right-20 lg:bottom-0 -z-10 text-left text-devarana-pearl stroke-black font-mulish opacity-40"
                style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:#ffffff00; -webkit-text-fill-color:#C4C4C4;"> quiénes somos </div>
            </div>
            <div class="md:col-span-2 col-span-3">
                <p class="md:w-5/6 md:pr-10 text-devarana-graph text-base">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class="flex md:w-5/6 py-2 md:py-4">
                    <x-link href="/" class="ml-auto"> Saber más </x-link>
                </div>
            </div>
        </div>
    </div>

    <div id="nuestro" class="px-10 py-5">
       <div class="flex justify-between relative">
        <picture>
            {{-- <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp"> --}}
            <source srcset="{{ asset('img/home/HIGH-GARDENS-DEVARANA.jpg') }}" type="image/jpeg">
                <img src="{{ asset("img/home/HIGH-GARDENS-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="mt-4 px-2 md:px-4 md:mt-16 w-full">
        </picture>
        <picture>
            {{-- <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp"> --}}
            <source srcset="{{ asset('img/home/GRAND-MAYRAN-DEVARANA.jpg') }}" type="image/jpeg">
                <img src="{{ asset("img/home/GRAND-MAYRAN-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="px-2 md:px-4 w-full">
        </picture>
        <picture>
            {{-- <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp"> --}}
            <source srcset="{{ asset('img/home/GrandMayran-Devarana-CASA.jpg') }}" type="image/png">
                <img src="{{ asset("img/home/GrandMayran-Devarana-CASA.jpg") }}" alt="Devarana Oficinas" class="mt-6 px-2 md:px-4 md:mt-28 w-full">
        </picture>
        <div class="absolute text-4xl md:text-5xl lg:text-6xl uppercase  z-10 text-devarana-pearl stroke-black font-mulish opacity-50 top-[70%] text-center left-[50%] -translate-x-[50%] -translate-y-[50%] drop-shadow-lg"
                style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: white; -webkit-text-fill-color: #ffffff00;"> trayectoria  </div>
       </div>
    </div>

    <h2 class="text-base text-devarana-graph text-center py-4 px-4 max-w-[800px] w-full m-auto">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. “</h2>

    <div class="flex  md:py-4">
        <x-link href="{{ route('nuestra-trayectoria')}}" class="m-auto"> Nuestra trayectoria </x-link>
    </div>

    <div id="somos" class="px-10 md:py-16 py-6">
        <div class="grid grid-cols-2 gap-4 md:gap-10">
            <div class="col-span-2 md:col-span-1">
                <div class="grid grid-cols-12">
                    <div class="col-span-1 md:bg-devarana-blue relative">
                        <div class="absolute top-[45%] lg:-left-[175px] md:-left-[100px] -rotate-90 hidden md:block">
                            <p class=" uppercase font-mulish text-transparent lg:text-5xl md:text-3xl text-2xl"
                                style="-webkit-text-stroke-width: .5px; -webkit-text-stroke-color:#ffffff00; -webkit-text-fill-color:#C4C4C4;">
                                Orgullosamente
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-span-10 bg-devarana-blue lg:min-h-[480px] md:min-h-[300px] flex">
                        <div class="flex py-10 relative m-auto">
                            <picture>
                                {{-- <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp"> --}}
                                <source srcset="{{ asset('img/home/SOMOS-DEVARANA.jpg') }}" type="image/jpeg">
                                <img src="{{ asset("img/home/SOMOS-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="-ml-6 md:ml-8 lg:ml-16 w-full">
                            </picture>
                            
                        </div>
                    </div>
                    <div class="col-span-1 relative">
                        <div class="absolute top-[45%] -right-[100px] -rotate-90 md:hidden block">
                            <p class=" uppercase font-mulish text-transparent lg:text-5xl md:text-3xl text-2xl"
                                style="-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:#C4C4C4; -webkit-text-fill-color: #ffffff00;">
                                Orgullosamente
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-span-2 md:col-span-1 md:px-4 ">
                <div class="flex h-full">
                    <div class="mt-auto ">
                        <h3 class="text-devarana-graph py-6 text-2xl md:w-4/6 font-playfair">Somos creadores, arquitectos y diseñadores de lo extraordinario</h3>
                        <div class="grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4 text-left bg-home-banner bg-cover bg-top md:bg-center bg-no-repeat lg:min-h-[100px]">
                            <div class="sliderShow bg-devarana-blue transition-all duration-1000 ease-in-out md:text-white text-devarana-blue">
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md text-xs md:text-[16px]">Great Place to Work</p>
                            </div>
                            <div class="sliderShow transition-all duration-1000 ease-in-out md:text-white text-devarana-blue relative">
                                <div class="absolute md:hidden w-full border-x-2 h-11 top-[50%] translate-y-[-50%]"></div>
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md text-xs md:text-[16px]">Empresa Socialmente Responsable</p>
                            </div>
                            <div class="sliderShow transition-all duration-1000 ease-in-out md:text-white text-devarana-blue">
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md  text-xs md:text-[16px]">Servicio Legendario ISO 9001</p>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        
    </script>

    <div id="equipo">
        <div class="grid md:grid-cols-5 grid-cols-2 relative">
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Diana-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Diana-web.png') }}" type="image/png">
                <img class='md:order-1 order-1' src="{{ asset('img/home/colaboradores/Diana-web.png') }}" alt="Diana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Abraham-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Abraham-Web.png') }}" type="image/png">
                <img class='md:order-2 order-3' src="{{ asset('img/home/colaboradores/Abraham-Web.png') }}" alt="Abraham-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Mariana-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Mariana-Web.png') }}" type="image/png">
                <img class='md:order-3 order-4' src="{{ asset('img/home/colaboradores/Mariana-Web.png') }}" alt="Mariana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Gregorio-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Gregorio-web.png') }}" type="image/png">
                <img class='md:order-4 order-2' src="{{ asset('img/home/colaboradores/Gregorio-web.png') }}" alt="Gregorio-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Diego-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Diego-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-5' src="{{ asset('img/home/colaboradores/Diego-web.png') }}" alt="Diego-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Gus-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Gus-Web.png') }}" type="image/png">
                <img class='md:block hidden md:order-6' src="{{ asset('img/home/colaboradores/Gus-Web.png') }}" alt="Gus-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Miguel-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Miguel-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-7' src="{{ asset('img/home/colaboradores/Miguel-web.png') }}" alt="Miguel-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Pam-WEB.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Pam-WEB.png') }}" type="image/png">
                <img class='md:block hidden md:order-8' src="{{ asset('img/home/colaboradores/Pam-WEB.png') }}" alt="Pam-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Melissa-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Melissa-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-9' src="{{ asset('img/home/colaboradores/Melissa-web.png') }}" alt="Melissa-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Luis-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Luis-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-10' src="{{ asset('img/home/colaboradores/Luis-web.png') }}" alt="Luis-Devarana">
            </picture>
                <div class="absolute top-0 left-0 right-0 bottom-0 flex">
                    <img src="{{ asset("img/home/NuestroEquipo.svg") }}" alt="nuestro_equipo" class="w-full m-auto">
                </div>
        </div>
        <div class="flex -my-16 mb-0">
            <x-link href="/" class="m-auto"> Conoce más </x-link>
        </div>
    </div>
    
   
@endsection




@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endsection
    
    @section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home/index.js') }}"></script>
    
@endsection