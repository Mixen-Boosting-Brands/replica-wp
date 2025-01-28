<?php get_header(); ?>

<section id="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1 col-xl-3 offset-xl-1 my-auto">
                <h1 class="mb-4" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    Por abogados,<br /><span>para abogados.</span>
                </h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Traducción de documentos legales inglés-español,
                    realizada por expertos en derecho y lingüística.
                </p>
                <a href="#nosotros" class="btn btn-primary btn-lg rounded-pill" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
                    >Sobre nosotros</a
                >
            </div>
            <div class="col-xl-8 position-relative">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/decor-jumbotron.png"
                    alt=""
                    id="decor-jumbotron"
                    class="img-fluid"
                    data-aos="fade-in"
                    data-aos-duration="1000"
                    data-aos-delay="900"
                />
            </div>
        </div>
    </div>
</section>

<section id="clientes" class="text-white py-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!-- Slider main container -->
                <div class="swiper swiper-clientes" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/1.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/2.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/3.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/4.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/5.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/6.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes/7.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nosotros" class="text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2 col-lg-8 offset-lg-4">
                <h1 class="mb-4" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Sobre <span>nosotros</span></h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Replica es una empresa familiar. Natalia y Carlos,
                    ambos socios, dirigimos un equipo de tres
                    traductoras profesionales.
                </p>

                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    Fundamos Replica en 2019 y hasta la fecha hemos
                    asesorado a más de cien empresas extranjeras que
                    hacen negocios en México, así como a empresas
                    mexicanas en el extranjero.
                </p>

                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">
                    Nuestros clientes incluyen despachos de abogados
                    líderes en México y Estados Unidos, firmas contables
                    Big Four, empresas que cotizan en las bolsas de
                    Nueva York y Toronto, unicornios, ONGs,
                    universidades y tribunales en México y EUA.
                </p>
            </div>
        </div>
    </div>
</section>

<section
    id="descanso"
    class="parallax-window text-white py-60"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-descanso.png"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 my-lg-auto text-lg-start">
                <h1 class="impuestos mb-0" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    <span>Tradujimos los documentos</span> para<br />
                    una <span>devolución de impuestos</span> de
                </h1>
            </div>
            <div class="col-lg-4 my-lg-auto text-lg-end">
                <h1 class="cantidad mb-0" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    $83 millones<br /><span>de dólares</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<section
    id="logros"
    class="parallax-window"
    data-parallax="scroll"
    data-image-src=""
>
    <div class="container">
        <div class="row mb-md-5">
            <div class="col-md-3 mb-4 my-md-auto" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="0">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logros/1.png"
                    alt=""
                />
                <p>Hemos apoyado a más de 400 clientes, incluyendo empresas y personas.</p>
            </div>
            <div class="col-md-3 mb-4 my-md-auto" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logros/2.png"
                    alt=""
                />
                <p>
                    Cuidamos la confidencialidad de los documentos trabajando solo con traductoras internas.
                </p>
            </div>
            <div class="col-md-3 mb-4 my-md-auto" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="300">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logros/3.png"
                    alt=""
                />
                <p>
                    Cumplimos con el pago de nuestros impuestos y nuestras obligaciones laborales.
                </p>
            </div>
            <!-- div class="col-md-3 mb-4 my-md-auto" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="400">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logros/4.png"
                    alt=""
                />
                <p>Cumplimos con el pago de nuestros impuestos.</p>
            </div -->
            <div class="col-md-3 mb-4 my-md-auto" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="500">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logros/5.png"
                    alt=""
                />
                <p>
                    Hemos participado como traductores en juicios en México, EUA, Hong Kong, Londres y La Haya.
                </p>
            </div>
        </div>
    </div>
</section>

<section
    id="equipo-1"
    class="equipo parallax-window text-white py-60"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-equipo-1.png"
