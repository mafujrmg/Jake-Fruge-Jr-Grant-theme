<?php get_header(); ?>

<main class="blog-archive">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/blog-hero.webp') center/cover; color: var(--white); padding: 80px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Blog</p>
            <h1 style="font-size: 3rem; color: var(--white);">Insights & Resources</h1>
            <p style="opacity: 0.8; max-width: 600px; margin: 20px auto 0;">Guidance on entrepreneurship, financial literacy, and achieving your potential.</p>
        </div>
    </section>

    <section class="blog-list">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="height: 240px; overflow: hidden;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div style="padding: 35px;">
                            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                                <span class="accent-font" style="color: var(--gold); font-size: 0.75rem;"><?php echo get_the_date(); ?></span>
                                <span class="accent-font" style="color: #999; font-size: 0.75rem;">By <?php the_author(); ?></span>
                            </div>
                            <h2 style="font-size: 1.6rem; margin-bottom: 20px; line-height: 1.3;"><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a></h2>
                            <p style="color: #666; margin-bottom: 25px; line-height: 1.7;"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                            <a href="<?php the_permalink(); ?>" class="accent-font" style="color: var(--navy); text-decoration: none; font-weight: 700; border-bottom: 2px solid var(--gold); padding-bottom: 4px;">Read Article</a>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </div>

            <div class="pagination" style="margin-top: 60px; text-align: center;">
                <?php
                echo paginate_links(array(
                    'prev_text' => '<span class="accent-font">&larr; Previous</span>',
                    'next_text' => '<span class="accent-font">Next &rarr;</span>',
                ));
                ?>
            </div>
        </div>
    </section>
</main>

<style>
    .pagination .page-numbers { padding: 10px 18px; border: 1px solid #ddd; margin: 0 5px; text-decoration: none; color: var(--navy); border-radius: 4px; }
    .pagination .current { background: var(--gold); border-color: var(--gold); color: var(--navy); font-weight: 700; }
</style>

<?php get_footer(); ?>
