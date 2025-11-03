<?php
/**
 * The template for displaying archive pages (categories, tags, etc.)
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="category-archive py-5">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="category-header">
                <h1>
                    <?php
                    if (is_category()) {
                        echo 'Category: ' . single_cat_title('', false);
                    } elseif (is_tag()) {
                        echo 'Tag: ' . single_tag_title('', false);
                    } elseif (is_author()) {
                        echo 'Author: ' . get_the_author();
                    } elseif (is_date()) {
                        echo 'Archive: ' . get_the_date('F Y');
                    } else {
                        echo 'Archives';
                    }
                    ?>
                </h1>

                <?php
                if (is_category() && category_description()) :
                ?>
                    <div class="category-description">
                        <p><strong>Description:</strong> <?php echo category_description(); ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row mt-5">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <article class="post-card">
                            <?php mbstech_post_categories(); ?>

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php mbstech_post_meta(); ?>

                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-success mt-2">
                                Read More
                            </a>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php mbstech_pagination(); ?>

        <?php else : ?>
            <div class="row">
                <div class="col-12">
                    <div class="no-posts text-center py-5">
                        <h2>No posts found</h2>
                        <p class="text-muted">There are no posts in this category yet.</p>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary mt-3">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
