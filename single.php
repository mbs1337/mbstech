<?php
/**
 * The template for displaying single posts
 *
 * @package mbsTECH
 */

get_header();
?>

<article class="single-post py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="single-post-content">
                <?php mbstech_post_categories(); ?>

                <h1 class="post-title"><?php the_title(); ?></h1>

                <?php mbstech_post_meta(); ?>

                <div class="post-content mt-4">
                    <?php the_content(); ?>
                </div>

                <?php
                // Post navigation
                $prev_post = get_previous_post();
                $next_post = get_next_post();

                if ($prev_post || $next_post) :
                ?>
                    <nav class="post-navigation mt-5 pt-4" style="border-top: 1px solid var(--border-color);">
                        <div class="row">
                            <?php if ($prev_post) : ?>
                                <div class="col-md-6 mb-3">
                                    <div class="nav-previous">
                                        <small class="text-muted d-block mb-2">← Previous Post</small>
                                        <a href="<?php echo get_permalink($prev_post); ?>" class="h5">
                                            <?php echo get_the_title($prev_post); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post) : ?>
                                <div class="col-md-6 mb-3 <?php echo !$prev_post ? 'ms-auto' : ''; ?>">
                                    <div class="nav-next text-md-end">
                                        <small class="text-muted d-block mb-2">Next Post →</small>
                                        <a href="<?php echo get_permalink($next_post); ?>" class="h5">
                                            <?php echo get_the_title($next_post); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                <?php endif; ?>

                <!-- Comments section -->
                <?php
                if (comments_open() || get_comments_number()) :
                ?>
                    <div class="comments-section mt-5 pt-4" style="border-top: 1px solid var(--border-color);">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>

                <!-- Social Share Section -->
                <div class="social-share mt-5 pt-4 text-center" style="border-top: 1px solid var(--border-color);">
                    <p class="mb-3">Liked this article? Please follow me on
                        <a href="https://twitter.com/baysorensen" target="_blank" rel="noopener">Twitter</a>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</article>

<?php get_footer(); ?>
