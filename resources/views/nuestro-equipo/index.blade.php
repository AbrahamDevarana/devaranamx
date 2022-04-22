@php
    $metaTitle = "Nuestro Equipo";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

<x-nav class="bg-devarana-blue text-devarana-pearl">
    <x-logo-nav  class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div id="header" class="bg-devarana-hazelnut grid grid-cols-12 mb-10 md:mb-32 relative -z-30 sm:mt-[65px] md:px-20 px-10">
    <div class="col-span-8">
        <picture>
            <source srcset="{{ asset('img/nuestro-equipo/HEADER.webp')}}" type="image/webp">
            <source srcset="{{ asset('img/nuestro-equipo/HEADER.jpg')}}" type="image/jpeg">
            <img src="{{ asset("img/nuestro-equipo/HEADER.jpg") }}" alt="Devarana Team" class="w-full md:-mb-[11%] md:py-[7%] -mb-[30%] py-[30%]">
        </picture>
    </div>
    <div class="col-span-4 flex">
        <div class="my-auto items-center">
            <h1 class="text-devarana-pearl drop-shadow-lg lg:text-8xl md:text-4xl px-5 lg:px-0 text-2xl lg:-translate-y-1/3 lg:-translate-x-9">Nuestro equipo</h1>
            <p class="text-devarana-babyblue drop-shadow-sm lg:text-3xl md:text-2xl lg:px-20 px-5 font-playfair lg:py-0 py-4">¿Por qué DEVARANA?</p>
        </div>
    </div>
</div>

<div class="pb-16 overflow-hidden md:px-10 px-4">

        <p class="text-devarana-graph py-10 lg:px-32 md:px-24  my-auto max-w-screen-lg text-center m-auto">
            Dedicación, ética y visión a largo plazo, así como un gran equipo de colaboradores apasionados que construyen día a día un servicio legendario.
        </p>
        <div class="grid grid-cols-4 mx-auto max-w-screen-xl md:gap-10 md:gap-y-0 gap-y-4">
            <div class="col-span-2 md:col-span-1">
                <div class="ih-item circle effect6 scale_up shadow-[0px_4px_24px_rgba(0,0,0,0.25)] mx-auto">
                    <a href="javascript:void(0)">
                        <div class="img flex">
                            <x-icon-desarrollos class="w-20 md:w-28 m-auto fill-devarana-blue"/>
                        </div>
                        <div class="info">
                            <p class="text-devarana-pearl text-center font-playfair md:px-0 px-2 my-auto"> <span class="block font-bold w-full text-2xl font-mulish">4</span> Desarrollos </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="ih-item circle effect6 scale_up shadow-[0px_4px_24px_rgba(0,0,0,0.25)] mx-auto">
                    <a href="javascript:void(0)">
                        <div class="img flex">
                            <x-icon-colaboradores class="w-20 md:w-28  m-auto fill-devarana-blue"/>
                        </div>
                        <div class="info">
                            <p class="text-devarana-pearl text-center font-playfair md:px-0 px-2 my-auto"> <span class="block font-bold w-full text-2xl font-mulish">40+</span> Colaboradores </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="ih-item circle effect6 scale_up shadow-[0px_4px_24px_rgba(0,0,0,0.25)] mx-auto">
                    <a href="javascript:void(0)">
                        <div class="img flex">
                            <x-icon-residentes class="w-16 md:w-20  m-auto fill-devarana-blue"/>
                        </div>
                        <div class="info">
                            <p class="text-devarana-pearl text-center font-playfair md:px-0 px-2"> <span class="block font-bold w-full text-2xl font-mulish">2.5k</span> Residentes satisfechos </p>
                        </div>
                    </a>
                </div>
                
                
            </div>
            <div class="col-span-2 md:col-span-1">
                <div class="ih-item circle effect6 scale_up shadow-[0px_4px_24px_rgba(0,0,0,0.25)] mx-auto">
                    <a href="javascript:void(0)">
                        <div class="img flex">
                            <x-icon-hectareas class="w-20 md:w-28  m-auto fill-devarana-blue"/>
                        </div>
                        <div class="info">
                            <p class="text-devarana-pearl text-center font-playfair md:px-0 px-2"> <span class="block font-bold w-full text-2xl font-mulish">8+</span>  Hectáreas construidas </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


