@php
    $metaTitle = "Nuestra Trayectoria";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

<x-nav class="bg-devarana-blue text-devarana-pearl">
    <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>



<div id="header" class="mySwiper md:pb-10 pb-2 sm:mt-[65px]">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HEADER-royal-view.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HEADER-royal-view.jpg')}}" type="image/jpeg">
                <img src="{{ asset('img/trayectoria/HEADER-royal-view.jpg')}}" alt="HEADER-royal-view" class="w-full md:h-screen object-cover">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden w-[250px]"> Royal View - Actual</p>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.jpg')}}" type="image/jpeg">
                <img src="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.jpg')}}" alt="HEADER-HIGH-GARDENS" class="w-full md:h-screen object-cover">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden w-[250px]"> High Gardens 2012 - 2018</p>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.jpg')}}" type="image/jpeg">
                <img src="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.jpg')}}" alt="HEADER-UPPER-CONDESA" class="w-full md:h-screen object-cover">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden w-[250px]"> Upper Condesa 2014 - 2016</p>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.jpg')}}" type="image/jpeg">
                <img src="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.jpg')}}" alt="HEADER-UPPER-CONDESA" class="w-full md:h-screen object-cover">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden w-[250px]"> Grand Mayran 2012 - 2013</p>
        </div>
    </div>
        <div class="md:block hidden md:visible invisible swiper-pagination bg-devarana-blue py-2 border-l-white border-l"></div>
        <div class="md:block hidden md:visible invisible swiper-button-next after:w-6 bg-devarana-blue text-center"></div>
        <div class="md:block hidden md:visible invisible swiper-button-prev after:w-6 bg-devarana-blue text-center"></div>
</div>


<div class="max-w-screen-2xl m-auto 2xl:px-0 sm:px-20 px-10 ">
    <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-5 flex">
            <div class="relative m-auto lg:px-16 py-8">
                <p class="text-5xl lg:text-6xl xl:text-8xl text-devarana-blue text-center font-playfair">Trayectoria</p>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7 lg:py-16 py-3">
            <h1 class="text-devarana-blue text-2xl md:px-5 py-2">Empresa México-Holandesa con más de 10 años de experiencia en el sector inmobiliario.</h1>
            <p class="text-devarana-graph text-justify md:px-5 py-6 text-base">
                Contamos con los más altos estándares de calidad en obra y vanguardia en sistemas de construcción. Conformamos un equipo propio de arquitectura e ingeniería con gran experiencia.
            </p>
            <p class="text-devarana-graph text-justify md:px-5 text-base">
                Implementamos procedimientos de aseguramiento de calidad en todas las etapas del diseño y la construcción. Con ello ofrecemos un producto de primer nivel con los mejores acabados y logramos siempre el máximo valor agregado para nuestros clientes.
            </p>
        </div>
    </div>
</div>



    <div class="max-w-screen-2xl m-auto sm:px-20 px-10 md:py-10 overflow-hidden" id="royal-view">
        <h2 class="text-devarana-pink md:text-5xl text-3xl py-10"> Royal View <span class="text-devarana-graph md:text-2xl text-lg font-extralight font-mulish pl-5"> Preventa disponible </span> </h2>
        <div>
            <section class="proSlides"> 
                <section class="proSlides-nav">
                  <nav class="proSlides-nav__nav">
                    <button class="proSlides-nav__prev js-prev font-mulish text-devarana-graph">Atrás</button>
                    <button class="proSlides-nav__next js-next font-mulish text-devarana-graph">Siguiente</button>
                  </nav>
                </section>
              
                <section class="proSlide is-active">
                  <div class="proSlide__content">
                    <figure class="proSlide__figure">
                        <source srcset="{{ asset('img/trayectoria/Disenos-DEVARANA.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/Disenos-DEVARANA.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/Disenos-DEVARANA.jpg')}}" alt="HEADER-UPPER-CONDESA" class="proSlide__img object-cover">
                    </figure>
                    <header class="proSlide__header">
                      <h2 class="proSlide__title translate-y-10">
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">Diseños para</span></span>
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">cada estilo de vida</span></span>
                      </h2>
                    </header>
                  </div>
                </section>
              
                <section class="proSlide">
                  <div class="proSlide__content">
                    <figure class="proSlide__figure">
                        <source srcset="{{ asset('img/trayectoria/espacios-DEVARANA.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/espacios-DEVARANA.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/espacios-DEVARANA.jpg')}}" alt="HEADER-UPPER-CONDESA" class="proSlide__img object-cover">
                    </figure>
                    <header class="proSlide__header">
                      <h2 class="proSlide__title translate-y-10">
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">Espacios para</span></span>
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">toda la familia</span></span>
                      </h2>
                    </header>
                  </div>
                </section>
              
                <section class="proSlide">
                  <div class="proSlide__content">
                    <figure class="proSlide__figure">
                        <source srcset="{{ asset('img/trayectoria/CALIDAD-DEVARANA.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/CALIDAD-DEVARANA.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/CALIDAD-DEVARANA.jpg')}}" alt="HEADER-UPPER-CONDESA" class="proSlide__img object-cover">
                    </figure>
                    <header class="proSlide__header">
                      <h2 class="proSlide__title translate-y-10">
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">Calidad de vida</span></span>
                        <span class="title-line text-devarana-pearl"><span class="md:text-5xl text-3xl">de primer nivel</span></span>
                      </h2>
                    </header>
                  </div>
                </section>
        </div>
        <div class="flex pt-16">
            <button href="royalview.mx" class="group px-8 py-1 text-base bg-devarana-pink text-devarana-pearl font-playfair hover:text-devarana-graph hover:bg-devarana-pearl items-center overflow-hidden flex relative transition-all duration-500 md:ml-auto md:m-0 m-auto  justify-center">
                <img src="https://test.devarana.mx/img/logos/IsotipoPink.svg" alt="Isotipo Devarana" class="hidden group-hover:block w-8 mr-2">
                <img src="https://test.devarana.mx/img/logos/Isotipo_blanco.png" alt="Isotipo Devarana" class="block group-hover:hidden w-8 mr-2"> Preventa diponible </button>
        </div>
    </div>

    <div class="translate-x-4 -translate-y-4 hidden scale-y-90 scale-x-105"></div>
    <div class="-translate-x-4 translate-y-4 hidden"></div>

