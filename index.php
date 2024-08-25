<?php get_header(); ?>

<div class="site-wrapper">

    <!-- Centered Welcome Message -->
    <div class="centered-container">
        <div class="welcome-message">
            <h1>Welcome to My Website</h1>
            <p>We are glad to have you here!</p>
        </div>
    </div>

    <div class="content-area">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Display posts -->
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php else : ?>
            <!-- Message if no posts are found -->
            <!-- <p>No content available at this moment. Please check back later!</p> -->
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
