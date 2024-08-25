<?php get_header(); ?>

<div class="content-area">
    <main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div class="breadcrumbs">
                    <?php my_custom_breadcrumb(); ?>
                </div>
                <?php the_content(); ?>
            </article>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no pages matched your criteria.', 'my-custom-theme' ); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
