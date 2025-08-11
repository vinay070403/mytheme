<?php
/**
 * Single Portfolio Template
 *
 * @package MyTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile;
    else :
        echo '<p>' . esc_html__( 'Sorry, no portfolio found.', 'mytheme' ) . '</p>';
    endif;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
