<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="single-post">
    <section class="post-header" style="background: var(--navy); color: var(--white); padding: 100px 0; text-align: center;">
        <div class="container" style="max-width: 800px;">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 20px;"><?php the_category(', '); ?></p>
            <h1 style="font-size: 3.5rem; color: var(--white); line-height: 1.2; margin-bottom: 30px;"><?php the_title(); ?></h1>
            <div style="display: flex; justify-content: center; gap: 20px; opacity: 0.7;" class="accent-font">
                <span>By <?php the_author(); ?></span>
                <span>•</span>
                <span><?php echo get_the_date(); ?></span>
            </div>
        </div>
    </section>

    <div class="container" style="max-width: 900px; margin-top: -60px; position: relative; z-index: 10;">
        <?php if (has_post_thumbnail()) : ?>
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.15); margin-bottom: 60px;">
                <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto; display: block;')); ?>
            </div>
        <?php endif; ?>

        <article class="post-content" style="background: var(--white); padding: 60px; border-radius: 8px; box-shadow: 0 4px 30px rgba(0,0,0,0.05); margin-bottom: 80px; font-size: 1.15rem; line-height: 1.8; color: #333;">
            <div class="wp-content">
                <?php the_content(); ?>
            </div>
            
            <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                <div class="post-tags" class="accent-font" style="font-size: 0.8rem;">
                    <?php the_tags('Tags: ', ', '); ?>
                </div>
                <div class="share-links">
                    <p class="accent-font" style="font-size: 0.8rem; margin: 0; color: #999;">Share this article</p>
                </div>
            </div>
        </article>
        
        <nav class="post-navigation" style="display: flex; justify-content: space-between; margin-bottom: 100px;">
            <div class="nav-previous"><?php previous_post_link('%link', '&larr; Previous Post'); ?></div>
            <div class="nav-next"><?php next_post_link('%link', 'Next Post &rarr;'); ?></div>
        </nav>
    </div>
</main>
<?php endwhile; endif; ?>

<style>
    .wp-content h2 { font-size: 2rem; margin: 40px 0 20px; color: var(--navy); }
    .wp-content h3 { font-size: 1.6rem; margin: 30px 0 15px; color: var(--navy); }
    .wp-content p { margin-bottom: 25px; }
    .wp-content ul, .wp-content ol { margin-bottom: 25px; padding-left: 20px; }
    .wp-content li { margin-bottom: 10px; }
    .post-navigation a { text-decoration: none; color: var(--navy); font-weight: 700; font-family: 'Oswald', sans-serif; text-transform: uppercase; border-bottom: 2px solid var(--gold); }
</style>

<?php get_footer(); ?>