<div class="relative pt-10">
    <div class="grid grid-cols-12">
        <div class=" md:col-start-4 md:col-end-10 md:col-span-6 col-span-12 col-start-2">
            <p class="text-devarana-salmon text-3xl md:text-5xl pl-10 font-playfair translate-y-2">Testimonios</p>
            <h2 class="lg:text-8xl md:text-5xl text-4xl font-playfair text-center text-devarana-blue ">Colaboradores</h2>
        </div>
    </div>
</div>
<div class="md:py-20 py-5 sm:block hidden">
    <div class="bg-white blur-sm hover:blur-none md:pt-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="flex m-auto col-span-6">
                <picture class="w-full hidden group-hover:block">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
            </div>
            <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-6">
                <p class="font-mulish py-4 text-devarana-graph">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <p class="font-playfair group-hover:text-devarana-pink">Directora Comercial.</p>
            </div>
        </div>
    </div>
    <div class="bg-devarana-pearl blur-sm hover:blur-none md:pt-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                <p class="font-mulish py-4 text-devarana-graph">“Me siento muy orgulloso y agradecido por ser parte de DEVARANA.”</p>
                <p class="font-playfair group-hover:text-devarana-pink">Director de Operaciones.</p>
            </div>
            <div class="flex my-auto mr-auto col-span-4">
                <picture class="w-full hidden group-hover:block">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
            </div>
        </div>
    </div>
    <div class="bg-white blur-sm hover:blur-none md:pt-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="flex m-auto col-span-6">
                <picture class="w-full  hidden group-hover:block">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
            </div>
            <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-6">
                <p class="font-mulish py-4 text-devarana-graph">“Ser parte de la familia DEVARANA es trabajar en lo que me apasiona y hacer las cosas con magnificencia”</p>
                <p class="font-playfair group-hover:text-devarana-pink">Coordinadora de Construcción.</p>
            </div>
        </div>
    </div>
    <div class="bg-devarana-pearl md:blur-sm md:hover:blur-none md:pt-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                <p class="font-mulish py-4 text-devarana-graph">“Para mí DEVARANA es una oportunidad de colaborar en lo que me apasiona y aprender constantemente”</p>
                <p class="font-mulish text-devarana-pink md:text-devarana-blue md:group-hover:text-devarana-pink">Gerente de Calidad e Innovación.</p>
            </div>
            <div class="flex my-auto mr-auto col-span-4">
                <picture class="w-full block md:hidden md:group-hover:block">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
                <picture class="w-full hidden md:block md:group-hover:hidden">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.webp')}}" type="image/webp">
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.png')}}" type="image/png">
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.png')}}" alt="Devarana Colaborador" class="w-full">
                </picture>
            </div>
        </div>
    </div>
   
</div>