>
    <div class="decor"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1 class="mb-0" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Nuestro <span>equipo</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3 my-auto">
                        <div class="thumb-equipo" data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/1.png"
                                alt=""
                                class="img-fluid rounded mb-4 mb-lg-0"
                            />
                        </div>
                    </div>
                    <div class="col-lg-9 my-auto text-justify">
                        <p data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200">
                            <span class="fs-1">Carlos</span> es un
                            abogado bilingüe con formación en México y
                            Estados Unidos. Ha trabajado en despachos de
                            abogados en ambos países, así como en una
                            empresa multinacional canadiense, acumulando
                            experiencia como abogado litigante,
                            transaccional e in-house. Cursó una maestría
                            en derecho en la University of Chicago Law
                            School, otra en derecho fiscal en la
                            Universidad de Monterrey y la licenciatura
                            en derecho en el Tecnológico de Monterrey.
                            Además, fue profesor de inglés jurídico en
                            esa misma institución. Ha estudiado en
                            México, EUA, Francia e Inglaterra, y vivido
                            en Chicago, Washington D.C., Monterrey y
                            Chihuahua. Con doble nacionalidad mexicana y
                            estadounidense, Carlos aporta una
                            perspectiva intercultural, con
                            especialización en derecho mexicano,
                            estadounidense y tratados internacionales de
                            comercio e inversión.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    id="equipo-2"
    class="equipo parallax-window text-white py-60"
    data-parallax="scroll"
    data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-equipo-2.png"
