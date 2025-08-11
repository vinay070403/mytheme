<?php
/**
 * Single Post Template
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
                    <div class="entry-meta">
                        Posted on <?php the_date(); ?> by <?php the_author(); ?>
                    </div>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    // Pagination for multi-page posts (if used)
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mytheme' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    // Display categories and tags
                    $categories_list = get_the_category_list( ', ' );
                    $tags_list = get_the_tag_list( '', ', ' );

                    if ( $categories_list ) {
                        echo '<span class="cat-links">Categories: ' . $categories_list . '</span>';
                    }

                    if ( $tags_list ) {
                        echo '<span class="tag-links">Tags: ' . $tags_list . '</span>';
                    }
                    ?>
                </footer>
            </article>

            <?php
            // Comments template
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>

        <?php endwhile;
    else :
        echo '<p>' . esc_html__( 'Sorry, no post found.', 'mytheme' ) . '</p>';
    endif;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
