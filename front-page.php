<?php get_header(); ?>

<main class="front-page">
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/hero-grant.webp') center/cover; color: var(--white); text-align: center; padding: 120px 0;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 20px;">The Jake Fruge Jr Grant</p>
            <h1 style="font-size: 4rem; margin-bottom: 30px; line-height: 1.1; color: var(--white);">Fueling the Next Generation of Doers</h1>
            <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto 40px; opacity: 0.9;">A $1,000 annual grant for US college students who share the drive and ambition of entrepreneur Jake Fruge Jr.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn btn-gold">Apply Now</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-navy" style="border: 1px solid var(--white);">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
            <div>
                <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Our Mission</p>
                <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Removing Financial Barriers to Education</h2>
                <p style="margin-bottom: 20px; font-size: 1.1rem; color: #444;">Jake Fruge Jr built his career from nothing. He grew up in over 30 cities, attended 19 schools, and understands that financial hurdles should never stop a driven individual from reaching their potential.</p>
                <p style="margin-bottom: 30px; color: #444;">The Jake Fruge Jr Grant is designed for students who demonstrate resilience, resourcefulness, and a commitment to their future.</p>
                <a href="<?php echo esc_url(home_url('/eligibility')); ?>" class="btn btn-navy">Check Eligibility</a>
            </div>
            <div style="background: var(--navy); padding: 40px; border-radius: 8px; color: var(--white);">
                <h3 style="color: var(--gold); margin-bottom: 20px; font-size: 1.8rem;">Grant Details</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                        <span style="color: var(--gold);">✔</span>
                        <span><strong>Amount:</strong> $1,000 Annual Grant</span>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                        <span style="color: var(--gold);">✔</span>
                        <span><strong>Eligibility:</strong> US College Students (Undergrad, Grad, Doctoral)</span>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                        <span style="color: var(--gold);">✔</span>
                        <span><strong>Requirement:</strong> No GPA or Essay required</span>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                        <span style="color: var(--gold);">✔</span>
                        <span><strong>Deadline:</strong> August 15, 2026</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <section class="blog-preview" style="background-color: #f0ede8;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Insights & Advice</p>
                <h2 style="font-size: 2.5rem;">From the Blog</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <?php
                $args = array('post_type' => 'post', 'posts_per_page' => 3);
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <div style="background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="height: 200px; overflow: hidden;">
                                <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            </div>
                        <?php endif; ?>
                        <div style="padding: 30px;">
                            <p class="accent-font" style="color: var(--gold); font-size: 0.75rem; margin-bottom: 10px;"><?php echo get_the_date(); ?></p>
                            <h3 style="font-size: 1.4rem; margin-bottom: 15px;"><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a></h3>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" style="color: var(--navy); font-weight: 700; text-decoration: none; font-size: 0.8rem;" class="accent-font">Read More &rarr;</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p style="text-align: center; grid-column: 1/-1;">No posts found.</p>';
                endif;
                ?>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-navy">View All Posts</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
