@extends('layouts.app')

@section('content')

<x-nav class="bg-devarana-gray text-devarana-pearl">
     <x-logo-nav name="Isotipo_blanco.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div class="bg-contacto bg-no-repeat bg-bottom bg-cover">
    <div class="flex pt-20 md:pt-48 pb-10 flex-col max-w-4xl m-auto px-5">
        <div class="m-auto">
        <h1 class="font-playfair text-5xl text-devarana-midnight">¡Encantados de</h1>
        <p class="text-center py-2 font-mulish text-base pl-10 text-devarana-midnight">Estamos felices de poder atender tus dudas, <br> déjanos un mensaje y te responderemos en breve.</p>
        </div>
        <div class="grid grid-cols-3 py-10 gap-10">
            <div class="md:col-span-2 col-span-3">
                <form action="{{ route('contacto') }}" method="POST">
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
            <div class="md:col-span-1 col-span-3">
                <ul class="text-devarana-midnight md:text-left text-center">
                    <li><p>Ventas</p></li>
                    <li><a href="tel:4424026197" class="hover:underline hover:decoration-2 underline-offset-1">(442) 402 6197</a></li>
                    <li><a href="tel:4428244444" class="hover:underline hover:decoration-2 underline-offset-1">(442) 824 4444</a></li>
                    <li class="pt-5"><p>Corporativo</p></li>
                    <li><a href="tel:4424021073" class="hover:underline hover:decoration-2 underline-offset-1">(442) 402 1073</a></li>
                    <li class="pt-5"><p>Capital Humano  </p></li>
                    <li><a href="mailto:capitalhumano@devarana.mx" class="hover:underline hover:decoration-2 underline-offset-1">capitalhumano@devarana.mx</a></li>
                    <li class="pt-5"><p>Compras</p></li>
                    <li><a href="mailto:compras@devarana.mx" class="hover:underline hover:decoration-2 underline-offset-1">compras@devarana.mx</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="grid w-full grid-cols-4">
        <div class="col-span-4 lg:col-span-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14931.83523024129!2d-100.3370407!3d20.6712548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d3fb03fc6d3961d!2sDEVARANA!5e0!3m2!1ses!2smx!4v1645554775838!5m2!1ses!2smx"  class="w-full h-[250px]" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-span-4 lg:col-span-1 flex h-full m-auto bg-devarana-blue flex-col p-10 text-center text-devarana-pearl justify-center">
            <h2 class="font-playfair text-3xl py-3">Visítanos</h2>
            <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank" class="font-mulish">Av. Valle de Acantha 88, Fracc. Zibatá, Sección Acantha, CP 76269, El Marqués, Querétaro.</a>
        </div>
    </div>
</div>
@endsection

    @section('styles')
    @endsection
    
    @section("scripts")
    @endsection