<?php $currentlang = get_bloginfo("language"); ?>
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
        <link
            rel="icon"
            type="image/svg+xml"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon.svg"
        />
        <link
            rel="shortcut icon"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon.ico"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo(
            "name"
        ); ?>" />
        <link rel="manifest" href="/site.webmanifest" />

        <link
            rel="stylesheet"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/css/styles.css"
        />

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
                        alt="<?php esc_attr_e("Logo Replica", "replica"); ?>"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="#nosotros"><?php _e(
                                "Nosotros",
                                "replica"
                            ); ?></a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#equipo-1"><?php _e(
                                "Equipo",
                                "replica"
                            ); ?></a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#certificados"><?php _e(
                                "Certificaciones",
                                "replica"
                            ); ?></a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#servicios"><?php _e(
                                "Servicios",
                                "replica"
                            ); ?></a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="#blog"><?php _e(
                                "Blog",
                                "replica"
                            ); ?></a>
                        </li>
                    </ul>
                </nav>
                <a href="#contacto" class="anchor btn btn-primary rounded-pill" id="btn-contacto">
                    <?php _e("Contáctanos", "replica"); ?>
                </a>
                <ul class="social list-inline mb-5">
                    <li class="list-inline-item">
                        <a href="https://facebook.com/" target="_blank" aria-label="<?php esc_attr_e(
                            "Facebook",
                            "replica"
                        ); ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com/" target="_blank" aria-label="<?php esc_attr_e(
                            "Instagram",
                            "replica"
                        ); ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://linkedin.com/" target="_blank" aria-label="<?php esc_attr_e(
                            "LinkedIn",
                            "replica"
                        ); ?>">
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
                                alt="<?php esc_attr_e(
                                    "Logo Replica",
                                    "replica"
                                ); ?>"
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-8 col-lg-10 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#nosotros"><?php _e(
                                        "Nosotros",
                                        "replica"
                                    ); ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#equipo-1"><?php _e(
                                        "Nuestro equipo",
                                        "replica"
                                    ); ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#certificados"><?php _e(
                                        "Certificaciones",
                                        "replica"
                                    ); ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#servicios"><?php _e(
                                        "Servicios",
                                        "replica"
                                    ); ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#blog"><?php _e(
                                        "Blog",
                                        "replica"
                                    ); ?></a>
                                </li>
                                <li class="list-inline-item">
                                    <?php if (
                                        function_exists("pll_the_languages")
                                    ) {
                                        pll_the_languages([
                                            "show_flags" => 1, // Mostrar banderas
                                            "show_names" => 0, // No mostrar nombres de idiomas
                                            "hide_current" => 1, // Ocultar idioma actual
                                            "force_home" => 0, // Los enlaces irán a la página traducida correspondiente
                                            "echo" => 1, // Imprimir directamente
                                            "hide_if_empty" => 0, // Mostrar todos los idiomas incluso si no hay traducciones
                                            "display_names_as" => "slug", // Mostrar el código del idioma (es, en, etc.)
                                        ]);
                                    } ?>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#contacto"><?php _e(
                                        "Contacto",
                                        "replica"
                                    ); ?></a>
                                </li>
                            </ul>
                        </nav>
                        <ul class="d-lg-none list-inline mb-0">
                            <li class="list-inline-item">
                                <?php if (
                                    function_exists("pll_the_languages")
                                ) {
                                    pll_the_languages([
                                        "show_flags" => 1, // Mostrar banderas
                                        "show_names" => 0, // No mostrar nombres de idiomas
                                        "hide_current" => 1, // Ocultar idioma actual
                                        "force_home" => 0, // Los enlaces irán a la página traducida correspondiente
                                        "echo" => 1, // Imprimir directamente
                                        "hide_if_empty" => 0, // Mostrar todos los idiomas incluso si no hay traducciones
                                        "display_names_as" => "slug", // Mostrar el código del idioma (es, en, etc.)
                                    ]);
                                } ?>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    id="mburger"
                                    href="javascript:void(0)"
                                    aria-label="<?php esc_attr_e(
                                        "Menú",
                                        "replica"
                                    ); ?>"
                                >
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