<div class="sm:hidden block ">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="bg-devarana-pearl my-4 transition-all duration-200 ease-in-out group swiper-slide min-h-[220px] px-3">
                <div class="grid grid-cols-12">
                    <div class="flex m-auto col-span-4">
                        <picture>
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" type="image/png">
                            <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" alt="Devarana Colaborador" class="w-full">
                        </picture>
                    </div>
                    <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-8">
                        <p class="font-mulish py-2 text-devarana-graph text-sm">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                        <p class="font-playfair text-devarana-pink leading-none py-1">Directora Comercial.</p>
                    </div>
                </div>
            </div>
            <div class="bg-devarana-pearl my-4 transition-all duration-200 ease-in-out group swiper-slide min-h-[220px] px-3">
                <div class="grid grid-cols-12">
                    <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                        <p class="font-mulish py-2 text-devarana-graph text-sm">“Me siento muy orgulloso y agradecido por ser parte de DEVARANA.”</p>
                        <p class="font-playfair text-devarana-pink leading-none py-1">Director de Operaciones.</p>
                    </div>
                    <div class="flex my-auto mr-auto col-span-4">
                        <picture>
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" type="image/png">
                            <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" alt="Devarana Colaborador" class="w-full">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="bg-devarana-pearl my-4 transition-all duration-200 ease-in-out group swiper-slide min-h-[220px] px-3">
                <div class="grid grid-cols-12">
                    <div class="flex m-auto col-span-4">
                        <picture>
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" type="image/png">
                            <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" alt="Devarana Colaborador" class="w-full">
                        </picture>
                    </div>
                    <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-8">
                        <p class="font-mulish py-2 text-devarana-graph text-sm">“Ser parte de la familia DEVARANA es trabajar en lo que me apasiona y hacer las cosas con magnificencia”</p>
                        <p class="font-playfair text-devarana-pink leading-none py-1">Coordinadora de Construcción.</p>
                    </div>
                </div>
            </div>
            <div class="bg-devarana-pearl my-4 transition-all duration-200 ease-in-out group swiper-slide min-h-[220px] px-3">
                <div class="grid grid-cols-12">
                    <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                        <p class="font-mulish py-2 text-devarana-graph text-sm">“Para mí DEVARANA es una oportunidad de colaborar en lo que me apasiona y aprender constantemente”</p>
                        <p class="font-playfair text-devarana-pink leading-none py-1">Gerente de Calidad e Innovación.</p>
                    </div>
                    <div class="flex my-auto mr-auto col-span-4">
                        <picture>
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.webp')}}" type="image/webp">
                            <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" type="image/png">
                            <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" alt="Devarana Colaborador" class="w-full">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<div class="max-w-screen-xl mx-auto">
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-start-4 md:col-end-9">
            <p class="text-devarana-salmon text-4xl md:text-5xl md:-translate-x-16 font-playfair translate-y-2 md:pl-0 pl-10">Somos</p>
            <h2 class="lg:text-8xl md:text-5xl text-4xl font-playfair text-center text-devarana-blue">Orgullosamente</h2>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-y-10 md:gap-10 py-10">
        <div class="col-span-12 lg:col-span-4">
            <figure class="snip1401">
                <source srcset="{{ asset('img/nuestro-equipo/ESR.webp')}}" type="image/webp" class="w-full">
                <source srcset="{{ asset('img/nuestro-equipo/ESR.jpg')}}" type="image/jpeg" class="w-full">
                <img src="{{ asset('img/nuestro-equipo/ESR.jpg')}}" alt="ESR" class="w-full">
                <figcaption>
                    <h3 class="text-devarana-blue text-2xl py-2 pr-30">ESR</h3>
                    <p class="text-devarana-graph font-mulish pr-30">Demostramos nuestro compromiso de responsabilidad social con el reconocimiento anual otorgado por Cemefi y AliaRSE.</p>
                </figcaption>
                <x-icon-esr class="lg:w-[150px] w-[100px] certificacionLogo"/>
            </figure>
        </div>
        <div class="col-span-12 lg:col-span-4">
            <figure class="snip1401">
                <source srcset="{{ asset('img/nuestro-equipo/GPTW.webp')}}" type="image/webp" class="w-full">
                <source srcset="{{ asset('img/nuestro-equipo/GPTW.jpg')}}" type="image/jpeg" class="w-full">
                <img src="{{ asset('img/nuestro-equipo/GPTW.jpg')}}" alt="GPTW" class="w-full">
                <figcaption>
                    <h3 class="text-devarana-blue text-2xl py-2">GPTW</h3>
                    <p class="text-devarana-graph">Impulsamos políticas y prácticas que mejoran la calidad de vida dentro de nuestra organización, certificándonos desde 2019.</p>
                </figcaption>
                <x-icon-gptw class="lg:w-[100px] w-[80px] certificacionLogo"/>
            </figure>
        </div>
        <div class="col-span-12 lg:col-span-4">
            <figure class="snip1401">
                <source srcset="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.webp')}}" type="image/webp" class="w-full">
                <source srcset="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.jpg')}}" type="image/jpeg" class="w-full">
                <img src="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.jpg')}}" alt="SERVICIO-LEGENDARIO" class="w-full">
                <figcaption>
                    <h3 class="text-devarana-blue text-2xl py-2">Servicio Legendario</h3>
                    <p class="text-devarana-graph">Comercialización profesional de desarrollos inmobiliarios premium Certificado 10017372 QM 15</p>
                </figcaption>
                
                <x-icon-iso class="lg:w-[120px] w-[90px] certificacionLogo"/>

            </figure>
        </div>
    </div>
    <div class="flex pb-20">
        <x-link href="https://mx.linkedin.com/company/devarana" target="_blank" class="m-auto block"> Conoce nuestras vacantes </x-link>
    </div>

</div>

@endsection
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset("css/ihover.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("css/nuestro-equipo.css")}}" />
@endsection

@section("scripts")


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/nuestro-equipo/index.js') }}"></script>

@endsection
