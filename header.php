<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " : ";
        }
        bloginfo("name");
        ?></title>

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Replica" />
        <link rel="manifest" href="/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="#nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#equipo-1">Equipo</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#certificados">Certificaciones</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#servicios">Servicios</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="#blog">Blog</a>
                        </li>
                    </ul>
                </nav>
                <a href="#contacto" class="anchor btn btn-primary rounded-pill" id="btn-contacto"
                    >Contáctanos</a
                >
                <ul class="social list-inline mb-5">
                    <li class="list-inline-item">
                        <a href="https://facebook.com/" target="_blank"">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com/" target="_blank"">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://linkedin.com/" target="_blank"">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <header id="navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 col-lg-2 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-8 col-lg-10 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#nosotros">Nosotros</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#equipo-1">Nuestro equipo</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#certificados">Certificaciones</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#servicios">Servicios</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#blog">Blog</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#contacto">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
