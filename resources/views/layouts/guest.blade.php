<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} | The art of making life better</title>
        <meta name="description" content="Somos un holding mexicano con presencia global, y diversas líneas de negocio, pero con un fin particular: procurar la salud y el bienestar del ser humano.">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>
    <body>
        <div id="app" class="h-screen w-screen flex flex-col justify-between bg-white ">
            <nav class="w-full fixed top-0 left-0 z-50">
                <div class="navbar px-6 md:px-8 xl:px-16 py-2 flex flex-row items-center justify-between">
                    <div class="imagen-div">
                        <a href="/">
                            <img class="logo w-full" src="./images/logo.svg" alt="CidVid Logo">
                            <img class="logo-landing w-full hidden" src="./images/logo-landing.svg" alt="CidVid Logo">
                        </a>
                    </div>
                    <button type="button" class="menu-button bg-primary h-10 w-10 rounded-full md:hidden flex justify-center items-center">
                        <img class="w-6" src="./images/bars.svg" alt="">
                    </button>
                    <div class="menu absolute md:relative right-0 top-0 w-1/2 md:w-2/4 h-screen md:h-auto bg-primary md:bg-transparent hidden md:block">
                        <button class="menu-button round-button bg-white absolute top-0 right-0 mt-10 mr-8 md:hidden h-10 w-10 rounded-full flex justify-center items-center">
                            <img src="./images/close-icon.svg" alt="">
                        </button>
                        <ul class="text-xl md:text-base flex flex-col md:flex-row justify-center md:justify-between items-start md:items-center h-full w-full px-8 md:px-0 xl:px-8 md:text-white menu-navbar">
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold active" href="#">Inicio</a>
                            </li>
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold" href="#nosotros">Nosotros</a>
                            </li>
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold" href="#historia">Historia</a>
                            </li>
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold" href="#divisiones">Divisiones</a>
                            </li>
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold" href="#instalaciones">Instalaciones</a>
                            </li>
                            <li class="pb-3 md:pb-0">
                                <a class="menu-button font-semibold" href="#contacto">Contacto</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <main>
                {{ $slot }}
            </main>
        </div>
        @include('landings.biomedica')
        @include('landings.cidkapital')
        @include('landings.clir-2')
        @include('landings.clir')
        @include('landings.judevi')
        @include('landings.nura')
        @include('landings.servicios')
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/slick.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/scripts.js') }}"></script>
        @yield('scripts')
        @livewireScripts
    </body>
</html>
