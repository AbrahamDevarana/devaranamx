@php
    $metaTitle = "DEVARANA - Somos calidad de vida";
    $metaDescripcion = "Con más de 10 años de experiencia en el sector inmobiliario, somos un referente en la creación de desarrollos inmobiliarios en Querétaro.";
    $metaKeywords = "Inmobiliaria queretaro, bienes inmuebles, empresa de bienes inmuebles, departementos en venta, preventa departamentos, DEVARANA, Royal View, Inmobiliaria querétaro, constructora, Departamentos en venta queretaro, mejores lugares para vivir en queretaro";
@endphp

@extends('layouts.app')
@section('content')

<x-nav class="bg-devarana-blue text-devarana-pearl">
    <x-logo-nav  class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div id="header" class="bg-devarana-hazelnut h-full flex md:mb-36 mb-20 relative md:mt-[65px]"> 
    <div class="md:max-w-[80%] md:ml-auto mt-auto -mb-[5%] flex z-20 max-w-full lg:pt-40 md:pt-32 pt-20">
       <div class="relative">
            <p class="text-devarana-pearl drop-shadow-lg font-playfair left-10 md:left-0 text-5xl md:text-7xl lg:text-8xl absolute md:-translate-x-2/4 md:-translate-y-1/3 -translate-y-1/3"> Quiénes <br> somos </p>
            <picture>
                <source srcset="{{ asset("img/quienes-somos/DEVARANA-Arte.webp") }}" type="image/webp" media="(min-width: 600px)">
                <source srcset="{{ asset("img/quienes-somos/DEVARANA-Arte.jpeg") }}" type="image/png" media="(min-width: 600px)">
                <source srcset="{{ asset("img/mobile/quienes-somos/DEVARANA-Arte.webp") }}" type="image/webp">
                <source srcset="{{ asset("img/mobile/quienes-somos/DEVARANA-Arte.jpeg") }}" type="image/png">
                <img class="w-full sm:pl-10 px-10 sm:px-0 z-10" src="{{ asset("img/quienes-somos/DEVARANA-Arte.jpeg") }}" alt="Devarana Arte">
            </picture>
       </div>
       <div class="sm:block hidden">
            <picture>
                <source srcset="{{ asset("img/quienes-somos/DEVARANA-QuienesSomos.webp") }}" type="image/webp">
                <source srcset="{{ asset("img/quienes-somos/DEVARANA-QuienesSomos.jpg") }}" type="image/png">
                <img class="w-full pl-10 z-10 md:h-auto h-full " src="{{ asset("img/quienes-somos/DEVARANA-QuienesSomos.jpg") }}" alt="Devarana Estatua">
            </picture>
       </div>
    </div>
    <img src="{{ asset("img/logos/IsotipoPink.svg") }}" alt="devarana pink" class="absolute left-14 bottom-14 hidden md:block">
</div>


<div class="grid grid-cols-12 max-w-[95%] md:max-w-[90%] lg:max-w-[80%] mx-auto md:gap-10 md:pt-10 md:pb-24 pt-1 pb-1">
    <div class="col-span-12 md:col-span-5 flex">
        <h1 class="m-auto text-xl md:text-3xl lg:text-4xl text-devarana-blue md:text-left text-center">Somos creadores, <br>arquitectos y diseñadores  <br>de lo extraordinario.</h1>
    </div>
    <div class="col-span-12 md:col-span-7">
        <div class="grid grid-cols-3 pt-8 md:py-0">
            <button class="text-devarana-blue col-span-1 md:text-left md:py-3 py-2 font-playfair text-2xl tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 border-b-devarana-pink" data-id="origen" id="origen-tab">Origen</button>
            <button class="text-devarana-blue col-span-1 md:text-left md:py-3 py-2 font-playfair text-2xl tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 opacity-40" data-id="mision" id="mision-tab">Misión</button>
            <button class="text-devarana-blue col-span-1 md:text-left md:py-3 py-2 font-playfair text-2xl tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 opacity-40" data-id="vision" id="vision-tab">Visión</button>
        </div>

        <div class="px-3 md:px-0 py-10 text-devarana-graph">
            <div class="tabs-div transition-all duration-1000 ease-in-out" id="origen-div">
                <p class="font-mulish py-2 text-devarana-graph text-base">Somos una empresa México-Holandesa con más de 10 años de experiencia en el sector inmobiliario, que nace con el deseo de construir desarrollos del más alto nivel.</p>
            </div>
            <div class="tabs-div transition-all duration-1000 ease-in-out hidden" id="mision-div">
                <p class="font-mulish py-2 text-devarana-graph text-base">Inspiramos al mundo creando espacios únicos con amor y pasión, cuidando nuestro entorno, la rentabilidad y el bienestar de nuestros clientes.</p>
            </div>
            <div class="tabs-div transition-all duration-1000 ease-in-out hidden" id="vision-div">
                <p class="font-mulish py-2 text-devarana-graph text-base">Seremos el referente en la creación de desarrollos inmobiliarios extraordinarios en las zonas estratégicas de México, destacando en diseño, calidad y servicio.</p>
            </div>
        </div>
    </div>
