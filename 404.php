<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="error-404-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1 fw-bold mb-4">404</h1>
                <h2 class="h3 fw-bold mb-4">Page not found</h2>
                <p class="mb-4">
                    Sorry, but the page you are looking for does not exist or has been moved.
                </p>
                <p class="mb-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">Back to the front page</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

