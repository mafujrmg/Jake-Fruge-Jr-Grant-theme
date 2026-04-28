<?php get_header(); ?>

<main class="front-page">
    <!-- Section 1: Hero -->
    <section class="hero" style="background: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.7)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/hero-grant.webp') center/cover; color: var(--white); text-align: center; padding: 140px 0; min-height: 85vh; display: flex; align-items: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 20px; letter-spacing: 0.3em;">Fueling the Next Generation of Doers</p>
            <h1 style="font-size: 4.5rem; margin-bottom: 30px; line-height: 1.1; color: var(--white);">The Jake Fruge Jr Grant</h1>
            <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto 40px; opacity: 0.9; font-weight: 300; line-height: 1.6;">A $1,000 annual grant designed to remove financial barriers for ambitious college students across the United States. No GPA requirement. No essay. Just drive.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn btn-gold">Apply for the Grant</a>
                <a href="<?php echo esc_url(home_url('/eligibility')); ?>" class="btn btn-outline">View Eligibility</a>
            </div>
        </div>
    </section>

    <!-- Section 2: At a Glance -->
    <section class="glance" style="background-color: var(--cream);">
        <div class="container">
            <div class="text-center mb-60">
                <p class="section-tag">About the Grant</p>
                <h2 class="section-title">The Jake Fruge Jr Grant at a Glance</h2>
                <div style="width: 60px; height: 3px; background: var(--gold); margin: 0 auto;"></div>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <p class="text-center" style="margin-bottom: 40px; color: #555; line-height: 1.8;">The Jake Fruge Jr Grant was established to bridge the gap between ambition and resources. Jake Fruge Jr understands firsthand that financial obstacles should never determine a student's ceiling. This grant is open to any undergraduate or graduate student enrolled at an accredited US institution.</p>
                
                <table class="data-table">
                    <tr>
                        <td>Grant Amount</td>
                        <td>$1,000</td>
                    </tr>
                    <tr>
                        <td>Frequency</td>
                        <td>Awarded annually (one recipient per year)</td>
                    </tr>
                    <tr>
                        <td>Eligibility</td>
                        <td>Any US-based undergraduate or graduate student</td>
                    </tr>
                    <tr>
                        <td>GPA Requirement</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Essay Requirement</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Application Deadline</td>
                        <td>August 15, 2026</td>
                    </tr>
                    <tr>
                        <td>Winner Announced</td>
                        <td>August 30, 2026</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- Section 3: Meet the Founder -->
    <section class="founder" style="background-color: var(--navy); color: var(--white);">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 80px; align-items: center;">
                <div class="text-center">
                    <img src="https://temp.temporarysites.link/wp-content/uploads/2026/04/jake-forbes-suit.webp" alt="Jake Fruge Jr" style="width: 100%; max-width: 450px; border-radius: 8px; shadow: 0 20px 50px rgba(0,0,0,0.3);">
                </div>
                <div>
                    <p class="section-tag">Meet the Founder</p>
                    <h2 class="section-title" style="color: var(--white);">Jake Fruge Jr: From Adversity to Enterprise</h2>
                    <p style="margin-bottom: 20px; opacity: 0.8; line-height: 1.8;">Jake grew up in over 30 cities, attended 19 different schools, and watched his parents cycle in and out of incarceration. By 17, he was hustling to survive. At 21, he made a decision that changed everything — he entered financial services and never looked back.</p>
                    <p style="margin-bottom: 20px; opacity: 0.8; line-height: 1.8;">In his first year, Jake generated $330,000 in revenue, shattering industry records. He went on to achieve over $100 million in personal sales and today, as CEO of JFJ Holdings — a nine-figure holdings company with 30+ businesses — Jake channels his success into empowering others.</p>
                    <p style="margin-bottom: 30px; opacity: 0.8; line-height: 1.8;">The Jake Fruge Jr Grant is a direct expression of that mission: investing in students who refuse to let their circumstances define their future.</p>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-gold">Read Full Story</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Eligibility Quick CTA -->
    <section class="cta" style="background: linear-gradient(rgba(197, 160, 89, 0.9), rgba(197, 160, 89, 0.9)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/campus-students.webp') center/cover; padding: 100px 0; text-align: center;">
        <div class="container">
            <h2 class="section-title" style="color: var(--navy); margin-bottom: 20px;">Ready to remove your financial barriers?</h2>
            <p style="color: var(--navy); font-size: 1.2rem; margin-bottom: 40px; font-weight: 500;">Applying takes less than 5 minutes. No GPA, no essay, no excuses.</p>
            <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn btn-navy" style="padding: 18px 50px; font-size: 1rem;">Apply Now</a>
        </div>
    </section>

    <!-- Section 5: Blog Preview -->
    <section class="blog-preview">
        <div class="container">
            <div class="text-center mb-60">
                <p class="section-tag">Insights & Mindset</p>
                <h2 class="section-title">Latest from the Blog</h2>
                <div style="width: 60px; height: 3px; background: var(--gold); margin: 0 auto;"></div>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <?php
                $args = array('post_type' => 'post', 'posts_per_page' => 3);
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <article style="background: var(--white); box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="height: 220px; overflow: hidden;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div style="padding: 30px;">
                            <p class="accent-font" style="color: var(--gold); font-size: 0.7rem; margin-bottom: 10px;"><?php echo get_the_date(); ?></p>
                            <h3 style="font-size: 1.4rem; margin-bottom: 15px; min-height: 3.4rem;"><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a></h3>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                            <a href="<?php the_permalink(); ?>" class="accent-font" style="color: var(--navy); font-weight: 700; text-decoration: none; font-size: 0.75rem; border-bottom: 2px solid var(--gold); padding-bottom: 3px;">Read Article &rarr;</a>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center" style="grid-column: 1/-1;">No posts published yet.</p>';
                endif;
                ?>
            </div>
            
            <div class="text-center" style="margin-top: 50px;">
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-navy">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Section 6: FAQ Preview -->
    <section class="faq-preview" style="background-color: var(--cream-dark);">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px; align-items: flex-start;">
                <div>
                    <p class="section-tag">Got Questions?</p>
                    <h2 class="section-title">Jake Fruge Jr Grant FAQ</h2>
                    <p style="margin-bottom: 30px; color: #555;">We've answered the most common questions about eligibility, application process, and deadlines.</p>
                    <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn btn-gold">View All FAQs</a>
                </div>
                <div style="background: var(--white); padding: 40px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                    <div style="margin-bottom: 25px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                        <h4 style="margin-bottom: 10px;">What is the grant amount?</h4>
                        <p style="font-size: 0.9rem; color: #666;">The Jake Fruge Jr Grant awards $1,000 to one recipient per year.</p>
                    </div>
                    <div style="margin-bottom: 25px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                        <h4 style="margin-bottom: 10px;">Is there a GPA requirement?</h4>
                        <p style="font-size: 0.9rem; color: #666;">No. We believe potential isn't always reflected in grades. There is no minimum GPA.</p>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 10px;">When is the deadline?</h4>
                        <p style="font-size: 0.9rem; color: #666;">The deadline for the 2026 grant is August 15, 2026.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
