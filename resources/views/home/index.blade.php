@php
    $metaTitle = "Home";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png" hidden="hidden">
        <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[65px]" > </x-logo-nav>
        {{-- <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav> --}}
    </x-nav>

    <div class="relative md:h-[100vh] h-[400px] overflow-hidden" id="header">
        <picture>
            {{-- <source srcset="{{ asset('img/home/DEVARANAVistas-espectaculares.webp') }}" type="image/webp"> --}}
            <source srcset="{{ asset('/img/home/DEVARANAVistas-espectaculares.jpeg') }}" type="image/jpeg">
            <img src="{{ asset("/img/home/DEVARANAVistas-espectaculares.jpeg") }}" alt="Atardecer Devarana" class="w-full transition duration-1000 absolute scale-110" id="bgHead">
        </picture>
        <picture>
            {{-- <source srcset="{{ asset('img/home/SomosDevarana.webp') }}" type="image/webp"> --}}
            <source srcset="{{ asset('img/home/SomosDevarana.png') }}" type="image/png">
                <img src="{{ asset("img/home/SomosDevarana.png") }}" alt="Devarana Oficinas" class="absolute transition duration-1000 top-[80px] w-full" id="bgBuilding">
        </picture>
    </div>

    <div id="quienes" class="lg:py-20 md:py-10 px-10 bg-devarana-pearl max-w-screen-2xl xl:m-auto">
        <div class="grid grid-cols-12 lg:gap-x-16">
            <div class="relative md:col-span-5 flex col-span-12">
                <h2 class="text-devarana-blue font-playfair text-5xl md:text-6xl lg:text-7xl xl:text-8xl md:px-10 flex text-left items-center justify-center lg:py-0 py-8 z-10 md:ml-auto md:w-96">Quiénes somos</h2>
            </div>
            <div class="md:col-span-7 col-span-12 items-center md:px-5">
                <h1 class="text-devarana-blue text-xl md:text-4xl py-3">DEVARANA <br> Empresa México-Holandesa</h1>
                <p class="md:w-5/6 md:pr-10 text-devarana-graph text-base py-2">Creamos proyectos inmobiliarios de primer nivel. Gracias a la dedicación, ética y visión a largo plazo. Logrando una calidad extraordinaria en diseño, construcción y acabados. </p>
                <div class="flex md:w-5/6 py-2 md:py-4">
                    <x-link href="{{route('quienes-somos')}}" class="sm:ml-auto sm:mx-0 mx-auto"> Saber más </x-link>
                </div>
            </div>
        </div>
    </div>

    <div id="nuestro" class="px-10 py-5 max-w-screen-2xl xl:m-auto">
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
        {{-- <p class="absolute text-4xl md:text-7xl lg:text-9xl uppercase text-transparent z-10  font-mulish opacity-50 top-[70%] text-center left-[50%] -translate-x-[50%] -translate-y-[50%] drop-shadow-lg"
                style=" -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: #fff;"> trayectoria  </p> --}}

        
       </div>
    </div>
    <h2 class="text-5xl md:text-7xl text-devarana-blue text-center pt-10"> Trayectoria </h2>
    <p class="text-base text-devarana-graph text-center py-10 px-4 max-w-[600px] w-full m-auto">Conoce más sobre nuestra historia de éxito, con más de 10 años de experiencia en el sector de inversión inmobiliaria, en la ciudad de Querétaro.</p>

    <div class="flex  md:py-4">
        <x-link href="{{ route('nuestra-trayectoria')}}" class="m-auto"> Nuestra trayectoria </x-link>
    </div>

    <div id="somos" class="px-10 md:py-16 py-6">
        <div class="grid grid-cols-2 gap-4 md:gap-10">
            <div class="col-span-2 md:col-span-1">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 md:col-span-10 bg-devarana-blue lg:min-h-[480px] md:min-h-[300px] flex">
                        <div class="flex md:py-10 py-4 relative m-auto">
                            <picture>
                                {{-- <source srcset="{{ asset('img/home/SOMOS-DEVARANA.webp') }}" type="image/webp"> --}}
                                <source srcset="{{ asset('img/home/SOMOS-DEVARANA.jpg') }}" type="image/jpeg">
                                <img src="{{ asset("img/home/SOMOS-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="-ml-4 md:ml-6 lg:ml-12 w-full">
                            </picture>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1 md:px-4 ">
                <div class="flex h-full">
                    <div class="mt-auto relative">
                        <div class="grid grid-cols-12">
                            <h3 class="text-devarana-graph  pb-8 md:pb-20 text-xl md:text-2xl col-span-12 md:col-span-10 lg:col-span-8 text-center md:text-left  font-playfair">Creadores, arquitectos <br/> y diseñadores de lo extraordinario</h3>
                        </div>
                        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 text-left bg-home-banner bg-cover bg-top md:bg-center bg-no-repeat lg:min-h-[100px]">
                            <div class="py-4 md:py-0 sliderShow bg-devarana-blue transition-all duration-1000 ease-in-out md:text-white text-devarana-blue">
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md">Great Place to Work</p>
                            </div>
                            <div class="py-4 md:py-0 sliderShow transition-all duration-1000 ease-in-out md:text-white text-devarana-blue relative">
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md">Empresa Socialmente Responsable</p>
                            </div>
                            <div class="py-4 md:py-0 sliderShow transition-all duration-1000 ease-in-out md:text-white text-devarana-blue">
                                <p class="px-2 lg:px-6 font-playfair py-4 drop-shadow-md ">Servicio Legendario <br> ISO-9001</p>
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
        <div class="grid md:grid-cols-5 grid-cols-3 relative">
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" alt="Diana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" alt="Abraham-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" alt="Mariana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" alt="Gregorio-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" alt="Diego-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" alt="Gus-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1 md:block hidden' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" alt="Miguel-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1 md:block hidden' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" alt="Pam-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1 md:block hidden' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" alt="Melissa-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" type="image/png">
                <img class='w-full md:col-span-1 md:block hidden' src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" alt="Luis-Devarana">
            </picture>
        </div>
        <div class="py-10">
            <div class="flex -my-32">
                <x-link href="{{ route('nuestro-equipo') }}" class="m-auto"> Conoce más </x-link>
            </div>
        </div>
    </div>


@endsection




@section('styles')
@endsection

@section("scripts")
    <script src="{{ asset('js/home/index.js') }}"></script>
@endsection