<div class="max-w-screen-2xl m-auto md:px-20 py-10 px-10 md:block hidden" id="desarrollos">
    <div class="grid grid-cols-3 gap-20">
        <div class="md:col-span-1 col-span-3">
            <div class="relative group bg-devarana-blue">
                <div class="parall transition-all ease-linear duration-300">
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full opacity-100 group-hover:opacity-0 transition-all ease-linear duration-300">
                    </picture>
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS-2.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS-2.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/HIGH-GARDENS-2.jpg')}}" alt="HIGH-GARDENS" class="w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300">
                    </picture>
                    <div class="h-full w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300 flex bg-black bg-opacity-50">
                        <p class="font-mulish text-devarana-pearl inline-flex items-center m-auto"> <img src="{{asset("img/logos/Isotipo_blanco.png")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
                    </div>
                </div>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">High Gardens</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2017 - 2018 </p>
            </div>
        </div>

        <div class="md:col-span-1 col-span-3 md:mt-20">
            <div class="relative group bg-devarana-blue">
                <div class="parall transition-all ease-linear duration-300">
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" type="image/jpeg">
                                <img src="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" alt="UPPER-CONDESA"  class="w-full opacity-100 group-hover:opacity-0 transition-all ease-linear duration-300">
                    </picture>
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA-2.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA-2.jpg')}}" type="image/jpeg">
                                <img src="{{ asset('img/trayectoria/UPPER-CONDESA-2.jpg')}}" alt="UPPER-CONDESA" class="w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300">
                    </picture>
                    <div class="h-full w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300 flex bg-black bg-opacity-50">
                        <p class="font-mulish text-devarana-pearl inline-flex items-center m-auto group-hover:scale-y-100"> <img src="{{asset("img/logos/Isotipo_blanco.png")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
                    </div>
                </div>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">Upper Condesa</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2014 - 2016 </p>
            </div>
        </div>

        <div class="md:col-span-1 col-span-3 md:mt-40">
            <div class="relative group bg-devarana-blue">
                <div class="parall transition-all ease-linear duration-300">
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/GRANMAYRAN.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/GRANMAYRAN.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/GRANMAYRAN.jpg')}}" alt="GRANMAYRAN"  class="w-full opacity-100 group-hover:opacity-0 transition-all ease-linear duration-300">
                    </picture>
                    <picture>
                        <source srcset="{{ asset('img/trayectoria/GRANMAYRAN-2.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/GRANMAYRAN-2.jpg')}}" type="image/jpeg">
                        <img src="{{ asset('img/trayectoria/GRANMAYRAN-2.jpg')}}" alt="GRANMAYRAN" class="w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300">
                    </picture>
                    <div class="h-full w-full absolute z-10 top-0 left-0 right-0 bottom-0 opacity-0 group-hover:opacity-100 transition-all ease-linear duration-300 flex bg-black bg-opacity-50">
                        <p class="font-mulish text-devarana-pearl inline-flex items-center m-auto"> <img src="{{asset("img/logos/Isotipo_blanco.png")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
                    </div>
                </div>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">Grand Mayran</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2012 - 2013 </p>
            </div>
        </div>
    </div>
</div>