</div>


<div class="mb-10 hidden md:block pb-10 transition-all ease-in-out duration-1000 bg-center bg-cover bg-no-repeat">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
           width="0" height="0" viewBox="0 0 1366 768" xml:space="preserve">
    <defs>
        <filter id="blur0">
        <feGaussianBlur in="SourceGraphic" stdDeviation="0 0" />
        </filter>
        <filter id="blur1">
        <feGaussianBlur in="SourceGraphic" stdDeviation="5 0" />
        </filter>
        <filter id="blur2">
        <feGaussianBlur in="SourceGraphic" stdDeviation="12 0" />
        </filter>
        <filter id="blur3">
        <feGaussianBlur in="SourceGraphic" stdDeviation="20 0" />
        </filter>
        <filter id="blur4">
        <feGaussianBlur in="SourceGraphic" stdDeviation="35 1" />
        </filter>
        <filter id="blur5">
        <feGaussianBlur in="SourceGraphic" stdDeviation="50 1" />
        </filter>
    </defs>
    </svg>

    <div class="grid grid-cols-12 bg-vista-devarana bg-center bg-cover min-h-[800px] bg-fixed">
        <div class="col-span-6 flex flex-col my-auto">
            <h2 class="text-devarana-pearl text-7xl px-10 py-10 inline-block mx-auto drop-shadow-lg"> Nuestros <span class="text-8xl block"> Valores</span> </h2>
            <div class="col-span-3 pt-32 flex">
                <x-link href="{{ route('nuestro-equipo') }}" class="m-auto block"> Conoce a nuestro equipo </x-link>
            </div>
        </div>
    
        <div class="valoresSlider col-span-6 relative flex my-[180px] overflow-hidden text-devarana-pearl cursor-grab active:cursor-grabbing ">
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 01. </p>
                <h3 class="py-10 text-2xl ">Somos apasionados</h3>
                <p class="font-mulish text-lg">Buscamos nuestra esencia para dedicarnos a lo que amamos y hacer nuestro trabajo siempre con pasión. ¡Nos levantamos cada día con entusiasmo para enfrentar los retos que encontramos en nuestro camino!</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 02. </p>
                <h3 class="py-10 text-2xl ">Somos incluyentes</h3>
                <p class="font-mulish text-lg">Vamos más allá de la tolerancia y hacemos siempre un esfuerzo por incluir a todos. El respeto a la diversidad nos hace una empresa incluyente.</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 03. </p>
                <h3 class="py-10 text-2xl ">Espíritu triunfador</h3>
                <p class="font-mulish text-lg">¡Somos optimistas, nos enfocamos en lo positivo y ante cualquier situación nos acompaña nuestro espíritu triunfador!</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 04. </p>
                <h3 class="py-10 text-2xl ">La innovación nos distingue</h3>
                <p class="font-mulish text-lg">¡Creemos firmemente en la constante innovación! Nos Ilusionan los retos y buscamos siempre estar a la vanguardia.</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 05. </p>
                <h3 class="py-10 text-2xl ">La excelencia está en nuestro ADN</h3>
                <p class="font-mulish text-lg">Buscamos la excelencia en todo lo que hacemos y damos todos los días lo mejor de nosotros mismos para vivir plenamente y sentirnos felices.</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 06. </p>
                <h3 class="py-10 text-2xl ">Inspiramos con amor</h3>
                <p class="font-mulish text-lg">El amor verdadero es preeminente en esta vida y nos motiva a hacer el bien en todo lo que emprendemos. Con nuestras acciones tratamos de hacer de este mundo un lugar mejor.</p>
            </div>
            <div class="p-10 drop-shadow-lg">
                <p class="text-6xl font-playfair"> 07. </p>
                <h3 class="py-10 text-2xl ">Lo extraordinario es primero</h3>
                <p class="font-mulish text-lg">La atención en los detalles, nuestro servicio legendario y esfuerzo por la satisfacción total, son parte de nuestra esencia.</p>
            </div>
        </div>
    </div>
    
