<?php
/**
 * Date Archive Template
 *
 * @package MyTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <h1>Archives for: <?php echo get_the_date( 'F Y' ); ?></h1>

    <?php if ( have_posts() ) : ?>

        <?php
        while ( have_posts() ) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        Posted on <?php the_date(); ?>
                    </div>
                </header>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>

        <div class="pagination">
            <?php
            the_posts_pagination();
            ?>
        </div>

    <?php else : ?>
        <p><?php esc_html_e( 'No posts for this date.', 'mytheme' ); ?></p>
    <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
