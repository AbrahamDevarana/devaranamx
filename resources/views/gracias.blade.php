@php
    $metaTitle = "Gracias";
    $metaDescripcion = "";
    $metaKeywords = "";
@endphp

@extends('layouts.app')
@section('content')

    <x-nav class="bg-transparent text-devarana-pearl">    
        <x-logo-nav class="w-[50px] h-[50px]" > </x-logo-nav>
    </x-nav>

{{-- <div id="header" class="h-[150px] bg-devarana-hazelnut"></div> --}}


<div class="bg-devarana-blue text-justify h-screen flex mb-14">
    <div class="max-w-[450px] m-auto">
        <h1 class="text-7xl text-devarana-pearl text-center py-5">Gracias</h1>

        <div class="inline-flex pb-10">
            @if(Session::has('success'))
                <p class="text-devarana-pearl py-10 text-left pl-4">{{ Session::get('success') }}</p>  
            @else
                @php
                    header("Location: " . URL::to('/'), true, 302);
                    exit();
                @endphp
            @endif
            <img src="{{ asset("img/logos/Isotipo_blanco.png") }}" alt="" class="w-[40px] my-auto">
        </div>
        <x-link href="/" class="text-center justify-center max-w-[240px] mx-auto"> Volver al Home </x-link>
    </div>
</div>
@endsection
    

@section("scripts")

@endsection