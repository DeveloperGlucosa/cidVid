<x-guest-layout>
    <section class="mt-14 md:mt-0" id="inicio">
        <div class="h-auto pb-0 md:h-full w-screen relative">
            <div class="relative">
                <video class="w-screen" autoplay loop muted style="pointer-events: none;">
                    <source src="{{ asset('video/video-cidvid.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
            </div>
            <div class="middle-section-buttons transform translate-y-10">
                <a class="white" href="#nosotros">Ir a Nosotros</a>
                <div class="relative">
                    <div class="white-stick"></div>
                    <div class="black-stick"></div>
                </div>
                <a class="black" href="#inicio">Ir a inicio</a>
            </div>
        </div>
    </section>
    <section id="nosotros" class="relative bg-white">
        <div class="w-full container mx-auto px-6 md:px-20 pt-10 md:pt-0">
            <div class="slide-container ">
                <div class="slides w-full nosotros">
                    <div class="w-full flex flex-wrap flex-col md:flex-row justify-center items-center py-8 md:py-20">
                        <div class="imagen w-full md:w-1/3 pb-5 md:pb-0">
                            <img class="w-full px-6 mx-auto" src="{{ asset('images/nosotros/nosotros.png') }}" alt="">
                        </div>
                        <div class="texto md:w-2/3 w-full text-center md:text-left">
                            <h2 class="text-xl font-bold mb-3 leading-snug">Somos un holding mexicano con presencia global, y diversas líneas de negocio, pero con un fin particular: <span class="text-primary">procurar la salud y el bienestar del ser humano.</span></h2>
                            <p>
                            Somos un equipo multidisciplinario apasionado por su labor. Con profesionales de diversas partes del mundo y  experiencia en diferentes campos.
                            </p>
                            <p class="mt-5 mb-10">
                            Buscamos contribuir en el bienestar de los seres humanos, e inspirar a futuras generaciones a través de nuestros valores, productos y servicios.
                            </p>
                            <a href="#historia" class="btn btn-primary">
                                Nuestra historia
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slides w-full mision">
                    <div class="w-full flex flex-wrap flex-col md:flex-row justify-center items-center py-20">
                        <div class="imagen w-full md:w-1/3 pb-5 md:pb-0">
                            <img class="w-full px-6 mx-auto" src="{{ asset('images/nosotros/mision.png') }}" alt="">
                        </div>
                        <div class="texto md:w-2/3 w-full text-center md:text-left">
                            <h2 class="text-5xl font-bold mb-3 leading-snug">Misión</span></h2>
                            <p class="mb-10 mt-5">
    
                            Enfocados en el desarrollo sustentable, <span class="font-bold">inspiramos comunidades para una vida más sana</span>, impactando a través de nuestros servicios y productos con un equipo de profesionales altamente capacitados.
                            </p>
                            
                            <a href="#historia" class="btn btn-primary">
                                Nuestra historia
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slides w-full mision">
                    <div class="w-full flex flex-wrap flex-col md:flex-row justify-center items-center py-20">
                        <div class="imagen w-full md:w-1/3 pb-5 md:pb-0">
                            <img class="w-full px-6 mx-auto" src="{{ asset('images/nosotros/vision.png') }}" alt="">
                        </div>
                        <div class="texto md:w-2/3 w-full text-center md:text-left">
                            <h2 class="text-5xl font-bold mb-3 leading-snug">Visión</span></h2>
                            <p class="mb-10 mt-5">
                            Al 2024 a través de nuestros productos y servicios seremos embajadores e inspiración de futuras generaciones, <span class="font-bold">enfocados en la salud y bienestar de los seres humanos</span>
                            </p>
                            
                            <a href="#historia" class="btn btn-primary">
                                Nuestra historia
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slides w-full mision">
                    <div class="w-full flex flex-wrap flex-row justify-center items-center py-20">
                        
                        <div class="w-full text-center">
                            <h2 class="text-2xl md:text-5xl font-bold mb-5 leading-snug">Nuestros Valores</h2>
                        </div>
                        <div class="w-1/2 md:w-1/5 mt-3">
                            <div class="px-6">
                                <img src="{{ asset('images/nosotros/inovacion.png') }}" alt="">
                                <p class="text-center mt-5 font-medium text-sm leading-none md:text-lg">Innovación</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/5 mt-3">
                            <div class="px-6">
                                <img src="{{ asset('images/nosotros/servicio.png') }}" alt="">
                                <p class="text-center mt-5 font-medium text-sm leading-none md:text-lg">Espíritu de Servicio</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/5 mt-3">
                            <div class="px-6">
                                <img src="{{ asset('images/nosotros/humanismo.png') }}" alt="">
                                <p class="text-center mt-5 font-medium text-sm leading-none md:text-lg">Humanismo</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/5 mt-3">
                            <div class="px-6">
                                <img src="{{ asset('images/nosotros/perseverancia.png') }}" alt="">
                                <p class="text-center mt-5 font-medium text-sm leading-none md:text-lg">Perseverancia</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/5 mt-3">
                            <div class="px-6">
                                <img src="{{ asset('images/nosotros/amor-vida.png') }}" alt="">
                                <p class="text-center mt-5 font-medium text-sm leading-none md:text-lg">Amor a la vida</p>
                            </div>
                        </div>
                        <div class="w-full text-center mt-10">
                            <a href="#historia" class="btn btn-primary">
                                Nuestra historia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-menu pb-32">
                <ul class="slide-nav-menu">
                    <li class="text-sm md:text-base slick-slide slick-current slick-center">
                        Nosotros
                    </li>
                    <li class="text-sm md:text-base">
                        Misión
                    </li>
                    <li class="text-sm md:text-base">
                        Visión
                    </li>
                    <li class="text-sm md:text-base">
                        Valores
                    </li>
                </ul>
            </div>
            <div class="middle-section-buttons transform translate-y-10">
                <a class="black" href="#historia">Ir a Historia</a>
                <div class="relative">
                    <div class="black-stick"></div>
                    <div class="white-stick"></div>
                </div>
                <a class="white" href="#nosotros">Ir a Nosotros</a>
            </div>
        </div>
        
    </section>
    <section id="historia" class="relative">
        <div class="bg-cover w-full py-24 bg-black bg-fixed" style="background-image:url({{ asset('images/nuestra-historia-bg.jpg') }})">
            <div class="container mx-auto px-6 md:px-32">
                <div class="w-full">
                    <h2 class="historia-title mb-3 uppercase font-bold text-xl text-primary text-center">Nuestra Historia</h2>
                    <p class="description text-2xl text-white font-bold text-center px-0 md:px-32">Desde nuestra creación hemos sido una empresa en <span class="text-primary">constante evolución</span>. Nos gusta reinventarnos conforme se mueve el mundo.</p>
                </div>
                <div class="relative mt-20 h-80">
                    <img src="{{ asset('images/historia-timeline.png') }}" class="historia-img" alt="">
                    <ul class="flex flex-row justify-center items-center flex-wrap w-full h-full">
                        <li class="timelime-item arriba">
                            <p class="timeline-text" style="display:none">
                                <span class="font-bold text-center text-lg block md:hidden">- 2014 -</span>
                                Inicia nuestro camino, ofreciendo talento humano para investigación clínica y servicios de  salud en Guadalajara, Jalisco.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-12">2014</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                        </li>
                        <li class="timelime-item abajo">
                            <p class="timeline-text " style="display:none">
                            <span class="font-bold text-center text-lg block md:hidden">- 2016 -</span>
                            Se consolida <span class="font-bold">CidVID Investigación Biomédica</span>, y lanzamos el primer Comité de Ética en investigación.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 translate-y-2">2016</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                            
                        </li>
                        <li class="timelime-item arriba">
                            <p class="timeline-text " style="display:none">
                            <span class="font-bold text-center text-lg block md:hidden">- 2018 -</span>
                            Lanzamos nuestro <span class="font-bold">primer congreso 
                            Internacional de Investigación clínica</span>, con ponentes y asistentes de todo el mundo. Iniciamos operaciones en Aguascalientes.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-12">2018</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                        </li>
                        <li class="timelime-item abajo">
                            <p class="timeline-text " style="display:none">
                            <span class="font-bold text-center text-lg block md:hidden">- 2019 -</span>
                            <span class="font-bold"> Incursionamos en el mundo del las finanzas con la creación de <span class="font-bold">Cid Kapital</span>. A la par, se crea el colectivo CLiR, con el fin de fomentar la innovación científica y tecnológica basada en el conocimiento.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 translate-y-2">2019</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                            
                        </li>
                        <li class="timelime-item arriba">
                            <p class="timeline-text " style="display:none">
                            <span class="font-bold text-center text-lg block md:hidden">- 2020 -</span>
                            Nace <span class="font-bold">CidVID Servicios Médicos</span>; ofreciendo servicio de primera, con calidez humana.  Desarrollamos  y lanzamos <span class="font-bold">Judeví</span>, crema facial con aceite de pracaxi, pionera en su categoría.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-12">2020</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                        </li>
                        <li class="timelime-item abajo">
                            <p class="timeline-text " style="display:none">
                            <span class="font-bold text-center text-lg block md:hidden">- 2021 -</span>
                            Se inaugura nuestra <span class="font-bold">central de Servicios Médicos y Centro de Investigación</span> en Ciudad de México.  Llevamos a cabo protocolo de vacuna para el COVID, de la mano de importante farmacéutica internacional.
                            </p>
                            <p class="timeline-date mt-4 absolute top-0 left-1/2 transform -translate-x-1/2 translate-y-2">2021</p>
                            <span class="flex h-4 w-4 relative">
                                <span class="pulse absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-white"></span>
                            </span>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="middle-section-buttons transform translate-y-10">
                <a class="white" href="#divisiones">Ir a Divisiones</a>
                <div class="relative">
                    <div class="white-stick"></div>
                    <div class="black-stick"></div>
                </div>
                <a class="black" href="#historia">Nuestra Historia</a>
                
            </div>
        </div>
    </section>
    <section id="divisiones">
        <div class="container mx-auto px-6 md:px-40 py-28 relative">
            <h2 class="mb-3 uppercase font-bold text-xl text-primary text-center">Divisiones</h2>
            <p class="text-2xl font-bold text-center px-0 md:px-32">Somos un grupo profesionales de diversas partes del mundo y experiencia en <span class="text-primary">diferentes campos</span>.</p>
            <div class="w-full flex flex-row justify-between items-center flex-wrap mt-10">
                <div class="landing-button w-1/2 md:w-1/3 biomedica">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/cidvid-biomedica.png') }}" alt="">
                </div>
                <div class="w-1/2 md:w-1/3 landing-button servicios">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/cidvid-servicios.png') }}" alt="">
                </div>
                <div class="w-1/2 md:w-1/3 landing-button judevi">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/judevi.png') }}" alt="">
                </div>
                <div class="w-1/2 md:w-1/3 landing-button clir">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/clir.png') }}" alt="">
                </div>
                <div class="w-1/2 md:w-1/3 landing-button nura">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/nura.png') }}" alt="">
                </div>
                <div class="w-1/2 md:w-1/3 landing-button cidkapital">
                    <img class="w-full px-2 md:px-16 mt-3 cursor-pointer" src="{{ asset('images/divisiones/cidkapital.png') }}" alt="">
                </div>
            </div>
            <div class="middle-section-buttons ">
                <a class="black" href="#instalaciones">Ir a instalaciones</a>
                <div class="relative">
                    <div class="black-stick"></div>
                    
                </div>
                
                
            </div>
        </div>
    </section>
    <section id="nos-enfocamos">
        <div class="w-full py-44 bg-cover bg-center relative bg-fixed" style="background-image:url({{ asset('images/enfocamos-bg.jpg') }})">
            <p class="text-center text-white text-2xl md:text-5xl w-full px-6 md:w-2/3 xl:w-1/3 mx-auto font-bold">Nos enfocamos a la salud y el bienestar de los seres humanos.</p>
            <div class="middle-section-buttons transform translate-y-12">
                <div class="relative">
                    <div class="white-stick"></div>
                </div>
                <a class="white" href="#divisiones">Ir a divisiones</a>
                
            </div>
        </div>
    </section>
    <section id="instalaciones" class="relative">
        <div class="bg-cover w-full py-36 bg-black" style="background-image:url({{ asset('images/nuestra-historia-bg.jpg') }})">
            <div class="container mx-auto px-6 md:px-32 flex flex-row flex-wrap items-center">
                <div class="texto w-full md:w-1/2 mb-10 md:mb-0">
                    <h2 class="mb-3 uppercase font-bold text-lg text-primary text-center md:text-left">Instalaciones</h2>
                    <p class="md:text-2xl text-xl text-white font-bold text-center md:text-left mb-10">Nuestras sedes están <span class="text-primary">estratégicamente ubicadas</span> en las ciudades con mayor crecimiento tecnológico en México.</p>
                    <a href="#contacto" class="btn btn-primary">Contacto</a>
                </div>
                <div class="mapa w-full md:w-1/2 relative">
                    <img class="w-full h-full object-contain" src="{{ asset('images/instalaciones-mapa.png') }}" alt="">
                    <!-- Guadalajara -->
                    <div class="pin-map gdl cursor-pointer absolute">
                        <div class="globo-text-container" style="display:none">
                            <div class="w-1/2">
                                <img class="w-full pr-6" src="{{ asset('images/instalaciones/gdl.jpg') }}" alt="">
                            </div>
                            <div class="w-1/2">
                                <h4 class="uppercase font-bold text-sm text-primary">GUADALAJARA</h4>
                                <p class="text-xs">
                                    <span class="font-bold">
                                    Oficinas Corporativas Nacionales - Centro de Investigación Biomédica / Central de Servicios Médicos
                                    </span>
                                </p>
                                <a href="tel:3320028697" class="text-xs hover:underline">33 2002 8697  </a> 
                                <p class="text-xs">
                                Volcán Popocatépetl 3502, El Coli Urbano, Zapopan Jalisco
                                </p>
                                <a href="https://goo.gl/maps/5Yvbx8z3PTGTvm9Q9" target="_blank" class="text-xs font-bold text-primary hover:underline">
                                    Ver cómo llegar
                                </a>
                            </div>
                        </div>
                        <span class="flex h-2 w-2 relative pin">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-80"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                    </div>
                    <!-- Aguascalientes -->
                    <div class="pin-map ags cursor-pointer absolute">
                        <div class="globo-text-container" style="display:none">
                            <div class="w-1/2">
                                <img class="w-full pr-6" src="{{ asset('images/instalaciones/ags.jpg') }}" alt="">
                            </div>
                            <div class="w-1/2">
                                <h4 class="uppercase font-bold text-sm text-primary">AGUASCALIENTES</h4>
                                <p class="text-xs">
                                    <span class="font-bold">
                                    Centro de Investigación Biomédica / Central de Servicios Médicos
                                    </span>
                                </p>
                                <a href="tel:4995510900" class="text-xs hover:underline">499 551 0900  </a> 
                                <p class="text-xs">
                                Av. Universidad 412, San Cayetano, Aguscalientes
                                </p>
                                <a href="https://goo.gl/maps/sh5ji4bMgd7KV6MV7" target="_blank" class="text-xs font-bold text-primary hover:underline">
                                    Ver cómo llegar
                                </a>
                            </div>
                        </div>
                        <span class="flex h-2 w-2 relative pin">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-80"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                    </div>
                    <!-- CDMX -->
                    <div class="pin-map cdmx cursor-pointer absolute">
                        <div class="globo-text-container" style="display:none">
                            <div class="w-1/2">
                                <img class="w-full pr-6" src="{{ asset('images/instalaciones/cdmx.jpg') }}" alt="">
                            </div>
                            <div class="w-1/2">
                                <h4 class="uppercase font-bold text-sm text-primary">CIUDAD DE MÉXICO</h4>
                                <p class="text-xs">
                                    <span class="font-bold">
                                    Centro de Investigación Biomédica / Central de Servicios Médicos 
                                    </span>
                                </p>
                                <a href="tel:5589836795" class="text-xs hover:underline">55 8983 6795</a> 
                                <p class="text-xs">
                                Av. Insurgentes Sur 662, del Valle Centro, Benito Juárez
                                </p>
                                <a href="https://goo.gl/maps/8r6VfwhnpdBzFD2j9" target="_blank" class="text-xs font-bold text-primary hover:underline">
                                    Ver cómo llegar
                                </a>
                            </div>
                        </div>
                        <span class="flex h-2 w-2 relative pin">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-80"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="middle-section-buttons transform translate-y-12">
                <a class="white" href="#clientes">Ir a clientes</a>
                <div class="relative">
                    <div class="white-stick"></div>
                    <div class="black-stick"></div>
                </div>
                <a class="black" href="#instalaciones">Ir a instalaciones</a>
                
            </div>
        </div>
    </section>
    <section id="clientes">
        <div class="container mx-auto px-6 md:px-40 py-28 relative">
            <h2 class="mb-3 uppercase font-bold text-lg md:text-xl text-primary text-center">Clientes</h2>
            <p class="md:text-2xl text-xl font-bold text-center px-0 md:px-32">Los años de experiencia, y la pasión que ponemos en cada uno de nuestros proyectos, nos ha llevado a poder colaborar con <span class="text-primary">compañías de talla internacional.</span></p>
            <div class="w-full flex flex-row justify-between items-center flex-wrap mt-10">
                <div class="w-full">
                    <img class="clientes-img w-full mt-3" src="{{ asset('/images/clientes.jpg') }}" alt="">
                </div>
                
            </div>
        </div>
    </section>
    <section id="inspiramos">
        <div class="w-full py-44 bg-cover bg-center relative bg-fixed" style="background-image:url({{ asset('/images/inspiramos.jpg') }})">
            <p class="text-center text-white text-2xl md:text-5xl w-full px-6 md:px-0 md:w-2/3 xl:w-1/3 mx-auto font-bold">Inspiramos a comunidades
            para una vida más sana.</p>
        </div>
    </section>
    
    
    <section id="contacto"  class="py-10  bg-black bg-fixed" style="background-image:url({{ asset('images/nuestra-historia-bg.jpg') }})">
        <div class="w-full px-6 md:px-32 flex flex-col md:flex-row-reverse justify-between relative container mx-auto md:items-start flex-wrap">
            <div class="w-full mt-10">
                <h2 class="title mb-3 uppercase font-bold text-lg md:text-xl text-white text-center">Contacto</h2>
                <p class="text text-lg md:text-2xl font-bold text-center px-0 md:px-32 text-white">
                    Envíanos un correo a <a class="text-primary underline" href="mailto:contacto@cidvid.com.mx">contacto@cidvid.com.mx</a>  o deja tus datos aquí y nos pondremos en contacto contigo
                </p>
            </div>
            
            <div class="w-full mt-14 md:mt-28 px-6">
                
                <livewire:form-controller>
            </div>
            <livewire:frontend.vacant-controller>
        </div>
    </section>
</x-guest-layout>