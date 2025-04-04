<?php get_header(); ?>

<section id="category">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1>
                    <span class="fw-bold"><?php
                    esc_html_e("Posts de", "replica");
                    echo " " . get_the_author();
                    ?></span>
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

<?php get_footer(); ?>