</div>

<div class="md:hidden block pb-20 overflow-hidden">
    <div class="row-span-2 col-span-2 md:col-span-1 relative">
        <h2 class="text-devarana-blue px-10 text-5xl xl:text-8xl sm:py-10 py-1 text-center">Valores</h2>
    </div>

        <div class="slickSlider text-devarana-graph cursor-grab active:cursor-grabbing">
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-apasionados class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">Somos apasionados</h3>
                <p class="text-center py-6 font-mulish">Buscamos nuestra esencia para dedicarnos a lo que amamos y hacer nuestro trabajo siempre con pasión. ¡Nos levantamos cada día con entusiasmo para enfrentar los retos que encontramos en nuestro camino!</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-incluyentes class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">Somos incluyentes</h3>
                <p class="text-center py-6 font-mulish">Vamos más allá de la tolerancia y hacemos siempre un esfuerzo por incluir a todos. El respeto a la diversidad nos hace una empresa incluyente.</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-triunfador class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">Espíritu triunfador</h3>
                <p class="text-center py-6 font-mulish">¡Somos optimistas, nos enfocamos en lo positivo y ante cualquier situación nos acompaña nuestro espíritu triunfador!</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-innovacion class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">La innovación nos distingue</h3>
                <p class="text-center py-6 font-mulish">¡Creemos firmemente en la constante innovación! Nos Ilusionan los retos y buscamos siempre estar a la vanguardia.</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-adn class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">La excelencia está en nuestro ADN</h3>
                <p class="text-center py-6 font-mulish">Buscamos la excelencia en todo lo que hacemos y damos todos los días lo mejor de nosotros mismos para vivir plenamente y sentirnos felices.</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-amor class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">Inspiramos con amor</h3>
                <p class="text-center py-6 font-mulish">El amor verdadero es preeminente en esta vida y nos motiva a hacer el bien en todo lo que emprendemos. Con nuestras acciones tratamos de hacer de este mundo un lugar mejor.</p>
            </div>
            <div class="bg-devarana-pearl px-10 py-6">
                <x-icon-extraordinario class="w-10 ml-auto"/>
                <h3 class="py-3 text-lg text-center">Lo extraordinario es primero</h3>
                <p class="text-center py-6 font-mulish">La atención en los detalles, nuestro servicio legendario y esfuerzo por la satisfacción total, son parte de nuestra esencia.</p>
            </div>
        </div>
</div>

@endsection


@section('styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }} "/> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }} "/> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/quienes-somos.css') }} "/> --}}

    <link rel="preload" href="{{ asset('css/slick.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/slick.css') }}"></noscript>
    <link rel="preload" href="{{ asset('css/slick-theme.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"></noscript>

    <link rel="preload" href="{{ asset('css/quienes-somos.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}"></noscript>


@endsection

@section("scripts")
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/quienes-somos.js') }}"></script>
@endsection
