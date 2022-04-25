@extends('layouts.app')

@section('content')

<x-nav class="bg-devarana-blue text-devarana-pearl">
    <x-logo-nav  class="w-[50px] h-[50px]" > </x-logo-nav>
</x-nav>

<div class="relative max-h-screen h-fit">
    <picture>
        <source srcset="{{ asset('img/contacto/DevaranaFachada.webp')}}" type="image/webp" media="(min-width: 600px)">
        <source srcset="{{ asset('img/contacto/DevaranaFachada.png')}}" type="image/png" media="(min-width: 600px)">
            
        <source srcset="{{ asset('img/mobile/contacto/DevaranaFachada.webp')}}" type="image/webp">
        <source srcset="{{ asset('img/mobile/contacto/DevaranaFachada.png')}}" type="image/png">
        <img src="{{ asset('img/contacto/DevaranaFachada.png')}}" alt="Fachada" class="absolute w-[60%] sm:w-[60%] -left-4 md:-left-16 -top-8 md:-top-44 -z-30">   
    </picture>
    <div class="max-w-screen-2xl mx-auto px-10">
        <div class="grid col-span-12 pt-44">
            <div class="lg:col-span-4 lg:col-start-7 col-span-6">
                <h1 class="text-devarana-blue text-4xl lg:text-8xl pl-16 text-right pb-10">Contacto</h1>
                <form id="formContacto" action="{{ route('contacto.form') }}" method="POST" class="w-full z-10 bg-devarana-hazelnut bg-opacity-30 content-end h-fit py-10 px-6 mb-0 justify-self-end grid grid-cols-4 gap-x-5 shadow-xl">
                    @csrf
                    <div class="col-span-4 md:col-span-4">
                        <input type="text" required name="name" value="{{old('name')}}" class="w-full my-2 py-5 rounded border-none placeholder:font-mulish" placeholder="Nombre">
                        @error('name')
                            <span class="text-red-500 text-center"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <input type="email" required name="email" value="{{old('email')}}" class="w-full my-2 py-5 rounded border-none placeholder:font-mulish " placeholder="Email">
                        @error('email')
                            <span class="text-red-500 text-center"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <input type="tel" required value="{{old('phone')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="phone" class="w-full my-2 py-5 rounded border-none placeholder:font-mulish" placeholder="Teléfono">
                        @error('phone')
                            <span class="text-red-500 text-center"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-span-4 md:col-span-4">
                        <textarea name="message" required class="w-full my-2 rounded border-none placeholder:font-mulish" rows="5" placeholder="Mensaje">{{old('message')}}</textarea>
                        @error('message')
                            <span class="text-red-500 text-center"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="flex col-span-4">
                        <input type="submit" id="btnSubmit" value="Enviar" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}" data-callback='onSubmit' data-action='submit' class="g-recaptcha rounded-none bg-devarana-pink text-devarana-pearl border-0 ml-auto py-2 px-10 cursor-pointer hover:bg-devarana-pearl hover:text-devarana-pink transition duration-500 ease-in-out">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="max-w-[800px] m-auto md:py-36 2xl:pt-64 py-10">
    <h1 class="text-center text-3xl text-devarana-pink">¡Estamos felices de atenderte!</h1>
    <div class="grid grid-cols-3 md:gap-10 md:py-20 py-10 text-center text-devarana-graph">
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Ventas</h2>
            <p>Invierte con éxito</p>
            <a href="https://royalview.mx/" target="_blank" rel="noopener noreferrer" class="growLine hover:opacity-50 block py-2">www.royalview.mx</a>
            <a href="tel:4428244444" class="growLine hover:opacity-50 block py-2">442 824 4444</a>
        </div>
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Compras</h2>
            <a href="tel:8113799052" class="growLine hover:opacity-50 block py-2">(81) 1379 9052</a>
            <a href="mailto:compras@devarana.mx" class="growLine hover:opacity-50 block py-2">compras@devarana.mx</a>
        </div>
        <div class="col-span-3 md:col-span-1">
            <h2 class="font-mulish font-bold py-3">Corporativo</h2>
            <a href="tel:4424021073" class="growLine hover:opacity-50 block py-2">442 402 1073 </a>
            <a href="https://goo.gl/maps/Bh3TQZ6yuxSqBuSU9" target="_blank" rel="noopener noreferrer" class="underline growLine hover:opacity-50 block py-2">Ubicación</a>
        </div>
    </div>
</div>


@endsection
    @section("scripts")
        <script>
            const formulario = document.getElementById("formContacto")
            const btnSubmit = document.getElementById("btnSubmit")
            const recaptcha = document.getElementById("recaptcha")
            formulario.addEventListener("submit", (e) => {
                e.preventDefault()
                btnSubmit.disabled = true
                btnSubmit.value = "Enviando..."
                formulario.submit()
            })
        </script>
    @endsection
