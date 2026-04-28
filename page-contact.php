<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main class="contact-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/contact-hero.webp') center/cover; color: var(--white); padding: 100px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 15px; letter-spacing: 0.2em;">Contact Us</p>
            <h1 class="section-title" style="color: var(--white); font-size: 3.5rem;">Get in Touch</h1>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Have a question? We're here to help.</p>
        </div>
    </section>

    <section class="contact-content" style="background-color: var(--cream); padding: 80px 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px;">
                <!-- Info -->
                <div>
                    <h2 class="section-title" style="font-size: 2.2rem; margin-bottom: 30px;">Contact Information</h2>
                    <p style="margin-bottom: 40px; color: #555; line-height: 1.8;">Our team is available to assist you with any inquiries regarding the Jake Fruge Jr Grant, eligibility requirements, or the application process.</p>
                    
                    <div style="margin-bottom: 30px; display: flex; gap: 20px; align-items: flex-start;">
                        <div style="color: var(--gold); font-size: 1.2rem; padding-top: 5px;"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4 class="accent-font" style="font-size: 0.75rem; color: var(--gold); margin-bottom: 5px;">Email Support</h4>
                            <p style="font-weight: 700; font-size: 1.1rem;">info@jakefrugejrgrant.com</p>
                        </div>
                    </div>

                    <div style="margin-bottom: 30px; display: flex; gap: 20px; align-items: flex-start;">
                        <div style="color: var(--gold); font-size: 1.2rem; padding-top: 5px;"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4 class="accent-font" style="font-size: 0.75rem; color: var(--gold); margin-bottom: 5px;">Response Time</h4>
                            <p style="font-weight: 700; font-size: 1.1rem;">2–3 Business Days</p>
                        </div>
                    </div>

                    <div style="margin-top: 50px; padding: 40px; background: var(--navy); color: var(--white); border-radius: 4px;">
                        <h4 style="color: var(--gold); margin-bottom: 15px;">Follow Jake</h4>
                        <div style="display: flex; gap: 15px; font-size: 1.2rem;">
                            <a href="https://www.instagram.com/jakefrugejr" target="_blank" style="color: white; opacity: 0.8;"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/jakefrugejr" target="_blank" style="color: white; opacity: 0.8;"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/jakefrugejr" target="_blank" style="color: white; opacity: 0.8;"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.tiktok.com/@jakefrugejr" target="_blank" style="color: white; opacity: 0.8;"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div>
                    <?php if (isset($_GET['contacted']) && $_GET['contacted'] === 'success') : ?>
                        <div style="background: var(--white); border: 2px solid var(--gold); padding: 50px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                            <div style="font-size: 3rem; color: var(--gold); margin-bottom: 20px;"><i class="fas fa-paper-plane"></i></div>
                            <h3>Message Sent</h3>
                            <p>Thank you for reaching out. We'll get back to you shortly.</p>
                            <a href="<?php echo home_url('/'); ?>" class="btn btn-navy" style="margin-top: 20px;">Back to Home</a>
                        </div>
                    <?php else : ?>
                        <div style="background: var(--white); padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                            <h3 style="margin-bottom: 30px;">Send a Message</h3>
                            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                                <input type="hidden" name="action" value="submit_contact">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" required placeholder="you@example.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" required placeholder="How can we help?">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" style="height: 150px;" required placeholder="Write your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-navy" style="width: 100%; padding: 16px;">Send Message</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
