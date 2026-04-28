<?php
/**
 * Template Name: Application Page
 */
get_header(); ?>

<main class="apply-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/application-desk.webp') center/cover; color: var(--white); padding: 120px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 15px; letter-spacing: 0.2em;">Apply for the Grant</p>
            <h1 class="section-title" style="color: var(--white); font-size: 3.5rem;">Join the Next Generation</h1>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Complete the form below to submit your application. Deadline: August 15, 2026.</p>
        </div>
    </section>

    <section class="form-section" style="background-color: var(--cream); padding: 80px 0;">
        <div class="container" style="max-width: 900px;">
            <?php if (isset($_GET['submitted']) && $_GET['submitted'] === 'success') : ?>
                <div style="background: var(--white); border: 2px solid var(--gold); color: var(--navy); padding: 60px; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.05);">
                    <div style="font-size: 3rem; color: var(--gold); margin-bottom: 20px;"><i class="fas fa-check-circle"></i></div>
                    <h2 style="font-size: 2.5rem; margin-bottom: 15px;">Application Received</h2>
                    <p style="font-size: 1.1rem; opacity: 0.8;">Thank you for applying for the Jake Fruge Jr Grant. We will announce the recipient on August 30, 2026. Good luck!</p>
                    <a href="<?php echo home_url('/'); ?>" class="btn btn-navy" style="margin-top: 30px;">Back to Home</a>
                </div>
            <?php else : ?>
                <div style="background: var(--white); padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                    <h3 style="font-size: 1.8rem; margin-bottom: 30px; text-align: center;">Application Form</h3>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <input type="hidden" name="action" value="submit_application">
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstName" class="form-control" required placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastName" class="form-control" required placeholder="Enter last name">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required placeholder="you@example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" required placeholder="(555) 000-0000">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">University / College Name</label>
                            <input type="text" name="university" class="form-control" required placeholder="Where are you currently enrolled?">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                            <div class="form-group">
                                <label class="form-label">Field of Study / Major</label>
                                <input type="text" name="major" class="form-control" required placeholder="e.g. Business Administration">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Expected Graduation</label>
                                <input type="text" name="gradDate" class="form-control" required placeholder="e.g. May 2027">
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <label class="form-label">Brief Statement — Why do you deserve this grant? (500 chars max)</label>
                            <textarea name="statement" maxlength="500" class="form-control" style="height: 150px;" required placeholder="Tell us about your drive and ambition..."></textarea>
                            <p style="font-size: 0.75rem; color: #999; margin-top: 5px;">This is the most important part of your application. Focus on your resilience and vision.</p>
                        </div>

                        <div style="text-align: center; margin-top: 40px;">
                            <button type="submit" class="btn btn-gold" style="width: 100%; padding: 18px; font-size: 1rem;">Submit Your Application</button>
                            <p style="font-size: 0.75rem; color: #999; margin-top: 15px;">By submitting, you confirm all information is accurate and you are currently enrolled in a US-based college.</p>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
