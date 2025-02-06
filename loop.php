<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

    <div class="col-lg-4 mb-4">
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
                <!-- p class="card-text">< get_the_excerpt(); ></p -->
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg rounded-pill">Leer más</a>
            </div>
        </div>
    </div>

<?php
    endwhile; ?>
<?php
else:
     ?>

    <div class="col-12 text-center">
        <!-- article -->
    	<article>
    		<h2><?php esc_html_e("Sorry, nothing to display.", "html5blank"); ?></h2>
    	</article>
    	<!-- /article -->
    </div>

<?php
endif; ?>
