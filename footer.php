<?php
$currentlang = get_bloginfo("language");
get_header();
?>

<footer class="text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- a href="/">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt="<?php esc_attr_e("Logo Replica", "replica"); ?>"
                        class="logo img-fluid mb-5" data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="0"
                    />
                </a -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <h1><?php _e("Ubicación", "replica"); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-5">
                            <li>
                                <address>
                                    <?php _e(
                                        "Hacienda del Carrizal 3204",
                                        "replica"
                                    ); ?><br />
                                    <?php _e(
                                        "Las Haciendas",
                                        "replica"
                                    ); ?><br />
                                    <?php _e("C.P. 31215", "replica"); ?><br />
                                    <?php _e(
                                        "Chihuahua, Chih., México",
                                        "replica"
                                    ); ?>
                                </address>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-5">
                            <li>
                                <address>
                                    <?php _e(
                                        "1401 S Street NW",
                                        "replica"
                                    ); ?><br />
                                    <?php _e("Unit 411", "replica"); ?><br />
                                    <?php _e(
                                        "Washington, D.C., EUA",
                                        "replica"
                                    ); ?><br />
                                    <?php _e("20009", "replica"); ?>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php _e("Teléfonos", "replica"); ?></h1>
                        <ul class="list-unstyled mb-5">
                            <li>
                                <?php _e("México:", "replica"); ?>
                                <a href="https://wa.link/m4joj8" target="_blank">
                                    <?php _e(
                                        "+52 614 427 3410 (con WhatsApp)",
                                        "replica"
                                    ); ?>
                                </a>
                            </li>
                            <li>
                                <?php _e("EE.UU.:", "replica"); ?>
                                <a href="tel:+12024153601">
                                    <?php _e(
                                        "+1 202 415 3061 (con mensajes de texto)",
                                        "replica"
                                    ); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h1><?php _e("Correos", "replica"); ?></h1>
                        <ul class="list-unstyled mb-5">
                            <li>
                                <a href="mailto:natalia@replicalt.com">natalia@replicalt.com</a>
                            </li>
                            <li>
                                <a href="mailto:carlos@replicalt.com">carlos@replicalt.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <ul class="social list-inline mb-5">
                    <!-- li class="list-inline-item">
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
                    </li -->
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/replica-legal-translation/" target="_blank" aria-label="<?php esc_attr_e(
                            "LinkedIn",
                            "replica"
                        ); ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="mb-0">
                    © <?php echo esc_html(date("Y")); ?> <?php bloginfo(
     "name"
 ); ?>.
                    <?php _e(
                        "Todos los derechos reservados.",
                        "replica"
                    ); ?><br>
                    <?php _e(
                        "Hecho con",
                        "replica"
                    ); ?> <i class="fa-solid fa-heart"></i> <?php _e(
     "por",
     "replica"
 ); ?>
                    <a href="https://mixen.mx/" target="_blank">Mixen</a>.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
<i class="fab fa-whatsapp whatsapp-icon"></i>
</a -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<script src="<?php echo esc_url(
    get_template_directory_uri()
); ?>/assets/js/app.bundle.js"></script>
</body>
</html>
