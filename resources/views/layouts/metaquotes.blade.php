        <title> {{ isset($seo)? $seo : 'Devarana' }} </title>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!--Metas Geo-->
        <meta name="geo.region" content="MX-QUE" />
        <meta name="geo.placename" content="Quer&eacute;taro" />
        <meta name="geo.position" content="" />
        <meta name="ICBM" content="" />

        <!--Metas OG-->
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />

        <!--Metas DC-->
        <meta content="" NAME='DC.Title'/>
        <meta content="" NAME='DC.Description'/>
        <meta content="Devarana.mx" NAME='DC.Creator'/>
        <meta content="Devarana.mx" NAME='DC.Publisher'/>
        <meta content="" NAME='DC.Identifier'/>
        <meta content="" NAME='DC.keywords'/>

        

        @php
        if (isset($_SERVER['HTTPS'])) {
                echo '<link rel="canonical" href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '"/>';
        } else {
                echo '<link rel="canonical" href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '"/>';
        }
        @endphp