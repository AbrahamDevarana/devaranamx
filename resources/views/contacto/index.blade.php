@extends('layouts.app')

@section('content')

<x-nav class="bg-devarana-pearl text-devarana-graph" name="DevaranaLogo.png" contacto="true">
    <x-logo-nav name="Isotipo.png" class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div class="grid grid-cols-12 md:gap-x-10 md:-mb-52">
    <div class="col-span-7 lg:col-span-7 xl:col-span-7">
        <img src="{{ asset('img/contacto/DevaranaFachada.png')}}" alt="" class="w-full -translate-x-10 -translate-y-10 md:-translate-x-32 md:-translate-y-20">
    </div>
    <div class="col-span-5 lg:col-span-5 lg:place-self-center pt-20 lg:pt-0">
        <img src="{{ asset("img/contacto/svg/CONTACTO.svg") }}" alt="" class="w-full -translate-x-1/3 translate-y-6 text-center">
        <h1 class="text-devarana-pink text-3xl md:text-5xl">Contacto</h1>
    </div>
    <div class="col-span-10 col-start-2 md:col-span-7 md:col-start-5">
        <form action="{{ route('contacto') }}" method="POST" class="-translate-y-1/4 md:-translate-y-3/4 w-full z-10 bg-devarana-hazelnut bg-opacity-30 content-end h-fit py-10 px-6 mb-0 justify-self-end grid grid-cols-4 gap-x-5">
            @csrf
            <div class="col-span-4">
                <input type="text" required name="nombre" value="{{old('nombre')}}" class="w-full my-2 py-5 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish" placeholder="Nombre y apellido">
                @error('nombre')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-span-2">
                <input type="email" required name="email" value="{{old('email')}}" class="w-full my-2 py-5 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish " placeholder="Email">
                @error('email')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-span-2">
                <input type="tel" required value="{{old('telefono')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="telefono" class="w-full my-2 py-5 rounded border-devarana-babyblue placeholder:text-right placeholder:font-mulish" placeholder="Teléfono">
                @error('telefono')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-span-4">
                <textarea name="mensaje" required class="w-full my-2 rounded border-devarana-babyblue placeholder:font-mulish" rows="5" placeholder="Mensaje">{{old('mensaje')}}</textarea>
                @error('mensaje')
                    <span class="text-red-500 text-center"> {{ $message }} </span>
                @enderror
            </div>
            <div class="flex col-span-4">
                <input type="submit" value="Enviar" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}" data-callback='onSubmit' data-action='submit' class="g-recaptcha rounded-none bg-devarana-pink text-devarana-pearl border-0 ml-auto py-2 px-10 cursor-pointer hover:bg-devarana-pearl hover:text-devarana-pink transition duration-500 ease-in-out">
            </div>
        </form>
    </div>
</div>



<div class="max-w-[800px] m-auto  py-10 px-10">
    <h1 class="text-center text-3xl text-devarana-pink">Estamos felices de atenderte</h1>
    <div class="grid grid-cols-3 md:gap-10 md:py-20 py-10 text-center text-devarana-graph">
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Ventas</h2>
            <p>Invierte con éxito</p>
            <a href="www.royalview.mx" target="_blank" class=" hover:text-devarana-pink">www.royalview.mx</a>
            <a href="tel:4428244444" class="py-4 block hover:text-devarana-pink">442 824 4444</a>
        </div>
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Compras</h2>
            <a href="tel:8113799052" class=" hover:text-devarana-pink">(81) 1379 9052</a>
            <a href="mailto:compras@devarana.mx" class="py-4 block hover:text-devarana-pink">compras@devarana.mx</a>
        </div>
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Corporativo</h2>
            <a href="tel:4424021073" class="block hover:text-devarana-pink">442 402 1073 </a>
            <a href="" class="block py-4 hover:text-devarana-pink">Ubicación</a>
        </div>
    </div>
</div>


@endsection

    @section('styles')
    @endsection

    @section("scripts")
    @endsection
