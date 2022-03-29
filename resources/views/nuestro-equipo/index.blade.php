@extends('layouts.app')
@section('content')

<x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png">    
    <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav>
</x-nav>

<div id="header" class="bg-devarana-hazelnut grid grid-cols-12 mb-36 relative -z-30">
{{-- <div id="header" class="bg-devarana-hazelnut grid grid-cols-12 -z-30">
    <div class="col-span-10 m-auto grid grid-cols-12 w-full col-start-2 pb-20 gap-10 z-20">
        <img src="{{ asset("img/nuestro-equipo/HEADER.jpg") }}" alt="" class="w-full md:col-span-8 translate-y-40 -z-20">
        <div class="md:col-span-4 z-30">
            <h1 class="md:block hidden text-devarana-blue md:text-4xl lg:text-5xl font-playfair my-auto translate-y-[400%] ">¿Por qué <span class="w-full inline-block z-30 tracking-widest">DEVARANA?</span></h1>        
        </div>
        <div class="col-span-5 col-start-7">
            <img src="{{ asset("img/nuestro-equipo/svg/NUESTRO_EQUIPO.svg") }}" alt="nuestro equipo" class="-z-10 -translate-y-[200%]"> 
        </div>
    </div> --}}

    
    <div class="max-w-[80%] md:mt-auto md:-mb-[5%] -mb-[30%] flex md:col-span-8 md:-z-20 md:pt-40 col-span-12 mx-auto pt-28">
        <img src="{{ asset("img/nuestro-equipo/HEADER.jpg") }}" alt="" class="w-full md:pl-10">
    </div>
    <h1 class="md:block hidden text-devarana-blue text-4xl lg:text-5xl font-playfair my-auto col-span-4">¿Por qué <span class="text-4xl lg:text-5xl w-full inline-block z-30 tracking-widest">DEVARANA?</span></h1>
    <h1 class="md:hidden block drop-shadow-lg -mt-36 pl-10 text-4xl  font-playfair col-span-12 span-4 text-devarana-pearl tracking-wider -translate-x-5 translate-y-2">Nuestro equipo</h1>
    <img src="{{ asset("img/nuestro-equipo/svg/NUESTRO_EQUIPO.svg") }}" alt="nuestro equipo" class="absolute max-w-[50%] md:ml-auto top-0 bottom-0 left-0 right-0 my-auto px-10 -z-10 -translate-x-5 md:-translate-y-1/4 md:-translate-x-1/4 -translate-y-2/4">
</div>

<div class="py-28">
    <div class="grid grid-cols-12 md:gap-10">
        <p class="col-span-10 col-start-2 md:col-span-7 text-devarana-blue text-center lg:px-32 md:px-24  my-auto">
            Dedicación, ética y visión a largo plazo, así como un gran equipo de colaboradores apasionados que construyen día a día un servicio legendario.
        </p>
        <div class="grid md:grid-cols-4 grid-cols-2 md:col-span-5 col-span-12">
            <div class="col-span-1">
                <x-icon-desarrollos class="py-4 w-16 h-24 m-auto fill-devarana-blue"/>
                <p class="text-devarana-pink text-center font-playfair"> <span class="md:inline-block font-bold w-full">4</span> Desarrollos </p>
            </div>
            <div class="col-span-1">
                <x-icon-colaboradores class="py-4 w-16 h-24 m-auto fill-devarana-blue"/>
                <p class="text-devarana-pink text-center font-playfair"> <span class="md:inline-block font-bold w-full">40+</span> Colaboradores </p>
            </div>
            <div class="col-span-1">
                <x-icon-residentes class="py-4 w-14 h-24 m-auto fill-devarana-blue"/>
                <p class="text-devarana-pink text-center font-playfair"> <span class="md:inline-block font-bold w-full">2.5k</span> Residentes satisfechos </p>
            </div>
            <div class="col-span-1">
                <x-icon-hectareas class="py-4 w-14 h-24 m-auto fill-devarana-blue"/>
                <p class="text-devarana-pink text-center font-playfair"> <span class="md:inline-block font-bold w-full">8+</span>  Hectáreas construidas </p>
            </div>
        </div>
    </div>
</div>

<div class="relative">
    <div class="grid grid-cols-12">
        <div class="md:col-start-4 md:col-end-10 md:col-span-6 col-span-1 col-start-2">
            <img src="{{ asset("img/nuestro-equipo/svg/TESTIMONIOS.svg") }}" alt="testimonios" class="w-full px-10 translate-y-4 md:translate-y-8 md:-translate-x-1/3 -translate-x-10">
            <h2 class="lg:text-6xl md:text-5xl text-4xl font-playfair text-center text-devarana-blue">Colaboradores</h2>
        </div>
    </div>
</div>
<div class="py-20">
    <div class="md:block hidden bg-white blur-sm hover:blur-none py-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="flex m-auto col-span-6">
                <picture class="w-full hidden group-hover:block">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO3.png')}}" alt="Devarana Itze Vega" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO3.png')}}" alt="Devarana Itze Vega" class="w-full">
                </picture>
            </div>
            <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-6">
                <p class="font-mulish py-4">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <h3 class="">Itze Vega</p>
                <p class="font-mulish group-hover:text-devarana-pink">Gerente de Atención a Clientes.</p>
            </div>
        </div>
    </div>
    <div class="md:block hidden bg-devarana-pearl blur-sm hover:blur-none py-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                <p class="font-mulish py-4">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <h3 class="">Itze Vega</p>
                <p class="font-mulish group-hover:text-devarana-pink">Gerente de Atención a Clientes.</p>
            </div>
            <div class="flex my-auto mr-auto col-span-4">
                <picture class="w-full hidden group-hover:block">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO4.png')}}" alt="Luis Rubio" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO4.png')}}" alt="Luis Rubio" class="w-full">
                </picture>
            </div>
        </div>
    </div>
    <div class="md:block hidden bg-white blur-sm hover:blur-none py-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="flex m-auto col-span-6">
                <picture class="w-full  hidden group-hover:block">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO1.png')}}" alt="Melisa Muñoz" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO1.png')}}" alt="Melisa Muñoz" class="w-full">
                </picture>
            </div>
            <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-6">
                <p class="font-mulish py-4">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <h3 class="">Itze Vega</p>
                <p class="font-mulish group-hover:text-devarana-pink">Gerente de Atención a Clientes.</p>
            </div>
        </div>
    </div>
    <div class="bg-devarana-pearl md:blur-sm md:hover:blur-none py-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="md:max-w-[450px] ml-auto mr-10 my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base text-right col-span-8">
                <p class="font-mulish py-4">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <h3 class="">Fátima Ortiz</p>
                <p class="font-mulish text-devarana-pink md:text-devarana-blue md:group-hover:text-devarana-pink">Gerente de Calidad e Innovación.</p>
            </div>
            <div class="flex my-auto mr-auto col-span-4">
                <picture class="w-full block md:hidden md:group-hover:block">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONO5.png')}}" alt="Fátima Ortiz" class="w-full">
                </picture>
                <picture class="w-full hidden md:block md:group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO5.png')}}" alt="Melisa Muñoz" class="w-full">
                </picture>
            </div>
        </div>
    </div>
    <div class="md:block hidden bg-white blur-sm hover:blur-none py-10 transition-all duration-200 ease-in-out group">
        <div class="grid grid-cols-12">
            <div class="flex m-auto col-span-6">
                <picture class="w-full  hidden group-hover:block">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO2.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO2.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/DEVARANA-TESTIMONIO2.png')}}" alt="Gustavo Guerrero" class="w-full">
                </picture>
                <picture class="w-full block group-hover:hidden">
                    {{-- <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONO2.webp')}}" type="image/webp" class="w-full"> --}}
                    <source srcset="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO2.png')}}" type="image/png" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/A-DEVARANA-TESTIMONIO2.png')}}" alt="Melisa Muñoz" class="w-full">
                </picture>
            </div>
            <div class="md:max-w-[450px] my-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base col-span-6">
                <p class="font-mulish py-4">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <h3 class="">Itze Vega</p>
                <p class="font-mulish group-hover:text-devarana-pink">Gerente de Atención a Clientes.</p>
            </div>
        </div>
    </div>
</div>

<div class="md:px-20 px-10 py-10">
    <div class="relative">
        <div class="grid grid-cols-12">
            <div class="md:col-start-4 md:col-end-10 md:col-span-5 col-span-10 col-start-2">
                <img src="{{ asset("img/nuestro-equipo/svg/SOMOS.svg") }}" alt="somos" class="w-full px-10 lg:px-24 translate-y-4 md:translate-y-8 md:-translate-x-1/3 -translate-x-10">
                <h2 class="lg:text-6xl md:text-5xl text-4xl font-playfair text-center text-devarana-blue">Orgullosamente</h2>
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="swiper mySwiper w-full">
            <div class="swiper-wrapper">
              <div class="swiper-slide py-10 bg-devarana-pearl md:min-h-0 min-h-[920px]">
                <div class="grid grid-cols-12 gap-16">
                    <div class="col-span-12 md:col-span-5 my-auto">
                        <h3 class="text-devarana-blue text-2xl py-2">ESR</h3>
                        <p class="text-devarana-blue py-2">Empresa Socialmente Responsable</p>
                        <p class="text-devarana-graph py-4">Demostramos nuestro compromiso de responsabilidad social con el reconocimiento anual otorgado por Cemefi y AliaRSE.</p>
                        <img src="{{ asset("img/nuestro-equipo/svg/DEVARANA-ESR.svg") }}" alt="" class="w-[150px]">
                    </div>
                    <div class="col-span-12 md:col-span-7">
                        <picture class="w-full block group-hover:hidden">
                            {{-- <source srcset="{{ asset('img/nuestro-equipo/ESR.webp')}}" type="image/webp" class="w-full"> --}}
                            <source srcset="{{ asset('img/nuestro-equipo/ESR.jpg')}}" type="image/jpg" class="w-full"> 
                            <img src="{{ asset('img/nuestro-equipo/ESR.jpg')}}" alt="ESR" class="w-full">
                        </picture>
                    </div>
                </div>  
    
              </div>
              <div class="swiper-slide py-10 bg-devarana-pearl md:min-h-0 min-h-[920px]">
                <div class="grid grid-cols-12 gap-16">
                    <div class="col-span-12 md:col-span-5 my-auto">
                        <h3 class="text-devarana-blue text-2xl py-2">GPTW</h3>
                        <p class="text-devarana-blue py-2">Great Place To Work</p>
                        <p class="text-devarana-graph py-4">Impulsamos políticas y prácticas que mejoran la calidad de vida dentro de nuestra organización, certificándonos desde 2019.</p>
                        <img src="{{ asset("img/nuestro-equipo/svg/DEVARANA-GPTW.svg") }}" alt="" class="w-[80px]">
                    </div>
                    <div class="col-span-12 md:col-span-7">
                        <picture class="w-full block group-hover:hidden">
                            {{-- <source srcset="{{ asset('img/nuestro-equipo/GPTW.webp')}}" type="image/webp" class="w-full"> --}}
                            <source srcset="{{ asset('img/nuestro-equipo/GPTW.jpg')}}" type="image/jpg" class="w-full"> 
                            <img src="{{ asset('img/nuestro-equipo/GPTW.jpg')}}" alt="GPTW" class="w-full">
                        </picture>
                    </div>
                </div>  
    
              </div>
              <div class="swiper-slide py-10 bg-devarana-pearl md:min-h-0 min-h-[920px]">
                <div class="grid grid-cols-12 gap-16">
                    <div class="col-span-12 md:col-span-5 my-auto">
                        <h3 class="text-devarana-blue text-2xl py-2">Servicio Legendario</h3>
                        <p class="text-devarana-blue py-2">ISO 9001:2015</p>
                        <p class="text-devarana-graph py-4">Comercialización profesional de desarrollos inmobiliarios premium Certificado 10017372 QM 15</p>
                        <img src="{{ asset("img/nuestro-equipo/svg/DEVARANA-ISO.svg") }}" alt="" class="w-[80px]">
                    </div>
                    <div class="col-span-12 md:col-span-7">
                        <picture class="w-full block group-hover:hidden">
                            {{-- <source srcset="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.webp')}}" type="image/webp" class="w-full"> --}}
                            <source srcset="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.jpg')}}" type="image/jpg" class="w-full"> 
                            <img src="{{ asset('img/nuestro-equipo/SERVICIO-LEGENDARIO.jpg')}}" alt="SERVICIO-LEGENDARIO" class="w-full">
                        </picture>
                    </div>
                </div>  
    
              </div>
            </div>
            <div class="swiper-scrollbar" style=""></div>
            
            
        </div>
    </div>
</div>



<div class="flex pb-20">
 <x-link href="https://mx.linkedin.com/company/devarana" target="_blank" class="m-auto block"> Conoce nuestras vacantes </x-link>
</div>

   
@endsection
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset("css/nuestro-equipo.css")}}" />
@endsection
    
@section("scripts")


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/nuestro-equipo/index.js') }}"></script>

@endsection