<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

    <section id="single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article>
                        <!-- div class="thumbnail text-center w-100 mb-4">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("large", [
                                    "class" => "img-fluid rounded",
                                ]); ?>
                            <?php endif; ?>
                        </div -->

                        <h1>
                            <?php the_title(); ?>
                        </h1>

                        <!-- post details -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="author"><?php esc_html_e(
                                    "Por",
                                    "replica"
                                ); ?> <?php the_author_posts_link(); ?></span>
                            </li>
                            <li class="list-inline-item">
                                <time datetime="<?php the_time(
                                    "Y-m-d"
                                ); ?> <?php the_time("H:i"); ?>">
                           					<?php the_date(); ?> <?php the_time(); ?>
                            				</time>
                            </li>
                        </ul>
             			<!-- /post details -->

                        <?php the_content();
        // Dynamic Content.
        ?>

             			<?php edit_post_link();
        // Always handy to have Edit Post Links available.
        ?>
                    </article>
                </div>
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

    <?php
    endwhile; ?>
	<?php
else:
     ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e("Sorry, nothing to display.", "html5blank"); ?></h1>

		</article>
		<!-- /article -->

	<?php
endif; ?>

	<main role="main" aria-label="Content">
	<!-- section -->
	<section>

<?php get_footer(); ?>
