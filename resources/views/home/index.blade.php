@php
    $metaTitle = "Home";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png" hidden="hidden">
        <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
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
                <h2 class="text-devarana-blue font-playfair text-5xl md:text-6xl lg:text-7xl xl:text-8xl md:px-10 flex text-left items-center justify-center lg:py-0 py-8 z-10 md:ml-12 ">Quiénes somos</h2>
            </div>
            <div class="md:col-span-7 col-span-12 items-center md:px-5">
                <h1 class="text-devarana-graph text-xl md:text-4xl py-3">DEVARANA <br> Empresa México-Holandesa</h1>
                <p class=" md:pr-10 text-devarana-graph text-base py-2">Creamos proyectos inmobiliarios de primer nivel. Gracias a la dedicación, ética y visión a largo plazo. Logrando una calidad extraordinaria en diseño, construcción y acabados. </p>
                <div class="flex  py-2 md:py-4">
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

    <div id="somos" class="md:py-16 py-6 max-w-screen-2xl mx-auto px-10">
        <div class="relative">
            <div class="my-auto py-5 z-10 grid grid-cols-12">
                <div class="col-span-12 md:col-span-10 relative">
                    <picture>
                        {{-- <source srcset="{{ asset('img/home/SOMOS-DEVARANA.webp') }}" type="image/webp"> --}}
                        <source srcset="{{ asset('img/home/SOMOS-DEVARANA.jpg') }}" type="image/jpeg">
                        <img src="{{ asset("img/home/SOMOS-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="md:px-10 drop-shadow-md object-cover">
                    </picture>
                    <p class="absolute top-12 md:top-24 left-2/4 right-2/4 bottom-0 -translate-x-2/4 max-w-[600px] text-center w-full text-devarana-pearl text-base md:text-3xl font-playfair drop-shadow-[0px_4px_8px_rgba(0,0,0,0.8)]">Creadores, arquitectos y <br> diseñadores de lo extraordinario</p>
                </div>
                <div class="col-span-12 md:col-span-2 flex relative">
                    <div class="h-5/6 w-1 bg-devarana-salmon md:translate-y-32 absolute md:mx-0 mx-5 ">
                    </div>
                    <ul class="my-auto pl-5 inline-flex md:inline-block w-full">
                        <li class="font-playfair text-devarana-pearl py-4 mx-auto lg:text-xl"> Great <br> Place to <br> Work </li>
                        <li class="font-playfair text-devarana-pearl py-4 mx-auto lg:text-xl"> Empresa <br> Socialmente <br> Responsable</li>
                        <li class="font-playfair text-devarana-pearl py-4 mx-auto lg:text-xl">Servicio<br>  Legendario <br> ISO 9001</li>
                    </ul>
                </div>
            </div>
            <div class="bg-devarana-blue h-full absolute w-full top-0 -z-20 md:scale-y-[.85]">
            
            </div>
        </div>
        
    </div>

    <script>


    </script>

    <div id="equipo" class="max-w-screen-2xl mx-auto">
        <div class="slickCenter">
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" alt="Diana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" alt="Abraham-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" alt="Mariana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" alt="Gregorio-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" alt="Diego-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" alt="Gus-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" alt="Miguel-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" alt="Pam-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" alt="Melissa-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" type="image/png">
                <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" alt="Luis-Devarana">
            </picture>
        </div>

            <div class=" py-10 flex">
                <x-link href="{{ route('nuestro-equipo') }}" class="m-auto block"> Nuestro equipo </x-link>
            </div>

    </div>


@endsection






@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }} "/>
@endsection

@section("scripts")
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