>
    <div class="decor"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4">
                <div class="row">
                    <div class="col-lg-3 my-auto">
                        <div class="thumb-equipo" data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="300">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/2.png"
                                alt=""
                                class="img-fluid rounded mb-4 mb-lg-0"
                            />
                        </div>
                    </div>
                    <div class="col-lg-9 my-auto text-justify">
                        <p data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="4000">
                            <span class="fs-1">Natalia</span> es una
                            abogada bilingüe, licenciada en derecho por
                            el Tecnológico de Monterrey, con maestría en
                            valuación de inmuebles y estudios de derecho
                            internacional y teoría de la traducción en
                            la Universidad de Chicago, el Instituto
                            Lorenzo De' Medici en Italia y la
                            Organización Mexicana de Traductores.
                            Natalia trabajó varios años como abogada
                            litigante y transaccional y también fue
                            profesora de inglés en el Tecnológico de
                            Monterrey. Natalia inició su práctica como
                            traductora profesional en Mexicali, Baja
                            California, y posteriormente lideró lo que
                            ahora es Replica. Habiendo cursado la
                            primaria en California y vivido en diversas
                            ciudades de México y Estados Unidos, Natalia
                            aporta una visión intercultural invaluable a
                            su trabajo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certificados" class="pt-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-3 my-auto">
                <div class="row mb-4 mb-lg-0">
                    <div class="col-4 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/certificados/ico-certifiados.png"
                            alt=""
                            class="img-fluid"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        />
                    </div>
                    <div class="col-8 my-auto">
                        <h1 data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100">Certificados por:</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/certificados/logo-pjf.png"
                            alt=""
                            class="logo img-fluid mb-4 mb-lg-0" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        />
                    </div>
                    <div class="col-6 col-lg-3 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/certificados/logo-at.png"
                            alt=""
                            class="logo img-fluid mb-4 mb-lg-0" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        />
                    </div>
                    <div class="col-6 col-lg-3 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/certificados/logo-omt.png"
                            alt=""
                            class="logo img-fluid mb-4 mb-lg-0" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        />
                    </div>
                    <div class="col-6 col-lg-3 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/certificados/logo-tfja.png"
                            alt=""
                            class="logo img-fluid mb-4 mb-lg-0" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <hr / data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600">
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="pb-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-3">
                <h1 class="fw-bold" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">Servicios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 my-auto">
                                <div class="row">
                                    <div
                                        class="col-3 my-auto text-center"
                                    >
                                        <h1>01.</h1>
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/servicios/ico-1.png"
                                            alt=""
                                            class="icono img-fluid"
                                        />
                                    </div>
                                    <div
                                        class="col-9 my-auto text-start"
                                    >
                                        <h1>Documentos jurídicos</h1>
                                        <p>
                                            Traducción profesional de
                                            documentos jurídicos
                                            inglés-español.  Con enfoque
                                            en derecho mexicano, de
                                            Estados Unidos y tratados
                                            internacionales de comercio
                                            e inversión.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 my-auto text-center">
                                <a
                                    href="#contacto"
                                    class="btn btn-lg rounded-pill"
                                    >Contáctanos</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 my-auto">
                                <div class="row">
                                    <div
                                        class="col-3 my-auto text-center"
                                    >
                                        <h1>02.</h1>
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/servicios/ico-2.png"
                                            alt=""
                                            class="icono img-fluid"
                                        />
                                    </div>
                                    <div
                                        class="col-9 my-auto text-start"
                                    >
                                        <h1>Documentos migratorios</h1>
                                        <p>
                                            Traducción
                                            de documentos personales
                                            para trámites migratorios
                                            ante el USCIS y las
                                            autoridades mexicanas. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 my-auto text-center">
                                <a
                                    href="#contacto"
                                    class="btn btn-lg rounded-pill"
                                    >Contáctanos</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 my-auto">
                                <div class="row">
                                    <div
                                        class="col-3 my-auto text-center"
                                    >
                                        <h1>03.</h1>
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/servicios/ico-3.png"
                                            alt=""
                                            class="icono img-fluid"
                                        />
                                    </div>
                                    <div
                                        class="col-9 my-auto text-start"
                                    >
                                        <h1>Documentos financieros</h1>
                                        <p>
                                            Traducción de estados financieros, estados de cuenta bancarios y documentos relacionados.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 my-auto text-center">
                                <a
                                    href="#contacto"
                                    class="btn btn-lg rounded-pill"
                                    >Contáctanos</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 my-auto">
                                <div class="row">
                                    <div
                                        class="col-3 my-auto text-center"
                                    >
                                        <h1>04.</h1>
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/servicios/ico-4.png"
                                            alt=""
                                            class="icono img-fluid"
                                        />
                                    </div>
                                    <div
                                        class="col-9 my-auto text-start"
                                    >
                                        <h1>Documentos académicos</h1>
                                        <p>
                                            Traducción de documentos académicos como títulos y certificados de estudios.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 my-auto text-center">
                                <a
                                    href="#contacto"
                                    class="btn btn-lg rounded-pill"
                                    >Contáctanos</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonios" class="text-white py-60">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    Testimonios de<br /><span class="fw-bold"
                        >clientes</span
                    >
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Slider main container -->
                <div
                    class="swiper swiper-testimonios"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Respuesta inmediata y gran calidad de traducciones
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Karla Monteverde
                                            </p>
                                            <p class="handle mb-0">
                                                Vizsla Silver
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Estoy muy satisfecha y contenta con el servicio que he recibido por parte de ustedes, siempre cumplen con las fechas de entrega, nos apoyan con traducciones que en ocasiones son de imprevisto y hacen el esfuerzo por entregarnos en tiempo, un equipo muy dedicado y ampliamente recomendado.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Yesenia Hernández
                                            </p>
                                            <p class="handle mb-0">
                                                Motorad
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        El equipo de Replica trabaja de manera sumamente profesional, cuando les he pedido trabajos importantes siempre entregan en tiempo y forma y mantienen una comunicación constante y muy abierta. Son un equipo con una gran disposición y sobre todo confiables.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Rocío Cañada
                                            </p>
                                            <p class="handle mb-0">
                                                Nonco
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Trabajar con RLT ha sido una experiencia muy satisfactoria, principalmente por los tiempos de respuesta tan eficientes y la excelente calidad en la traducción.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Alejandro Martínez
                                            </p>
                                            <p class="handle mb-0">
                                                Chevez Ruiz Zamarripa
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Excelente servicio y calidad.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Herlinda González
                                            </p>
                                            <p class="handle mb-0">
                                                Teck Resources
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Son unos profesionales en toda la extensión de la palabra, ha sido una grata experiencia.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Pablo Mendez
                                            </p>
                                            <p class="handle mb-0">
                                                EC Rubio
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Sí recomiendo trabajar con Replica.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Verónica Alvarado
                                            </p>
                                            <p class="handle mb-0">
                                                Mahle Behr
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 8 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Ampliamente recomendados, servicio muy profesional y trabajos de muy alta calidad.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Martín Arzate
                                            </p>
                                            <p class="handle mb-0">
                                                Prokarma (PK Global)
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 9 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Carlos y Natalia son amables, profesionales y responden con mucha rapidez. Todo el tiempo atendieron mis dudas y me guiaron con recomendaciones. Sin duda volvería a solicitar sus servicios y los recomiendo ampliamente.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Melisa López
                                            </p>
                                            <p class="handle mb-0">

                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 10 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Muy buena atención, transparentes y claros en la información, puntual seguimiento de los trámites.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Joaquín Loya
                                            </p>
                                            <p class="handle mb-0">

                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 11 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p class="card-text">
                                        Hemos solicitado traducciones, algunas muy voluminosas, y siempre cumplen con los tiempos. Excelentes traductores y abogados.
                                    </p>
                                    <ul class="list-inline mb-0">
                                        <!-- li class="list-inline-item">
                                            <img
                                                src="<?php echo esc_url(
                                                    get_template_directory_uri()
                                                ); ?>/assets/images/testimonios/1.png"
                                                class="icon img-fluid"
                                                alt="..."
                                            />
                                        </li -->
                                        <li class="list-inline-item">
                                            <p class="fw-bold mb-0">
                                                Emilio Arteaga
                                            </p>
                                            <p class="handle mb-0">

                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    id="contacto"
    class="parallax-window py-60"
    data-parallax="scroll"
    data-image-src=""
