<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main class="contact-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/contact-hero.webp') center/cover; color: var(--white); padding: 80px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Contact</p>
            <h1 style="font-size: 3rem; color: var(--white);">Get in Touch</h1>
            <p style="opacity: 0.8; max-width: 600px; margin: 20px auto 0;">Have questions? We're here to help.</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px;">
            <div>
                <h2 style="font-size: 2.2rem; margin-bottom: 25px;">Contact Details</h2>
                <div style="margin-bottom: 30px;">
                    <h4 class="accent-font" style="font-size: 0.8rem; color: var(--gold); margin-bottom: 5px;">Email</h4>
                    <p style="font-size: 1.2rem; font-weight: 700;">info@jakefrugejrgrant.com</p>
                </div>
                <div style="margin-bottom: 30px;">
                    <h4 class="accent-font" style="font-size: 0.8rem; color: var(--gold); margin-bottom: 5px;">Response Time</h4>
                    <p>We typically respond within 2–3 business days.</p>
                </div>
                <div style="background: var(--navy); color: var(--white); padding: 30px; border-radius: 8px;">
                    <h3 style="color: var(--gold); margin-bottom: 15px;">About Jake Fruge Jr</h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;">Jake is an entrepreneur, CEO of JFJ Holdings, and Forbes Business Council member. He founded this grant to invest in driven students.</p>
                </div>
            </div>

            <div>
                <?php if (isset($_GET['contacted']) && $_GET['contacted'] === 'success') : ?>
                    <div style="background: #e6fffa; border: 1px solid #38b2ac; color: #234e52; padding: 40px; border-radius: 8px; text-align: center;">
                        <h2 style="margin-bottom: 10px;">Message Sent</h2>
                        <p>Thank you for reaching out. We will get back to you soon.</p>
                    </div>
                <?php else : ?>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" style="background: var(--white); padding: 40px; border-radius: 8px; box-shadow: 0 4px 30px rgba(0,0,0,0.05);">
                        <input type="hidden" name="action" value="submit_contact">
                        
                        <div style="margin-bottom: 20px;">
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Full Name</label>
                            <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Email Address</label>
                            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Subject</label>
                            <input type="text" name="subject" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>

                        <div style="margin-bottom: 30px;">
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Message</label>
                            <textarea name="message" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; height: 150px;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-navy" style="width: 100%;">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
