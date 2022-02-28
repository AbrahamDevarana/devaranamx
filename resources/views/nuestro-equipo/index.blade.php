@extends('layouts.app')
@section('content')


<x-nav class="bg-devarana-gray text-devarana-pearl">
    <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div>
    <div class="w-full bg-nuestro-equipo bg-no-repeat bg-cover bg-fixed bg-center md:h-[100vh] h-[600px] hidden md:block"></div>
    <picture class="w-full">
        <source srcset="{{ asset('img/nuestro-equipo/Nuestro_equipo.webp')}}" type="image/webp" class="w-full">
        <source srcset="{{ asset('img/nuestro-equipo/Nuestro_equipo.png')}}" type="image/jpeg" class="w-full"> 
        <img src="{{ asset('img/nuestro-equipo/Nuestro_equipo.png')}}" alt="Inauguración Devarana" class="w-full md:hidden">
    </picture>
</div>

<div class="px-5 md:px-20 py-10">
    <div class="grid grid-cols-2">
        <div class="grid grid-cols-2 text-devarana-blue text-center md:col-span-1 col-span-2">
            <div class="py-8">
                <p class="font-mulish text-base"> <span class="font-playfair text-3xl w-full inline-block">4</span> Desarrollos en Querétaro </p>
            </div>
            <div class="py-8">
                <p class="font-mulish text-base"> <span class="font-playfair text-3xl w-full inline-block">40+</span> Colaboradores  </p>
            </div>
            <div class="py-8">
                <p class="font-mulish text-base"> <span class="font-playfair text-3xl w-full inline-block">2590</span> Residentes satisfechos </p>
            </div>
            <div class="py-8">
                <p class="font-mulish text-base"> <span class="font-playfair text-3xl w-full inline-block">8+</span> Hectáreas construidas </p>
            </div>
        </div>

        <div class="py-8 text-devarana-blue m-auto md:px-10 md:col-span-1 col-span-2">
            <div class="flex">
                <p class="text-base font-mulish">¿Porqué DEVARANA? </p> 
                <hr class="border-devarana-blue  mx-3 w-1/5 my-auto border">
            </div>
            <h1 class="text-5xl font-playfair py-6">Nuestra experiencia <br> habla por nosotros</h1>
            <p class="md:text-base font-mulish">Con más de una década de trayectoria. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<div>
    <h2 class="text-3xl font-playfair text-center text-devarana-blue">Testimonios de <span class="italic">nuestros colaboradores</span></h2>
    <div>
        <div class="grid grid-cols-2">
            <div class="flex m-auto">
                <picture class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Estefania.webp')}}" type="image/webp" class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Estefania.png')}}" type="image/jpeg" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/COLABORADORES-Estefania.png')}}" alt="Devarana Estefania" class="w-full">
                </picture>
            </div>
            <div class="text-center md:w-3/6 m-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base">
                <p class="font-playfair">“DEVARANA es un lugar que nos recuerda la importancia de hacer las cosas por convicción, amor y pasión”</p>
                <p class="font-mulish">Estefanía Domínguez</p>
                <p class="font-playfair">Gerente de Atención a Clientes.</p>
            </div>
        </div>
    </div>
    <div class="bg-light-blue">
        <div class="grid grid-cols-2">
            <div class="text-center md:w-3/6 m-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base">
                <p class="font-playfair">“Para mí, DEVARANA es una oportunidad de colaborar en lo que me apasiona y aprender constantemente”</p>
                <p class="font-mulish">Fátima Ortiz</p>
                <p class="font-playfair">Gerente de Innovación y Calidad.</p>
            </div>
            <div class="flex m-auto">
                <picture class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Fatima.webp')}}" type="image/webp" class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Fatima.png')}}" type="image/jpeg" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/COLABORADORES-Fatima.png')}}" alt="Devarana Fátima" class="w-full">
                </picture>
            </div>
        </div>
    </div>
    <div>
        <div class="grid grid-cols-2">
            <div class="flex m-auto">
                <picture class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Gus.webp')}}" type="image/webp" class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Gus.png')}}" type="image/jpeg" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/COLABORADORES-Gus.png')}}" alt="Devarana Gustavo" class="w-full">
                </picture>
            </div>
            <div class="text-center md:w-3/6 m-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base">
                <p class="font-playfair">“Pertenecer al equipo DEVARANA es algo que comparto con gran orgullo.”</p>
                <p class="font-mulish">Gustavo Ruíz Velazco<p>
                <p class="font-playfair">Asesor Comercial Sr.</p>
            </div>
        </div>
    </div>

    <div class="bg-light-blue">
        <div class="grid grid-cols-2">
            <div class="text-center md:w-3/6 m-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base">
                <p class="font-playfair">“Trabajar en DEVARANA ha sido una de las mejores decisiones que he tomado en la vida.”</p>
                <p class="font-mulish">Santiago Alarcón</p>
                <p class="font-playfair">Gerente de Diseño y Arquitectura.</p>
            </div>
            <div class="flex m-auto">
                <picture class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Santiago.webp')}}" type="image/webp" class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Santiago.png')}}" type="image/jpeg" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/COLABORADORES-Santiago.png')}}" alt="Devarana Santiago" class="w-full">
                </picture>
            </div>
        </div>
    </div>
    <div>
        <div class="grid grid-cols-2">
            <div class="flex m-auto">
                <picture class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Luis.webp')}}" type="image/webp" class="w-full">
                    <source srcset="{{ asset('img/nuestro-equipo/COLABORADORES-Luis.png')}}" type="image/jpeg" class="w-full"> 
                    <img src="{{ asset('img/nuestro-equipo/COLABORADORES-Luis.png')}}" alt="Devarana Luis" class="w-full">
                </picture>
            </div>
            <div class="text-center md:w-3/6 m-auto px-4 md:px-10 text-devarana-blue text-sm md:text-base">
                <p class="font-playfair">“Me siento muy orgulloso y agradecido por ser parte de DEVARANA.”</p>
                <p class="font-mulish">Luis Rubio</p>
                <p class="font-playfair">Director de Operaciones.</p>
            </div>
        </div>
    </div>


    <div id="somos">
        <div class="swiper secondSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-devarana-pink md:h-[600px] h-[400px]">
                        <div class="max-w-2xl flex flex-row relative m-auto w-full h-full flex-wrap">
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex z-0">
                                <div class="bg-white opacity-10 w-[400px] h-[400px] m-auto"> </div>
                            </div>
                            <div class="md:w-8/12 grid content-center z-10">
                                <h3 class="text-devarana-pearl text-4xl py-4 font-playfair font-normal text-center md:text-left">Somos <span class="italic">orgullosamente</span></h3>
                                <p class="text-devarana-pearl md:pr-10 text-center md:text-left text-base">Impulsamos políticas y prácticas que mejoran la calidad de vida dentro de nuestra organización certificándonos como GPTW desde 2019.</p>
                            </div>
                            <div class="md:w-2/12 content-center m-auto z-10 w-[100px]">
                                <picture class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/CertificacionGPTW-01.webp')}}" type="image/webp" class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/CertificacionGPTW-01.png')}}" type="image/jpeg" class="w-full"> 
                                    <img src="{{ asset('img/certificaciones/CertificacionGPTW-01.png')}}" alt="Great Place To Work Devarana" class="w-full">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-devarana-blue md:h-[600px] h-[400px]">
                        <div class="max-w-2xl flex flex-row relative m-auto w-full h-full flex-wrap">
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex z-0">
                                <div class="bg-white opacity-10 w-[400px] h-[400px] m-auto"> </div>
                            </div>
                            <div class="md:w-8/12 grid content-center z-10">
                                <h3 class="text-devarana-pearl text-4xl py-4 font-playfair font-normal text-center md:text-left">Somos <span class="italic">orgullosamente</span></h3>
                                <p class="text-devarana-pearl pr-10 text-center md:text-left text-base">Demostramos nuestro compromiso de
                                    responsabilidad social con el reconocimiento anual otorgado por Cemefi y aliaRSE; ante colaboradores, inversionistas, clientes, autoridades y la sociedad.</p>
                            </div>
                            <div class="md:w-4/12 content-center m-auto z-10 w-[200px]">
                                <picture class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/ESRactual-01.webp')}}" type="image/webp" class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/ESRactual-01.png')}}" type="image/jpeg"> 
                                    <img src="{{ asset('img/certificaciones/ESRactual-01.png')}}" alt="ESR_Devarana">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-devarana-babyblue md:h-[600px] h-[400px]">
                        <div class="max-w-2xl flex flex-row relative m-auto w-full h-full flex-wrap">
                            <div class="absolute top-0 left-0 right-0 bottom-0 flex z-0">
                                <div class="bg-white opacity-10 w-[400px] h-[400px] m-auto"> </div>
                            </div>
                            <div class="md:w-8/12 grid content-center z-10">
                                <h3 class="text-devarana-pearl text-4xl py-4 font-playfair font-normal text-center md:text-left">Somos <span class="italic">orgullosamente</span></h3>
                                <p class="text-devarana-pearl pr-10 text-center md:text-left text-base">“Servicio Legendario”
                                    (Comercialización profesional de desarrollos inmobiliarios premium)
                                    Certificado: 10017372 QM15.</p>
                            </div>
                            <div class="md:w-4/12 content-center m-auto z-10 w-[200px]">
                                <picture class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/ISO9001-01.webp')}}" type="image/webp" class="w-full">
                                    <source srcset="{{ asset('img/certificaciones/ISO9001-01.png')}}" type="image/jpeg" class="w-full"> 
                                    <img src="{{ asset('img/certificaciones/ISO9001-01.png')}}" alt="ISO9001_Devarana" class="w-full">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-contacto" id="form">
        <div class="px-10 py-24 m-auto flex flex-col max-w-[800px]">
            <h2 class="text-center text-devarana-midnight text-5xl font-playfair"> Únete a este gran equipo </h2>
            <p class="text-center text-devarana-gray text-base font-mulish py-8"> Queremos conocerte, déjanos un mensaje <br> adjuntando tu CV y te responderemos en breve. </p>

            <form action="{{ route('integracion') }}" method="POST">
                @csrf
                <input type="text" required name="nombre" value="{{old('nombre')}}" class="w-full my-2 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish" placeholder="Nombre y apellido">
                @error('nombre')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
                <input type="email" required name="email" value="{{old('email')}}" class="w-full my-2 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish " placeholder="Email">
                @error('email')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
                <input type="tel" required value="{{old('telefono')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="telefono" class="w-full my-2 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish" placeholder="Teléfono">
                @error('telefono')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
                <textarea name="mensaje" required class="w-full my-2 rounded border-devarana-babyblue placeholder:font-mulish" rows="5" placeholder="Mensaje">{{old('mensaje')}}</textarea>
                @error('mensaje')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
                <div class="flex">
                    <input type="submit" value="Enviar" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}" data-callback='onSubmit' data-action='submit' class="g-recaptcha rounded-3xl bg-devarana-pink text-devarana-pearl border-0 ml-auto py-0.5 px-10 cursor-pointer hover:bg-devarana-pearl hover:text-devarana-pink transition duration-500 ease-in-out">
                </div>
            </form>

        </div>
    </div>
    
@endsection
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}
@endsection
    
@section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/nuestro-equipo/index.js') }}"></script>


    @if($errors->any())
        <script>
            document.getElementById('form').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        </script>
    @endif

    
    <script>
        // function onSubmit(token) {
        //   document.getElementById("demo-form").submit();
        // }
    </script>
@endsection