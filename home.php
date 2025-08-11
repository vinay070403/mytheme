<?php

/**
 * Blog Posts Index Template
 *
 * @package MyTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <h1>Blog Posts</h1>

            <?php
            // The Loop
            while (have_posts()) :
                the_post();
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                }

            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-meta">
                            Posted on <?php the_date(); ?> by <?php the_author(); ?>
                        </div>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>

            <?php endwhile; ?>

            <div class="pagination">
                <?php
                // Pagination links
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Previous', 'mytheme'),
                    'next_text' => __('Next »', 'mytheme'),
                ));
                ?>
            </div>

        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'mytheme'); ?></p>
        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>