>
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    ¿Necesitas traducciones?<br /><span
                        >Somos tu mejor opción lingüística</span
                    >
                </h1>
            </div>
        </div>
        <div class="row">
            <!-- div class="col-lg-6 mb-4">
                <div id="form-1" class="formulario" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    <h1 class="titulo">Formulario de contacto</h1>

                    <div id="form-messages"></div>

                    <form
                        action="./mailer.php"
                        method="POST"
                        class="row g-3 needs-validation contact-form mb-4 mb-lg-0"
                        id="ajax-contact"
                        novalidate
                    >
                        <div class="col-md-12 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre completo*"
                                pattern=".{5,50}"
                                required
                            />
                            <label for="nombre" class="form-label"
                                >Nombre completo*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu nombre completo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="email"
                                class="form-control shadow-none"
                                id="correo"
                                name="correo"
                                placeholder="Correo electrónico*"
                                required
                            />
                            <label for="correo" class="form-label"
                                >Correo electrónico*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce una dirección de
                                correo válida.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="tel"
                                class="form-control shadow-none"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono*"
                                required
                            />
                            <label for="telefono" class="form-label"
                                >Teléfono*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce un número de
                                teléfono válido.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <textarea
                                class="form-control shadow-none"
                                id="mensaje"
                                name="mensaje"
                                placeholder="Mensaje*"
                                style="height: 100px"
                                required
                            ></textarea>
                            <label for="mensaje">Mensaje*</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu mensaje.
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg btn-block rounded-pill"
                            >
                                <i class="fa-solid fa-paper-plane"></i>
                                Enviar
                            </button>
                            <div id="hold-on-a-sec">
                                <i
                                    id="contact-spinner"
                                    class="fas fa-spinner fa-spin"
                                ></i>
                                Por favor espera..
                            </div>
                        </div>
                    </form>
                </div>
            </div -->
            <div class="col-12 col-lg-8 offset-lg-2">
                <div id="form-2" class="formulario" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    <h1 class="titulo">Solicita tu cotización</h1>

                    <div id="form-messages"></div>

                    <form
                        action="./mailer.php"
                        method="POST"
                        class="row g-3 needs-validation contact-form mb-4 mb-lg-0"
                        id="ajax-contact"
                        novalidate
                    >
                        <div class="col-md-12 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre completo*"
                                pattern=".{5,50}"
                                required
                            />
                            <label for="nombre" class="form-label"
                                >Nombre completo*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu nombre completo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="email"
                                class="form-control shadow-none"
                                id="correo"
                                name="correo"
                                placeholder="Correo electrónico*"
                                required
                            />
                            <label for="correo" class="form-label"
                                >Correo electrónico*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce una dirección de
                                correo válida.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="tel"
                                class="form-control shadow-none"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono*"
                                required
                            />
                            <label for="telefono" class="form-label"
                                >Teléfono*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce un número de
                                teléfono válido.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="idioma-nativo"
                                name="idioma-nativo"
                                placeholder="Idioma nativo*"
                                required
                            />
                            <label
                                for="idioma-nativo"
                                class="form-label"
                                >Idioma nativo*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu idioma nativo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="idioma-meta"
                                name="idioma-meta"
                                placeholder="Idioma nativo*"
                                required
                            />
                            <label for="idioma-meta" class="form-label"
                                >Idioma meta*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu idioma meta.
                            </div>
                        </div>
                        <div class="col-md-6 my-auto mt-4">
                            <label
                                for="userfile"
                                class="form-label btn"
                            >
                                <i class="fa-solid fa-paperclip"></i>
                                Adjunta el archivo a traducir (.doc,
                                .pdf)*
                            </label>
                            <input
                                type="hidden"
                                name="MAX_FILE_SIZE"
                                value="10000000"
                            />
                            <input
                                type="file"
                                class="form-control form-control-sm"
                                id="userfile"
                                name="userfile[]"
                                multiple="multiple"
                                aria-describedby="fileUploadBlock"
                                required
                            />
                            <div id="fileUploadBlock" class="form-text">
                                Tamaño máximo de archivo: 10 MB
                            </div>
                        </div>
                        <div class="col-md-6 my-auto mt-4">
                            <input
                                type="date"
                                class="form-control shadow-none"
                                id="fecha-entrega"
                                name="fecha-entrega"
                                placeholder="Fecha de entrega*"
                                lang="es"
                                required
                            />
                            <label
                                for="fecha-entrega"
                                class="form-label"
                                >Fecha de entrega*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce una fecha de
                                entrega.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <textarea
                                class="form-control shadow-none"
                                id="comentarios"
                                name="comentarios"
                                placeholder="Comentarios*"
                                style="height: 100px"
                                required
                            ></textarea>
                            <label for="comentarios"
                                >Comentarios*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tus comentarios.
                            </div>
                        </div>
                        <div class="col-md-12 my-auto text-end">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg btn-block rounded-pill"
                            >
                                <i class="fa-solid fa-paper-plane"></i>
                                Enviar
                            </button>
                            <div id="hold-on-a-sec">
                                <i
                                    id="contact-spinner"
                                    class="fas fa-spinner fa-spin"
                                ></i>
                                Por favor espera..
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="text-white">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="0">
                    <span class="fw-bold">Blog</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Slider main container -->
                <div
                    class="swiper swiper-blog"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                        $args = [
                            "category_name" => "blog",
                            "post_type" => "post",
                            "posts_per_page" => 10,
                        ];

                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()):
                            while ($blog_query->have_posts()):
                                $blog_query->the_post(); ?>

                        <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail("blog", [
                                                "class" => "card-img-top",
                                            ]); ?>
                                        <?php endif; ?>
                                    </a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="card-title"><?php the_title(); ?></h3>
                                        </a>
                                        <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg rounded-pill">Leer más</a>
                                    </div>
                                </div>
                            </div>

                        <?php
                            endwhile; ?>
                        <?php wp_reset_postdata();
                            // Reset post data
                            ?>
                        <?php
                        else:
                             ?>
                            <div class="swiper-slide text-center">No se encontraron posts.</div>
                        <?php
                        endif;
                        ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a
                    href="<?php echo esc_url(
                        get_category_link(get_cat_ID("blog"))
                    ); ?>"
                    class="btn btn-lg btn-outline-light rounded-pill"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                    >Ver más</a
                >
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
