<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

    <section id="single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article>
                        <h1>
                            <?php the_title(); ?>
                        </h1>

                        <!-- post details -->
                        <ul class="list-inline">
                            <li>
                                <time datetime="<?php the_time(
                                    "Y-m-d"
                                ); ?> <?php the_time("H:i"); ?>">
                           					<?php the_date(); ?> <?php the_time(); ?>
                            				</time>
                            </li>
                            <li>
                                <span class="author"><?php esc_html_e(
                                    "Published by",
                                    "html5blank"
                                ); ?> <?php the_author_posts_link(); ?></span>
                            </li>
                            <li>
                                <span class="comments"><?php if (
                                    comments_open(get_the_ID())
                                ) {
                                    comments_popup_link(
                                        __("Leave your thoughts", "html5blank"),
                                        __("1 Comment", "html5blank"),
                                        __("% Comments", "html5blank")
                                    );
                                } ?></span>
                            </li>
                        </ul>
             			<!-- /post details -->

                        <?php the_content();
        // Dynamic Content.
        ?>

             			<?php edit_post_link();
        // Always handy to have Edit Post Links available.
        ?>

             			<?php comments_template(); ?>
                    </article>
                </div>
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
