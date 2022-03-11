@extends('layouts.app')
@section('content')

<x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png">    
    <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav>
</x-nav>

<div id="header" class="bg-devarana-hazelnut sm:min-h-[800px] flex mb-36 relative">
    <img src="{{ asset("img/quienes-somos/svg/QUIENES_SOMOS.svg") }}" alt="quienes somos" class="absolute z-10 w-[50%] top-0 bottom-0 left-0 right-0 my-auto px-10">
    <div class="max-w-[80%] md:ml-auto mt-auto -mb-[5%] flex">
        <img src="{{ asset("img/quienes-somos/DEVARANA-QuienesSomos.jpg") }}" alt="" class="w-full pl-10">
        <img src="{{ asset("img/quienes-somos/DEVARANA-QuienesSomos.jpg") }}" alt="" class="w-full pl-10">
    </div>
</div>


<div class="grid grid-cols-12 max-w-[95%] md:max-w-[90%] lg:max-w-[80%] mx-auto gap-10 py-24">
    <div class="col-span-12 md:col-span-5 flex">
        <h1 class="m-auto text-2xl md:text-3xl lg:text-4xl text-devarana-blue">Somos creadores, arquitectos y diseñadores de lo extraordinario.</h1>
    </div>
    <div class="col-span-12 md:col-span-7">
        <div class="grid grid-cols-3">
            <button class="text-devarana-midnight md:col-span-1 col-span-3 md:py-0 py-10 font-playfair text-base tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 border-b-devarana-pink" data-id="origen" id="origen-tab">Origen</button>
            <button class="text-devarana-midnight md:col-span-1 col-span-3 md:py-0 py-10 font-playfair text-base tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 " data-id="mision" id="mision-tab">Misión</button>
            <button class="text-devarana-midnight md:col-span-1 col-span-3 md:py-0 py-10 font-playfair text-base tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 " data-id="vision" id="vision-tab">Visión</button>
        </div>
    
        <div class="px-3 py-10">
            <div class="tabs-div transition-all duration-1000 ease-in-out" id="origen-div">
                <p class="font-mulish py-2">Somos una empresa México-Holandesa con más de 10 años de experiencia en el sector inmobiliario, que nace con el deseo de construir desarrollos del más alto nivel.</p>
            </div>
            <div class="tabs-div transition-all duration-1000 ease-in-out hidden" id="mision-div">
                <p class="font-mulish py-2">Inspiramos al mundo creando espacios únicos con amor y pasión, cuidando nuestro entorno, la rentabilidad y el bienestar de nuestros clientes.</p>
            </div>
            <div class="tabs-div transition-all duration-1000 ease-in-out hidden" id="vision-div">
                <p class="font-mulish py-2">Seremos el referente en la creación de desarrollos inmobiliarios extraordinarios en las zonas estratégicas de México, destacando en diseño, calidad y servicio.</p>
            </div>
        </div>
    </div>
</div>


<div class="grid md:grid-cols-3 grid-cols-1 pb-10"> 
    <div class="row-span-2 col-span-2 md:col-span-1  relative">
        <h2 class="text-devarana-blue px-10 text-5xl xl:text-8xl py-20">Valores</h2>
        <img src="{{ asset('img/quienes-somos/svg/NUESTROS_VALORES.svg') }}" alt="nuestros valores" class="w-[80%] md:w-full top-10 md:top-12 absolute px-4">
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-apasionados class="w-10"/>
        <h3 class="py-3 text-lg">Somos apasionados</h3>
        <p class="font-mulish">Buscamos nuestra esencia para dedicarnos a lo que amamos y hacer nuestro trabajo siempre con pasión. ¡Nos levantamos cada día con entusiasmo para enfrentar los retos que encontramos en nuestro camino!</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-incluyentes class="w-10"/>
        <h3 class="py-3 text-lg">Somos incluyentes</h3>
        <p class="font-mulish">Vamos más allá de la tolerancia y hacemos siempre un esfuerzo por incluir a todos. El respeto a la diversidad nos hace una empresa incluyente.</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-triunfador class="w-10"/>
        <h3 class="py-3 text-lg">Espíritu triunfador</h3>
        <p class="font-mulish">¡Somos optimistas, nos enfocamos en lo positivo y ante cualquier situación nos acompaña nuestro espíritu triunfador!</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-innovacion class="w-10"/>
        <h3 class="py-3 text-lg">La innovación nos distingue</h3>
        <p class="font-mulish">¡Creemos firmemente en la constante innovación! Nos Ilusionan los retos y buscamos siempre estar a la vanguardia.</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-adn class="w-10"/>
        <h3 class="py-3 text-lg">La excelencia está en nuestro ADN</h3>
        <p class="font-mulish">Buscamos la excelencia en todo lo que hacemos y damos todos los días lo mejor de nosotros mismos para vivir plenamente y sentirnos felices.</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-amor class="w-10"/>
        <h3 class="py-3 text-lg">Inspiramos con amor</h3>
        <p class="font-mulish">El amor verdadero es preeminente en esta vida y nos motiva a hacer el bien en todo lo que emprendemos. Con nuestras acciones tratamos de hacer de este mundo un lugar mejor.</p>
    </div>
    <div class="col-span-2 md:col-span-1  transition-all duration-500 ease-in-out text-devarana-graph hover:text-devarana-pearl bg-transparent hover:bg-devarana-pink border md:pl-10 md:pr-20 md:py-16 p-10 hover:fill-devarana-pearl fill-devarana-graph">
        <x-icon-extraordinario class="w-10"/>
        <h3 class="py-3 text-lg">Lo extraordinario es primero</h3>
        <p class="font-mulish">La atención en los detalles, nuestro servicio legendario y esfuerzo por la satisfacción total, son parte de nuestra esencia.</p>
    </div>
    <div class="col-span-3 py-10 flex">
        <x-link href="/" class="m-auto block bg-transparent"> Conoce a nuestro equipo </x-link>
    </div>
</div>




@endsection


@section('styles')
@endsection
    
@section("scripts")
    <script src="{{ asset('js/quienes-somos/index.js') }}"></script>
@endsection