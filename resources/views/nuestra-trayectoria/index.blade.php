@extends('layouts.app')
@section('content')

<x-nav class="bg-devarana-gray text-devarana-pearl">
    <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>



<div class="w-full bg-trayectoria bg-no-repeat bg-cover bg-fixed bg-center md:h-[100vh] h-[600px] hidden md:block"></div>
<picture>
    <source srcset="{{ asset('img/trayectoria/royalview.png')}}" type="image/png"> 
    <source srcset="{{ asset('img/trayectoria/royalview.webp')}}" type="image/webp">
    <img src="{{ asset('img/trayectoria/royalview.png')}}" alt="Inauguración Devarana" class="w-full md:hidden">
</picture>

<h1 class="text-5xl font-playfair text-devarana-midnight text-center py-6">Nuestra trayectoria</h1>

    <div class="grid grid-cols-12 w-10/12 m-auto gap-y-10 py-6">
        <div class="col-span-12 md:col-span-6 m-auto md:px-14 relative">
            <div class="md:-rotate-90 uppercase font-mulish text-devarana-midnight font-bold text-base md:absolute md:-left-11 md:top-[45%]">
                Desarrollo 1
            </div>
            <h2 class="text-5xl font-playfair text-devarana-midnight">Grand Mayran</h2>
            <div class="flex py-4">
                <p class="text-base font-mulish">Ubicación <span class="font-bold inline-block w-full">Querétaro, Querétaro</span></p>
                <p class="text-base font-mulish">Año <span class="font-bold inline-block w-full">2012 - 2013</span></p>
            </div>
            <p class="md:w-5/6 text-devarana-midnight"> Un proyecto ubicado en el Fraccionamiento cañadas del lago sur de la Ciudad de Querétaro. Conformado por 35 residencias diseñadas y contruidas con el talento de nuestro propio equipo. El éxito comercial nos impulsó a continuar con nuestro siguiente desarrollo. </p>
        </div>
        <div class="col-span-12 md:col-span-6">
            <picture>
                <source srcset="{{ asset('img/trayectoria/Grand-Mayran-NT.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/Grand-Mayran-NT.jpg')}}" type="image/jpeg"> 
                <img src="{{ asset('img/trayectoria/Grand-Mayran-NT.jpg') }}" alt="Grand Mayran" class="w-full">
            </picture>
            
        </div>
    </div>

    <div class="grid grid-cols-12 w-10/12 m-auto md:gap-x-10 gap-y-4 py-6">
        <div class="col-span-12 md:col-span-9">
            <picture>
                <source srcset="{{ asset('img/trayectoria/Grand-Mayran2-NT.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/Grand-Mayran2-NT.jpg')}}" type="image/jpeg"> 
                <img src="{{ asset('img/trayectoria/Grand-Mayran2-NT.jpg') }}" alt="Grand Mayran" class="w-full">
            </picture>
        </div>
        <div class="col-span-12 md:col-span-3 md:mt-auto md:w-5/6">
            <p class=" text-devarana-midnight">Un proyecto ubicado en el Fraccionamiento cañadas del lago sur de la Ciudad de Querétaro. </p>
        </div>
    </div>

    <div class="md:w-10/12 md:ml-auto py-6">
        <picture>
            <source srcset="{{ asset('img/trayectoria/Obra-Nt.webp')}}" type="image/webp">
            <source srcset="{{ asset('img/trayectoria/Obra-Nt.jpg')}}" type="image/jpeg"> 
            <img src="{{ asset('img/trayectoria/Obra-Nt.jpg') }}" alt="Obra de trabajo" class="w-full">
        </picture>
    </div>


    <div class="grid grid-cols-12 w-10/12 m-auto gap-y-10 py-6">
        <div class="col-span-12 md:col-span-6">
            <picture>
                <source srcset="{{ asset('img/trayectoria/UpperCondesa-NT.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/UpperCondesa-NT.jpg')}}" type="image/jpeg"> 
                <img src="{{ asset('img/trayectoria/UpperCondesa-NT.jpg') }}" alt="UpperCondesa" class="w-full">
            </picture>
            
        </div>
        <div class="col-span-12 md:col-span-6 m-auto md:pl-20 relative">
            <div class="md:-rotate-90 uppercase font-mulish text-devarana-midnight font-bold text-base md:absolute md:-left-4 md:top-[45%]">
                Desarrollo 2
            </div>

            <h2 class="text-5xl font-playfair text-devarana-midnight">Upper Condesa</h2>
            <div class="flex py-4">
                <p class="text-base font-mulish text-devarana-midnight">Ubicación <span class="font-bold inline-block w-full">Juriquilla. Querétaro</span></p>
                <p class="text-base font-mulish text-devarana-midnight">Año <span class="font-bold inline-block w-full">2014-2016</span></p>
            </div>
            <p class="md:w-5/6 text-devarana-midnight text-base"> Un proyecto de 46 residencias en la exitosa zona de Juriquilla, dentro de “La Condesa Juriquilla”, fraccionamiento desarrollado por la prestigiosa empresa DRT. Con los excelentes resultados decidimos incrementar nuestra inversión en el ramo inmobiliario y adquirimos los terrenos para los siguientes desarrollos </p>
        </div>
    </div>

    <div class="grid grid-cols-12 w-10/12 m-auto md:gap-y-10 gap-y-4 py-6 relative">
        <div class="md:-rotate-90 uppercase font-mulish text-devarana-midnight font-bold text-base md:absolute md:-left-11 md:top-[50%] col-span-12">
            Desarrollo 3
        </div>
        <div class="col-span-12 md:col-span-6 m-auto md:px-14">
            <h2 class="text-5xl font-playfair text-devarana-midnight">High Gardens</h2>
            <div class="flex py-4 relative">
                <p class="text-base font-mulish text-devarana-midnight">Ubicación <span class="font-bold inline-block w-full">Zibatá. Querétaro.</span></p>
                <p class="text-base font-mulish text-devarana-midnight">Año <span class="font-bold inline-block w-full">2017-2018</span></p>
            </div>
            <p class="md:w-5/6 text-devarana-midnight text-base"> Un proyecto ubicado en el Fraccionamiento cañadas del lago sur de la Ciudad de Querétaro. Conformado por 35 residencias diseñadas y contruidas con el talento de nuestro propio equipo. El éxito comercial nos impulsó a continuar con nuestro siguiente desarrollo. </p>
        </div>
        <div class="col-span-12 md:col-span-6">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HighGardens-NT.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HighGardens-NT.png')}}" type="image/png"> 
                <img src="{{ asset('img/trayectoria/HighGardens-NT.png') }}" alt="Grand Mayran" class="w-full">
            </picture>
            
        </div>
    </div>

    <div class="grid grid-cols-2 w-10/12 m-auto gap-y-10 py-6">
        <div class="col-span-2 md:col-span-1">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HighGardens.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HighGardens.png')}}" type="image/png"> 
                <img src="{{ asset('img/trayectoria/HighGardens.png') }}" alt="Grand Mayran" class="lg:-mt-[10%] md:absolute md:left-0 md:w-[45%]">
            </picture>
        </div>
        <div class="col-span-2 md:col-span-1">
            <picture>
                <source srcset="{{ asset('img/trayectoria/HighGardens-Nt3.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/HighGardens-Nt3.png')}}" type="image/png"> 
                <img src="{{ asset('img/trayectoria/HighGardens-Nt3.png') }}" alt="Grand Mayran" class="w-full">
            </picture>
        </div>
    </div>

    <div class="grid grid-cols-12 w-10/12 m-auto gap-y-10 lg:py-44 py-6">
        <div class="col-span-12 lg:col-span-6">
            <picture>
                <source srcset="{{ asset('img/trayectoria/RoyalView-Blue.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/RoyalView-Blue.jpg')}}" type="image/jpeg"> 
                <img src="{{ asset('img/trayectoria/RoyalView-Blue.jpg') }}" alt="Grand Mayran" class="lg:-mt-[10%] lg:absolute lg:left-0 lg:w-[47%]">
            </picture>
        </div>
        <div class="col-span-12 lg:col-span-6 m-auto md:pl-20 relative">
            <div class="md:-rotate-90 uppercase font-mulish text-devarana-midnight font-bold text-base md:absolute md:-left-4 md:top-[40%]">
                Desarrollo 4
            </div>
            <h2 class="text-5xl font-playfair text-devarana-midnight">Royal View</h2>
            <div class="flex py-4 relative">
                <p class="text-base font-mulish text-devarana-midnight">Ubicación <span class="font-bold inline-block w-full">Zibatá. Querétaro.</span></p>
                <p class="text-base font-mulish text-devarana-midnight">Año <span class="font-bold inline-block w-full">2019-2024</span></p>
            </div>
            <p class="md:w-5/6 text-devarana-midnight text-base">En el terreno contiguo a High Gardens se desarrolla Royal View. Por su ubicación y vistas escénicas; un ícono para la ciudad de Querétaro. DEVARANA ha incrementado de manera importante su inversión para crear un proyecto único de 240 departamentos, más de 30 amenidades y más de 9 mil m2 de área verdes y parques privados </p>
            <div class="md:w-5/6 flex py-8">
                <button class="rounded-3xl bg-devarana-pink text-devarana-pearl border-0 ml-auto py-0.5 px-10 cursor-pointer hover:bg-devarana-pearl hover:text-devarana-pink transition duration-500 ease-in-out">Preventa</button>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-12 w-10/12 m-auto gap-y-10 py-14 md:gap-x-10 lg:pb-36">
        <div class="col-span-12 md:col-span-5">
            <picture>
                <source srcset="{{ asset('img/trayectoria/RoyalView-NT2.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/RoyalView-NT2.png')}}" type="image/png"> 
                <img src="{{ asset('img/trayectoria/RoyalView-NT2.png') }}" alt="Grand Mayran" class="">
            </picture>
        </div>
        <div class="col-span-12 md:col-span-7 lg:mt-16">
            <picture>
                <source srcset="{{ asset('img/trayectoria/RoyalView-NT4.webp')}}" type="image/webp">
                <source srcset="{{ asset('img/trayectoria/RoyalView-NT4.png')}}" type="image/png"> 
                <img src="{{ asset('img/trayectoria/RoyalView-NT4.png') }}" alt="Grand Mayran" class="lg:absolute lg:right-0 lg:w-[50%]">
            </picture>
        </div>
    </div>


@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endsection
    
    @section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection