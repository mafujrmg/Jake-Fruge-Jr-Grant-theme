<?php get_header(); ?>

<main class="standard-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="page-header" style="background: var(--navy); color: var(--white); padding: 80px 0; text-align: center;">
            <div class="container">
                <h1 class="section-title" style="color: var(--white); margin-bottom: 0;"><?php the_title(); ?></h1>
            </div>
        </section>

        <section class="page-content" style="padding: 80px 0;">
            <div class="container" style="max-width: 800px;">
                <div class="wp-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
