@extends('layouts.app')
@section('content')

<x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png">    
    <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav>
</x-nav>



<div id="header" class="mySwiper pb-10">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
                {{-- <source srcset="{{ asset('img/trayectoria/HEADER-royal-view.webp')}}" type="image/webp"> --}}
                <source srcset="{{ asset('img/trayectoria/HEADER-royal-view.jpg')}}" type="image/jpg"> 
                <img src="{{ asset('img/trayectoria/HEADER-royal-view.jpg')}}" alt="HEADER-royal-view" class="w-full md:h-screen">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden"> Royal View </p>
        </div>
        <div class="swiper-slide">
            <picture>
                {{-- <source srcset="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.webp')}}" type="image/webp"> --}}
                <source srcset="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.jpg')}}" type="image/jpg"> 
                <img src="{{ asset('img/trayectoria/HEADER-HIGH-GARDENS.jpg')}}" alt="HEADER-HIGH-GARDENS" class="w-full md:h-screen">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden"> High Gardens </p>
        </div>
        <div class="swiper-slide">
            <picture>
                {{-- <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.webp')}}" type="image/webp"> --}}
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.jpg')}}" type="image/jpg"> 
                <img src="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA.jpg')}}" alt="HEADER-UPPER-CONDESA" class="w-full md:h-screen">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden"> Upper Condesa </p>
        </div>
        <div class="swiper-slide">
            <picture>
                {{-- <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.webp')}}" type="image/webp"> --}}
                <source srcset="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.jpg')}}" type="image/jpg"> 
                <img src="{{ asset('img/trayectoria/HEADER-UPPER-CONDESA-.jpg')}}" alt="HEADER-UPPER-CONDESA" class="w-full md:h-screen">
            </picture>
            <p class="bg-devarana-pearl absolute left-32 -bottom-8 text-devarana-graph font-mulish md:block hidden"> Grand Mayran </p>
        </div>
    </div>
        <div class="md:block hidden  md:visible invisible swiper-pagination bg-devarana-blue py-2 border-l-white border-l"></div>
        <div class="md:block hidden  md:visible invisible swiper-button-next after:w-6 bg-devarana-blue text-center"></div>
        <div class="md:block hidden  md:visible invisible swiper-button-prev after:w-6 bg-devarana-blue text-center"></div>
</div>


<div class="md:px-20 px-10 py-10">
    <div class="grid md:grid-cols-2 gap-10">
        <div class="col-span-2 md:col-span-1 flex">
            <div class="relative m-auto md:px-16 py-8">
                <h1 class="text-5xl text-devarana-blue text-center ">Trayectoria</h1>
                <img src="{{ asset("img/trayectoria/svg/NUESTRA.svg") }}" alt="somos" class="m-auto max-w-[400px] absolute left-0 top-0 right-0 bottom-0 -translate-y-1/3 -translate-x-1/4 opacity-40">
            </div>
        </div>
        <div class="col-span-2 md:col-span-1">
            <p class="text-devarana-graph text-justify md:px-10">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            </p>
        </div>
    </div>
</div>

<div class="px-10 md:px-20 py-10 md:py-20" id="royal-view">
    <div class="grid grid-cols-12 md:gap-16">
        <div class="col-span-10 md:col-span-5 my-auto">
            <h2 class="text-devarana-blue text-2xl py-2">Royal View</h2>
            <p class="text-devarana-blue py-2 font-mulish font-extralight">2019 - Actualidad</p>
            <p class="text-devarana-graph py-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="flex">
                <button href="royalview.mx" class="group px-8 py-1 text-base bg-devarana-pink text-devarana-pearl font-playfair hover:text-devarana-graph hover:bg-devarana-pearl items-center overflow-hidden flex relative transition-all duration-500">
                    <img src="{{asset("img/logos/IsotipoPink.svg")}}" alt="Isotipo Devarana" class="hidden group-hover:block w-8 mr-2">
                    <img src="{{asset("img/logos/Isotipo_blanco.png")}}" alt="Isotipo Devarana" class="block group-hover:hidden w-8 mr-2"> Preventa diponible </button>
            </div>
        </div>
        <div class="col-span-12 md:col-span-7">
            <div class="swiper mySwiper2 w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW1.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW1.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW1.jpg')}}" alt="ROYAL-VIEW1" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW2.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW2.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW2.jpg')}}" alt="ROYAL-VIEW2" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW3.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW3.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW3.jpg')}}" alt="ROYAL-VIEW3" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW4.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW4.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW4.jpg')}}" alt="ROYAL-VIEW4" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW5.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW5.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW5.jpg')}}" alt="ROYAL-VIEW5" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW6.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW6.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW6.jpg')}}" alt="ROYAL-VIEW6" class="w-full">
                        </picture>
                    </div>
                    <div class="swiper-slide py-10 bg-devarana-pearl">
                        <picture>
                            {{-- <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW7.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/ROYAL-VIEW7.jpg')}}" type="image/jpg"> 
                            <img src="{{ asset('img/trayectoria/ROYAL-VIEW7.jpg')}}" alt="ROYAL-VIEW7" class="w-full">
                        </picture>
                    </div>
                </div>
                <div class="swiper-scrollbar" style=""></div>  
            </div>
        </div>
    </div>
</div>

<div class="translate-x-4 -translate-y-4 hidden scale-y-90 scale-x-105"></div>
<div class="-translate-x-4 translate-y-4 hidden" ></div>

<div class="md:px-20 py-10 md:py-20 px-10 md:block hidden" id="desarrollos">
    <div class="grid grid-cols-3 gap-20">
        <div class="md:col-span-1 col-span-3">
            <div class="bg-devarana-blue w-full">
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp"> --}}
                    <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpg" class="w-full"> 
                    <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full transition-all ease-in-out duration-700 parall">
                </picture>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">High Gardens</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2017 - 2018 </p>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex items-center"> <img src="{{asset("img/logos/IsotipoPink.svg")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
            </div>
        </div>
        <div class="md:col-span-1 col-span-3 md:mt-20">
            <div class="bg-devarana-blue w-full">
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.webp')}}" type="image/webp"> --}}
                    <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" type="image/jpg" class="w-full"> 
                    <img src="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" alt="UPPER-CONDESA" class="w-full transition-all ease-in-out duration-700 parall">
                </picture>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">Upper Condesa</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2014 - 2016 </p>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex items-center"> <img src="{{asset("img/logos/IsotipoPink.svg")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
            </div>
        </div>
        <div class="md:col-span-1 col-span-3 md:mt-40">
            <div class="bg-devarana-blue w-full">
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/trayectoria/GRANMAYRAN.webp')}}" type="image/webp"> --}}
                    <source srcset="{{ asset('img/trayectoria/GRANMAYRAN.jpg')}}" type="image/jpg" class="w-full"> 
                    <img src="{{ asset('img/trayectoria/GRANMAYRAN.jpg')}}" alt="GRANMAYRAN" class="w-full transition-all ease-in-out duration-700 parall">
                </picture>
            </div>
            <div class="px-4 py-6">
                <h2 class="text-2xl text-devarana-blue bg-fixed">Gran Mayran</h2>
                <p class="font-mulish font-extralight text-devarana-graph py-2">2012 - 2013 </p>
                <p class="font-mulish font-extralight text-devarana-graph inline-flex items-center"> <img src="{{asset("img/logos/IsotipoPink.svg")}}" alt="Isotipo Devarana" class="w-8 mr-2"> Sold Out </p>
            </div>
        </div>
    </div>
</div>

<div class="p-10  md:hidden block">
    <div class="swiper mySwiper3">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-devarana-pearl ">
                <div class="bg-devarana-blue">
                    <picture class="w-full block group-hover:hidden translate-x-4 -translate-y-4">
                        {{-- <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp"> --}}
                        <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpg" class="w-full"> 
                        <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full transition-all ease-in-out duration-700 parall">
                    </picture>
                </div>
                <h3 class="py-6 text-devarana-graph">High Gardens</h3>
                <p class="font-mulish font-extralight text-devarana-graph">2017 - 2018</p>
                <p class="text-devarana-graph py-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="swiper-slide bg-devarana-pearl">
                <div class="bg-devarana-blue">
                    <picture class="w-full block group-hover:hidden scale-y-90 scale-x-105">
                        {{-- <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.webp')}}" type="image/webp"> --}}
                        <source srcset="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" type="image/jpg" class="w-full"> 
                        <img src="{{ asset('img/trayectoria/UPPER-CONDESA.jpg')}}" alt="UPPER-CONDESA" class="w-full transition-all ease-in-out duration-700 parall">
                    </picture>
                </div>
                <h3 class="py-6 text-devarana-graph">Upper Condesa</h3>
                <p class="font-mulish font-extralight text-devarana-graph">2014 - 2016</p>
                <p class="text-devarana-graph py-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="swiper-slide bg-devarana-pearl">
                <div class="bg-devarana-blue w-full">
                    <div class="bg-devarana-blue">
                        <picture class="w-full block group-hover:hidden  -translate-x-4 translate-y-4">
                            {{-- <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.webp')}}" type="image/webp"> --}}
                            <source srcset="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" type="image/jpg" class="w-full"> 
                            <img src="{{ asset('img/trayectoria/HIGH-GARDENS.jpg')}}" alt="HIGH-GARDENS" class="w-full transition-all ease-in-out duration-700 parall">
                        </picture>
                    </div>
                </div>
                <h3 class="py-6 text-devarana-graph">Gran Mayran</h3>
                <p class="font-mulish font-extralight text-devarana-graph">2012 - 2013</p>
                <p class="text-devarana-graph py-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
        </div>
        <div class="swiper-pagination responsive-swiper"></div>  
    </div>
</div>

<style>
    
</style>

<div class="bg-devarana-hazelnut md:py-20 py-10 relative overflow-hidden md:-z-20">
    
    <div class="hidden absolute w-full h-full md:flex justify-end right-0 bottom-0 -z-10">
        <img src="{{"img/trayectoria/svg/DEVARANA_iso.svg"}}" alt="" class="-mr-20 -mb-20 opacity-70 w-[35%]">
    </div>
    
    <div class="px-10 md:px-20 z-50 block">
        <div class="relative">
            <h1 class="text-5xl text-devarana-blue ">Política de calidad</h1>
            <img src="{{ asset("img/trayectoria/svg/ISO90012015.svg") }}" alt="somos" class="md:mx-20 max-w-[400px] absolute left-0 top-0 right-0 bottom-0 -translate-y-2/4 md:-translate-x-1/4 -translate-x-5">
        </div>

        <div class="py-6 text-devarana-graph">
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

<div class="md:py-20 py-10 px-10">
    <div class="max-w-[800px] m-auto">
        <div class="relative flex py-4">
            <h1 class="text-5xl text-devarana-pink text-right ml-auto">Clientes</h1>
            <img src="{{ asset("img/trayectoria/svg/TESTIMONIOS.svg") }}" alt="somos" class="ml-auto max-w-[250px] md:max-w-[450px] absolute left-0 top-0 right-0 bottom-0 -translate-y-1 md:-translate-y-1/4 -translate-x-1/4 opacity-80">
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/nuestra-trayectoria/index.js') }}"></script>
@endsection