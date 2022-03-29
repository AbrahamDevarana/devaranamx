@php
    $metaTitle = "Gracias";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl" name="DevaranaLogo.png">    
        <x-logo-nav name="DevaranaLogo.png" class="w-[150px] h-[100px]" > </x-logo-nav>
    </x-nav>

<div id="header" class="h-[200px] bg-devarana-hazelnut"></div>

<div class="bg-devarana-blue text-justify h-screen w-screen flex mb-14">

    <div class="max-w-[450px] m-auto">
        <img src="{{ asset("img/contacto/svg/CONTACTO.svg") }}" alt="" class="-translate-x-1/3 translate-y-6 text-center">
        <h1 class="text-5xl text-devarana-pearl text-center">Gracias</h1>
        <div class="inline-flex">
            <p class="text-devarana-pearl py-10 text-left pr-4">Estamos felices de atenderte, nos comunicaremos contigo a la brevedad.</p>
            <img src="{{ asset("img/logos/Isotipo_blanco.png") }}" alt="" class="w-[40px] my-auto">
        </div>
        <x-link href="/" class="text-center justify-center max-w-[240px] mx-auto"> Volver al Home </x-link>
    </div>
</div>
@endsection
@section('styles')

@endsection
    
@section("scripts")


@endsection