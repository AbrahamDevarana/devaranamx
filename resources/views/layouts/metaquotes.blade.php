        @php
            $http = isset($_SERVER['HTTPS'])? 'https://' : 'http://';
        @endphp
        
        
        
        <title> {{ isset($metaTitle) && $metaTitle !== ""? $metaTitle : 'Devarana' }} </title>

        <meta name="description" content="{{ isset($metaDescripcion) && $metaDescripcion !== ""? $metaDescripcion : 'Descripcion' }}">
        <meta name="keywords" content="{{ isset($metaKeywords) &&  $metaKeywords !== ""? $metaKeywords : 'Keywords' }}">
        <meta name="author" content="Devarana">
        <!--Metas Geo-->
        <meta name="DC.title" content="Devarana.mx" />
        <meta name="geo.region" content="MX-QUE" />
        <meta name="geo.position" content="20.671358;-100.337054" />
        <meta name="ICBM" content="20.671358, -100.337054" />


        <!--Metas OG-->
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
        <meta property="og:title" content="{{ isset($metaTitle) && $metaTitle !== ""? $metaTitle : 'Devarana' }}" />
        <meta property="og:description" content="{{ isset($metaDescripcion) && $metaDescripcion !== ""? $metaDescripcion : 'Descripcion' }}" />
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="{{ $http.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] }}" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="Devarana" />

        <!--Metas DC-->
        <meta content="{{ isset($metaTitle) && $metaTitle !== ""? $metaTitle : 'Devarana' }}" NAME='DC.Title'/>
        <meta content="{{ isset($metaDescripcion) && $metaDescripcion !== ""? $metaDescripcion : 'Descripcion' }}" NAME='DC.Description'/>
        <meta content="Devarana" NAME='DC.Creator'/>
        <meta content="Devarana" NAME='DC.Publisher'/>
        <meta content="{{ $http.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] }}" NAME='DC.Identifier'/>
        <meta content="{{ isset($metaKeywords) &&  $metaKeywords !== ""? $metaKeywords : 'Keywords' }}" NAME='DC.keywords'/>

        

        @php
        if (isset($_SERVER['HTTPS'])) {
                echo '<link rel="canonical" href="https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '"/>';
        } else {
                echo '<link rel="canonical" href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '"/>';
        }
        @endphp