<div class="p-10 md:hidden block">
    <div class="swiper mySwiper3">
        <div class="swiper-wrapper">
            <div class="swiper-slide cursor-grab active:cursor-grabbing bg-devarana-pearl min-h-[500px]">
                <div class="bg-devarana-blue">
                    <picture class="w-full block group-hover:hidden translate-x-4 -translate-y-4">
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpeg" class="w-full">
                        <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full transition-all ease-in-out duration-700 parall">
                    </picture>
                </div>
                <h3 class="py-6 text-devarana-graph">High Gardens</h3>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex">2017 - 2018  |  Sold Out</p>
            </div>
            <div class="swiper-slide cursor-grab active:cursor-grabbing bg-devarana-pearl min-h-[500px]">
                <div class="bg-devarana-blue">
                    <picture class="w-full block group-hover:hidden scale-y-90 scale-x-105">
                        <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.webp')}}" type="image/webp">
                        <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" type="image/jpeg" class="w-full">
                        <img src="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" alt="UPPER-CONDESA" class="w-full transition-all ease-in-out duration-700 parall">
                    </picture>
                </div>
                <h3 class="py-6 text-devarana-graph">Upper Condesa</h3>
                <p class="font-mulish font-extralight text-devarana-graph"></p>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex">2014 - 2016  |  Sold Out</p>
            </div>
            <div class="swiper-slide cursor-grab active:cursor-grabbing bg-devarana-pearl min-h-[500px]">
                <div class="bg-devarana-blue w-full">
                    <div class="bg-devarana-blue">
                        <picture class="w-full block group-hover:hidden  -translate-x-4 translate-y-4">
                            <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpeg" class="w-full">
                            <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full transition-all ease-in-out duration-700 parall">
                        </picture>
                    </div>
                </div>
                <h3 class="py-6 text-devarana-graph">Gran Mayran</h3>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex">2012 - 2013  |  Sold Out</p>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="bg-devarana-hazelnut md:py-20 py-10 relative overflow-hidden md:-z-20 mb-10">

    <div class="hidden absolute w-full h-full md:flex justify-end right-0 bottom-0 -z-10">
        <img src="{{"img/trayectoria/svg/DEVARANA_iso.svg"}}" alt="Devarana" class="-mr-20 -mb-20 opacity-70 w-[35%]">
    </div>

    <div class="px-10 md:px-20 z-50 block">
        <div class="relative">
            <h3 class="text-5xl text-devarana-blue ">Política de calidad</h3>
        </div>

        <div class="py-6 text-devarana-graph text-justify md:text-left">
            <p class="">En DEVARANA hemos asumido el compromiso de implementar un modelo de Gestión de la Calidad, basado en la norma ISO 9001-2015, que nos proporcione un marco de referencia integral para el establecimiento de objetivos específicos de calidad y con la finalidad de, a través de la mejora continua, conseguir la satisfacción total de nuestros colaboradores, clientes y socios de negocio, convirtiéndonos en un referente en el sector de desarrollo inmobiliario, por los estándares de calidad que empleamos en el servicio que ofrecemos y los productos que desarrollamos.</p>

            <p class="py-4">En un mercado en continua expansión, DEVARANA se mantiene como líder del sector
                inmobiliario, al tener siempre presente que nuestro éxito es consecuencia de honrar los
                siguientes principios de calidad:</p>

            <ul class="list-disc py-4">
                <li class="list-inside">Lograr la plena satisfacción de nuestros clientes internos y externos. </li>
                <li class="list-inside">Conseguir la excelencia empresarial a través de potenciar a nuestro capital humano. </li>
                <li class="list-inside">Integrar en todo momento a nuestros socios de negocio en el compromiso con la calidad. </li>
                <li class="list-inside">Mantener un alto nivel de innovación en el desarrollo de nuestros productos. </li>
                <li class="list-inside">Cumplir la normatividad legal y los requisitos aplicables. </li>
                <li class="list-inside">Identificar y evaluar todos los riesgos y oportunidades en cada uno de los procesos que contempla nuestro sistema de calidad. </li>
                <li class="list-inside">Asegurar la integridad y seguridad de nuestro Sistema de Gestión de Calidad. </li>
            </ul>
        </div>
    </div>
</div>

<div class="md:py-20 py-10 px-10 hidden ">
    <div class="max-w-[800px] m-auto">
        <div class="relative flex py-4">
            <h3 class="text-5xl text-devarana-pink text-right ml-auto">Clientes</h3>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-span-1 bg-devarana-pink px-4 md:px-10 md:py-20 py-10 text-devarana-pearl">
                <p>Magnífico, espectacular, fabuloso, inigualable, único, fantástico, brillante</p>
                <p class="py-6">Fulanita de Tal</p>
            </div>
            <div class="md:col-span-1 bg-devarana-graph md:px-10 md:py-20 py-10 px-4">

            </div>
        </div>
    </div>
</div>


@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset("css/nuestra-trayectoria.css")}}" />
@endsection

    @section("scripts")
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/nuestra-trayectoria.js') }}"></script>
@endsection
