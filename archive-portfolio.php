<?php
/**
 * Portfolio Archive Template
 *
 * @package MyTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <h1>Portfolio Items</h1>

    <?php if ( have_posts() ) : ?>

        <?php
        while ( have_posts() ) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>

        <div class="pagination">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __('« Previous', 'mytheme'),
                'next_text' => __('Next »', 'mytheme'),
            ) );
            ?>
        </div>

    <?php else : ?>
        <p><?php esc_html_e( 'No portfolio items found.', 'mytheme' ); ?></p>
    <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
