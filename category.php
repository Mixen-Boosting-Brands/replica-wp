<?php get_header(); ?>

<section id="category">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1>
                    <span class="fw-bold"><?php single_cat_title(); ?></span>
                </h1>
            </div>
        </div>
        <div class="row mb-4">
            <?php get_template_part("loop"); ?>
        </div>
        <div class="row text-center">
            <?php echo bootstrap_pagination(); ?>
        </div>
    </div>
</section>

<section class="py-60">
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?php echo esc_url(
                home_url()
            ); ?>" class="btn btn-primary btn-lg rounded-pill">
                <i class="fa-solid fa-house"></i> <span class="author"><?php esc_html_e(
                    "Volver al inicio",
                    "replica"
                ); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
