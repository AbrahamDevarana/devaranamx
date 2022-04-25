@php
    $metaTitle = "Home";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl" hidden="hidden">
        <x-logo-nav class="w-[50px] h-[50px]"/>
    </x-nav>

    <div class="relative lg:h-[100vh] md:h-[600px] h-[330px] overflow-hidden" id="header">
        <picture>
            <source srcset="{{ asset('img/home/DEVARANAVistas-espectaculares.webp') }}" type="image/webp" media="(min-width: 600px)">
            <source srcset="{{ asset('/img/home/DEVARANAVistas-espectaculares.jpeg') }}" type="image/jpeg" media="(min-width: 600px)">

            <source srcset="{{ asset('img/mobile/home/DEVARANAVistas-espectaculares.webp') }}" type="image/webp">
            <source srcset="{{ asset('/img/mobile/home/DEVARANAVistas-espectaculares.jpeg') }}" type="image/jpeg">
            <img src="{{ asset("/img/home/DEVARANAVistas-espectaculares.jpeg") }}" alt="Atardecer Devarana" class="w-full transition duration-1000 absolute scale-110" id="bgHead">
        </picture>
        <picture>
            <source srcset="{{ asset('img/home/SomosDevarana.webp') }}" type="image/webp" media="(min-width: 600px)">
            <source srcset="{{ asset('img/home/SomosDevarana.png') }}" type="image/png" media="(min-width: 600px)">

            <source srcset="{{ asset('img/mobile/home/SomosDevarana.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/mobile/home/SomosDevarana.png') }}" type="image/png">
                <img src="{{ asset("img/home/SomosDevarana.png") }}" alt="Devarana Oficinas" class="absolute transition duration-1000 top-[80px] w-full" id="bgBuilding">
        </picture>
    </div>

    <div id="quienes" class="lg:py-20 md:py-10 px-10 bg-devarana-pearl max-w-screen-2xl xl:m-auto">
        <h1 class="text-devarana-blue md:text-8xl text-4xl text-center md:pb-10 md:pt-0 pt-10">
            Somos DEVARANA
        </h1>
        <div class="grid grid-cols-12 py-10 gap-y-10">
            <div class="col-span-12 md:col-span-3 md:col-start-2">
                <h2 class="text-devarana-graph text-2xl md:text-left text-center">
                    Empresa México-Holandesa
                </h2>
            </div>
            <div class="col-span-12 md:col-span-7 md:col-end-12">
                <p class="text-devarana-graph text-lg md:text-left text-justify">Creamos proyectos inmobiliarios de primer nivel. Gracias a la dedicación, ética y visión a largo plazo. Logrando una calidad extraordinaria en diseño, construcción y acabados.</p>
            </div>
        </div>
        <div class=" py-10 flex">
            <x-link href="{{ route('quienes-somos') }}" class="m-auto block"> Quiénes somos </x-link>
        </div>
    </div>

    <div id="nuestro" class="px-10 pb-5 max-w-screen-2xl xl:m-auto">
       <div class="flex justify-between relative">
        <picture>
            <source srcset="{{ asset('img/home/HIGH-GARDENS-DEVARANA.webp') }}" type="image/webp" media="(min-width: 600px)">
            <source srcset="{{ asset('img/home/HIGH-GARDENS-DEVARANA.jpg') }}" type="image/jpeg" media="(min-width: 600px)">
            <source srcset="{{ asset('img/mobile/home/HIGH-GARDENS-DEVARANA.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/mobile/home/HIGH-GARDENS-DEVARANA.jpg') }}" type="image/jpeg">
                <img src="{{ asset("img/home/HIGH-GARDENS-DEVARANA.jpg") }}" alt="High Gardens" class="mt-4 px-2 md:px-4 md:mt-16 w-full">
        </picture>
        <picture>
            <source srcset="{{ asset('img/home/GRAND-MAYRAN-DEVARANA.webp') }}" type="image/webp" media="(min-width: 600px)">
            <source srcset="{{ asset('img/home/GRAND-MAYRAN-DEVARANA.jpg') }}" type="image/jpeg" media="(min-width: 600px)">
            <source srcset="{{ asset('img/mobile/home/GRAND-MAYRAN-DEVARANA.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/mobile/home/GRAND-MAYRAN-DEVARANA.jpg') }}" type="image/jpeg">
                <img src="{{ asset("img/home/GRAND-MAYRAN-DEVARANA.jpg") }}" alt="Grand Mayran" class="px-2 md:px-4 w-full">
        </picture>
        <picture>
            <source srcset="{{ asset('img/home/devarana-royalview.webp') }}" type="image/webp" media="(min-width: 600px)">
            <source srcset="{{ asset('img/home/devarana-royalview.jpg') }}" type="image/jpeg" media="(min-width: 600px)">
            <source srcset="{{ asset('img/mobile/home/devarana-royalview.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/mobile/home/devarana-royalview.jpg') }}" type="image/jpeg">
                <img src="{{ asset("img/home/devarana-royalview.jpg") }}" alt="Royal View" class="mt-6 px-2 md:px-4 md:mt-28 w-full">
        </picture>        
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
                        <source srcset="{{ asset('img/home/SOMOS-DEVARANA.webp') }}" type="image/webp" media="(min-width: 600px)">
                        <source srcset="{{ asset('img/home/SOMOS-DEVARANA.jpg') }}" type="image/jpeg" media="(min-width: 600px)">

                        <source srcset="{{ asset('img/mobile/home/SOMOS-DEVARANA.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/mobile/home/SOMOS-DEVARANA.jpg') }}" type="image/jpeg">
                        <img src="{{ asset("img/home/SOMOS-DEVARANA.jpg") }}" alt="Devarana Oficinas" class="md:px-10 drop-shadow-md object-cover">
                    </picture>
                    <p class="absolute top-12 md:top-24 left-2/4 right-2/4 bottom-0 -translate-x-2/4 max-w-[750px] text-center w-full text-devarana-pearl text-base md:text-5xl font-playfair drop-shadow-[0px_4px_8px_rgba(0,0,0,0.8)]">Creadores, arquitectos y <br> diseñadores de lo extraordinario</p>
                </div>
                <div class="col-span-12 md:col-span-2 flex relative">
                    <div class="h-4/6 w-2 bg-devarana-salmon md:translate-y-2/4 absolute md:mx-0 mx-5 ">
                    </div>
                    <div class="grid grid-cols-3 gap-y-10 md:content-evenly my-auto pl-5 md:mx-0 mx-auto px-1 items-center">
                        <div class="col-span-1 md:col-span-3 pt-5"> <x-icon-gptw class="max-w-full w-16 fill-devarana-pearl md:mx-0 mx-auto"/> </div>
                        <div class="col-span-1 md:col-span-3 md:pt-0 pt-5"> <x-icon-iso class="max-w-full w-16 fill-devarana-pearl md:mx-0 mx-auto"/></div>
                        <div class="col-span-1 md:col-span-3 md:pt-0 pt-5">  <x-icon-esr class="max-w-full w-28 fill-devarana-pearl md:mx-0 mx-auto"/> </div>
                    </div>
                </div>
            </div>
            <div class="bg-devarana-blue h-full absolute w-full top-0 -z-20 md:scale-y-[.85]">
            
            </div>
        </div>
        
    </div>

    <div class="max-w-screen-2xl mx-auto px-10">
        <div class="swiper mySwiper hover:cursor-grab active:cursor-grabbing">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/jpeg">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador1.jpg') }}" alt="Diana-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador2.jpg') }}" alt="Abraham-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador3.jpg') }}" alt="Mariana-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador4.jpg') }}" alt="Gregorio-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador5.jpg') }}" alt="Diego-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador6.jpg') }}" alt="Gus-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador7.jpg') }}" alt="Miguel-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador8.jpg') }}" alt="Pam-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador9.jpg') }}" alt="Melissa-Devarana">
                    </picture>  
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" type="image/jpeg">
                        <img class="w-full" src="{{ asset('img/home/colaboradores/DEVARANA-Colaborador10.jpg') }}" alt="Luis-Devarana">
                    </picture>  
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class=" py-10 flex">
            <x-link href="{{ route('nuestro-equipo') }}" class="m-auto block"> Nuestro equipo </x-link>
        </div>
    </div>


@endsection






@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="preload" href="{{ asset('css/home.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/home.css') }}"></noscript>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }} "/> --}}
@endsection

@section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
