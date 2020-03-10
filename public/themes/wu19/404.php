<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();

?>


<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php ('Nothing Found'); ?></h1>
        </header>

        <div class="page-wrapper">
            <div class="page-content">
                <h2><?php _e('This is somewhat embarrassing! 😟', 'wu19'); ?></h2>
                <img class="error-picture" src="https://media.giphy.com/media/UoeaPqYrimha6rdTFV/giphy.gif">
                <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'wu19'); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </div><!-- .page-wrapper -->

    </div><!-- #content -->
</div><!-- #primary -->

<?php

get_footer();

?>