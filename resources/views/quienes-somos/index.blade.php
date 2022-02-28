@extends('layouts.app')
@section('content')

<x-nav class="bg-devarana-gray text-devarana-pearl">
    <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div class="w-full bg-quienes-somos bg-no-repeat bg-cover bg-fixed bg-right-top md:h-[100vh] h-[600px]"></div>
{{-- <img src="{{ asset('img/quienes-somos/Quienesomos.png') }}" alt="Devarana Img" class="w-full"> --}}

{{-- <picture class="w-full">
    <source srcset="{{ asset('img/quienes-somos/Quienesomos.webp')}}" type="image/webp" class="w-full">
    <source srcset="{{ asset('img/quienes-somos/Quienesomos.png')}}" type="image/jpeg" class="w-full"> 
    <img src="{{ asset('img/quienes-somos/Quienesomos.png')}}" alt="Ave Devarana" class="w-full">
</picture> --}}





<div class="px-10 md:min-h-[510px]">
    <h1 class="text-devarana-midnight font-playfair text-5xl py-8">Quiénes Somos</h1>
    <div class="grid grid-cols-2">
        <button class="text-devarana-midnight md:col-span-1 col-span-2 md:py-0 py-10 font-playfair text-base tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 border-b-devarana-pink" data-id="origen" id="origen-tab">Origen, escencia y servicio legendario</button>
        <button class="text-devarana-midnight md:col-span-1 col-span-2 md:py-0 py-10 font-playfair text-base tabs-button w-full border-0 border-b-2 transition-all ease-in-out duration-700 " data-id="mision" id="mision-tab">Misión y Visión</button>
    </div>

    <div class="px-3 py-10">
        <div class="tabs-div transition-all duration-1000 ease-in-out" id="origen-div">
            <div class="grid grid-cols-2 gap-20">
                <div class="md:col-span-1 col-span-2">
                    <h2 class="text-devarana-midnight text-4xl font-playfair">Origen</h2> 
                    <p class="font-mulish py-2">Somos una empresa México-Holandesa con más de 8 años de experiencia en el sector inmobiliario, que nace con el deseo de construir desarrollos del más alto nivel.</p>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <h2 class="text-devarana-midnight text-4xl font-playfair">Servicio Legendario</h2> 
                    <p class="font-mulish py-2">Dedicación, ética y visión a largo plazo, así como un gran equipo de colaboradores apasionados que construyen día a día un servicio legendario.</p>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <h2 class="text-devarana-midnight text-4xl font-playfair">Esencia</h2> 
                    <p class="font-mulish py-2">Proyectos con personalidad y acabados exclusivos, que nos permiten ofrecer una inigualable calidad de vida y gran plusvalía.</p>
                </div>
            </div>
        </div>
        <div class="tabs-div transition-all duration-1000 ease-in-out hidden" id="mision-div">
            <div class="grid grid-cols-2 gap-20">
                <div class="md:col-span-1 col-span-2">
                    <h2 class="text-devarana-midnight text-4xl font-playfair">Misión</h2>
                    <p class="font-mulish py-2">Inspiramos al mundo creando espacios únicos con amor y pasión, cuidando nuestro entorno, la rentabilidad y el bienestar de nuestros clientes.</p>
                </div>
                <div class="md:col-span-1 col-span-2">
                    <h2 class="text-devarana-midnight text-4xl font-playfair">Visión</h2>
                    <p class="font-mulish py-2">Seremos el referente en la creación de desarrollos inmobiliarios extraordinarios en las zonas estratégicas de México, destacando en diseño, calidad y servicio.</p>
                </div>
            </div>
        </div>
    </div>

</div>



<div>
    <h4 class="text-devarana-midnight font-playfair text-5xl py-6 text-center"> Nuestros valores </h4>

    <div class="swiper mySwiper text-devarana-graph max-w-[1000px] mx-auto my-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3 z-10">La excelencia está en nuestro ADN</h4>
                    <p class="text-devarana-pearl text-sm">Buscamos la excelencia en todo lo que hacemos y damos todos los días lo mejor de nosotros mismos para vivir plenamente y sentirnos felices.</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/ADN-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3">La innovación nos distingue</h4>
                    <p class="text-devarana-pearl text-sm">Buscamos la excelencia en todo lo que hacemos y damos todos los días lo mejor de nosotros mismos para vivir plenamente y sentirnos felices.</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/INNOVACION-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3">Lo extraordinario es primero</h4>
                    <p class="text-devarana-pearl text-sm">La atención en los detalles, nuestro servicio legendario y esfuerzo por la satisfacción total, son parte de nuestra esencia.</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/EXTRAORDINARIO-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3">Inspiramos con amor</h4>
                    <p class="text-devarana-pearl text-sm">El amor verdadero es preeminente en esta vida y nos motiva a hacer el bien en todo lo que emprendemos. Con nuestras acciones tratamos de hacer de este mundo un lugar mejor</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/INSPIRAMOS-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3">Somos apasionados</h4>
                    <p class="text-devarana-pearl text-sm">Buscamos nuestra esencia para dedicarnos a lo que amamos y hacer nuestro trabajo siempre con pasión. ¡Nos levantamos cada día con entusiasmo para enfrentar los retos que encontramos en nuestro camino!</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/APASIONADOS-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cursor-pointer rounded-lg bg-devarana-pink flex w-[300px] h-[210px] flex-col text-center p-3 m-auto relative">
                    <h4 class="text-2xl text-devarana-pearl py-3">Espíritu triunfador </h4>
                    <p class="text-devarana-pearl text-sm">¡Somos optimistas, nos enfocamos en lo positivo y ante cualquier situación nos acompaña nuestro espíritu triunfador!</p>
                    <div class="absolute aboslute top-0 left-0 z-0">
                        <img src="{{ asset('img/quienes-somos/valores/ESPÍRITU-DEVARANA.png') }}" alt="Adn Devarana" width="70px" height="70px" class="opacity-20">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>
@endsection




@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
    
@section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/quienes-somos/index.js') }}"></script>
@endsection