@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-gray" name="DevaranaLogo.png" hidden="hidden">    
        <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav>
    </x-nav>

    <div class="relative md:h-[100vh] h-[400px] overflow-hidden" id="header">
        <picture>
            <source srcset="{{ asset('img/home/Atardecer-render.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/home/Atardecer-render.png') }}" type="image/png">
            <img src="{{ asset("img/home/Atardecer-render.png") }}" alt="Atardecer Devarana" class="w-full transition duration-1000 absolute scale-110" id="bgHead">
        </picture>
        <picture>
            <source srcset="{{ asset('img/home/Devarana_Fachada.webp') }}" type="image/webp">
            <source srcset="{{ asset('img/home/Devarana_Fachada.png') }}" type="image/png">
                <img src="{{ asset("img/home/Devarana_Fachada.png") }}" alt="Devarana Oficinas" class="absolute transition duration-1000 top-[80px]" id="bgBuilding">
        </picture>
        
    </div>

    <div id="quienes" class="md:py-20">
        <div class="relative mx-auto lg:w-2/5 md:my-16 my-4">
            <div class="bg-devarana-pink py-16 px-10 z-10">
                <h1 class="text-5xl text-devarana-pearl font-playfair">¿Quiénes <br> <span class="pl-28">  somos?</span></h1>
                <p class="py-3 text-devarana-pearl text-base text-justify">Somos una empresa México-Holandesa con más de 10 años de experiencia en el ramo inmobiliario en Querétaro. Somos creadores, diseñadores y arquitectos de lo extraordinaro, con excelencia en la construcción.
                </p>
            </div>
            <div class="absolute -top-28 -left-40 -z-10 hidden lg:block">
                <picture>
                    <source srcset="{{ asset('img/home/Ximevista-H.webp') }}" type="image/webp">
                    <source srcset="{{ asset('img/home/Ximevista-H.png') }}" type="image/png">
                    <img src="{{ asset('img/home/Ximevista-H.png') }}" alt="Devarana Departamentos" class="w-[200px] shadow-xl somosPic translate-y-6 transition ease-in-out duration-1000">
                </picture>
            </div>
            <div class="absolute -top-28 -right-32 z-10 hidden lg:block">
                <img src="https://picsum.photos/200/150" alt="Devarana " class="w-[200px] shadow-xl somosPic translate-y-6 transition ease-in-out duration-1000">
            </div>

            <div class="absolute -bottom-20 -left-16 z-10 hidden lg:block">
                <picture>
                    <source srcset="{{ asset('img/home/SAM2117.webp') }}" type="image/webp">
                    <source srcset="{{ asset('img/home/SAM2117.png') }}" type="image/png">
                    <img src="{{ asset('img/home/SAM2117.png') }}" alt="Devarana Construcción" class="w-[200px] shadow-xl somosPic translate-y-6 transition ease-in-out duration-1000">
                </picture>
            </div>
        </div>
        <div class="w-2/5 mx-auto flex">
            <button class="md:m-0 md:ml-auto m-auto rounded-full bg-transparent border-2 py-1 px-2 border-devarana-button text-devarana-button shadow transition duration-500 ease-in-out hover:bg-devarana-blue hover:text-devarana-pearl text-base">Conoce más ></button>
        </div>
    </div>

    <div id="nuestro" class="py-10">
        <div class="w-full px-10 flex flex-row flex-wrap">
            <div class="md:w-4/6 w-full">
                <div class="swiper mySwiper text-devarana-graph cursor-grab focus:cursor-grabbing">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-white">
                            <picture>
                                <source srcset="{{ asset('img/home/desarrollos/RoyalView.webp') }}" type="image/webp">
                                <source srcset="{{ asset('img/home/desarrollos/RoyalView.png') }}" type="image/png">
                                <img class='w-full' src="{{ asset('img/home/desarrollos/RoyalView.png') }}" alt="RoyalView by Devarana">
                            </picture>
                            <div class="m-auto grid grid-cols-2 w-96 py-5  bg-white">
                                <div>
                                    <h3 class="uppercase font-playfair"> ROYAL VIEW</h3>
                                    <p>2020</p>
                                </div>
                                <div>
                                    <p>Zibatá, Querétaro</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white">
                            <picture>
                                <source srcset="{{ asset('img/home/desarrollos/HighGARDENS.webp') }}" type="image/webp">
                                <source srcset="{{ asset('img/home/desarrollos/HighGARDENS.png') }}" type="image/png">
                                <img class='w-full' src="{{ asset('img/home/desarrollos/HighGARDENS.png') }}" alt="Highgardens by Devarana">
                            </picture>
                            <div class="m-auto grid grid-cols-2 w-96 py-5  bg-white">
                                <div>
                                    <h3 class="uppercase font-playfair"> HIGH GARDENS </h3>
                                    <p>2020</p>
                                </div>
                                <div>
                                    <p>Zibatá, Querétaro</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white">
                            <picture>
                                <source srcset="{{ asset('img/home/desarrollos/GrandMayran.webp') }}" type="image/webp">
                                <source srcset="{{ asset('img/home/desarrollos/GrandMayran.png') }}" type="image/png">
                                <img class='w-full' src="{{ asset('img/home/desarrollos/GrandMayran.png') }}" alt="GrandMayran by Devarana">
                            </picture>
                            <div class="m-auto grid grid-cols-2 w-96 py-5  bg-white">
                                <div>
                                    <h3 class="uppercase font-playfair"> GRAND MAYRAN </h3>
                                    <p>2020</p>
                                </div>
                                <div>
                                    <p>Cañadas del Lago, Querétaro</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white">
                            <picture>
                                <source srcset="{{ asset('img/home/desarrollos/CondesaJuriquilla.webp') }}" type="image/webp">
                                <source srcset="{{ asset('img/home/desarrollos/CondesaJuriquilla.png') }}" type="image/png">
                                <img class='w-full' src="{{ asset('img/home/desarrollos/CondesaJuriquilla.png') }}" alt="CondesaJuriquilla by Devarana">
                            </picture>
                            <div class="m-auto grid grid-cols-2 w-96 py-5 bg-white">
                                <div>
                                    <h3 class="uppercase font-playfair"> UPPER CONDESA </h3>
                                    <p>2020</p>
                                </div>
                                <div>
                                    <p>Juriquilla Querétaro</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination -mb-[15px]"></div>
                    </div>
                </div>
                
            </div>

            <div class="flex flex-col my-auto md:w-2/6 w-full">
                <h2 class="md:pl-10 py-2 text-5xl font-playfair text-devarana-graph">Nuestro <span class="text-devarana-pink">trabajo</span></h2>
                <hr class="w-3/6 border-devarana-graph">
                <p class="md:pl-10 py-2  text-devarana-midnight text-base text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <div class="md:p-10 py-10">
                    <button class="rounded-full bg-transparent border-2 py-1 px-2 border-devarana-button text-devarana-button shadow transition duration-500 ease-in-out hover:bg-devarana-blue hover:text-devarana-pearl text-base">Conoce más ></button>
                </div>
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

    <div id="equipo">
        <div class="grid md:grid-cols-5 grid-cols-2 relative">
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Diana-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Diana-web.png') }}" type="image/png">
                <img class='md:order-1 order-1' src="{{ asset('img/home/colaboradores/Diana-web.png') }}" alt="Diana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Abraham-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Abraham-Web.png') }}" type="image/png">
                <img class='md:order-2 order-3' src="{{ asset('img/home/colaboradores/Abraham-Web.png') }}" alt="Abraham-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Mariana-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Mariana-Web.png') }}" type="image/png">
                <img class='md:order-3 order-4' src="{{ asset('img/home/colaboradores/Mariana-Web.png') }}" alt="Mariana-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Gregorio-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Gregorio-web.png') }}" type="image/png">
                <img class='md:order-4 order-2' src="{{ asset('img/home/colaboradores/Gregorio-web.png') }}" alt="Gregorio-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Diego-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Diego-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-5' src="{{ asset('img/home/colaboradores/Diego-web.png') }}" alt="Diego-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Gus-Web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Gus-Web.png') }}" type="image/png">
                <img class='md:block hidden md:order-6' src="{{ asset('img/home/colaboradores/Gus-Web.png') }}" alt="Gus-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Miguel-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Miguel-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-7' src="{{ asset('img/home/colaboradores/Miguel-web.png') }}" alt="Miguel-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Pam-WEB.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Pam-WEB.png') }}" type="image/png">
                <img class='md:block hidden md:order-8' src="{{ asset('img/home/colaboradores/Pam-WEB.png') }}" alt="Pam-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Melissa-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Melissa-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-9' src="{{ asset('img/home/colaboradores/Melissa-web.png') }}" alt="Melissa-Devarana">
            </picture>
            <picture>
                <source srcset="{{ asset('img/home/colaboradores/Luis-web.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/home/colaboradores/Luis-web.png') }}" type="image/png">
                <img class='md:block hidden md:order-10' src="{{ asset('img/home/colaboradores/Luis-web.png') }}" alt="Luis-Devarana">
            </picture>
                <div class="absolute top-0 left-0 right-0 bottom-0 flex">
                    <img src="{{ asset("img/home/NuestroEquipo.svg") }}" alt="nuestro_equipo" class="w-full m-auto">
                </div>
        </div>
    </div>
    
    <div class="flex justify-center align-middle py-8 flex-wrap items-center"> 
        <p class="text-devarana-blue text-center font-playfair italic text-3xl md:py-0 py-5"> Somos creadores, arquitectos y diseñadores de lo extraordinario. </p> 
        <button class="mx-3 rounded-full bg-transparent border-2 py-2 px-2 border-devarana-button text-devarana-button shadow transition duration-500 ease-in-out hover:bg-devarana-blue hover:text-devarana-pearl text-base">Conoce más ></button>
    </div>
@endsection




@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endsection
    
    @section("scripts")
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home/index.js') }}"></script>
    
@endsection