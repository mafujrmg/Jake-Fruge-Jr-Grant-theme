<?php
/**
 * Template Name: Application Page
 */
get_header(); ?>

<main class="apply-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/application-desk.webp') center/cover; color: var(--white); padding: 80px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Application</p>
            <h1 style="font-size: 3rem; color: var(--white);">Apply for the Jake Fruge Jr Grant</h1>
            <p style="opacity: 0.8; max-width: 600px; margin: 20px auto 0;">The application takes less than five minutes. The deadline is August 15, 2026.</p>
        </div>
    </section>

    <section class="form-section">
        <div class="container" style="max-width: 800px;">
            <?php if (isset($_GET['submitted']) && $_GET['submitted'] === 'success') : ?>
                <div style="background: #e6fffa; border: 1px solid #38b2ac; color: #234e52; padding: 40px; border-radius: 8px; text-align: center;">
                    <h2 style="margin-bottom: 10px;">Application Received</h2>
                    <p>Thank you for applying for the Jake Fruge Jr Grant. Your application has been submitted successfully.</p>
                </div>
            <?php else : ?>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" style="background: var(--white); padding: 40px; border-radius: 8px; box-shadow: 0 4px 30px rgba(0,0,0,0.05);">
                    <input type="hidden" name="action" value="submit_application">
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">First Name</label>
                            <input type="text" name="firstName" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Last Name</label>
                            <input type="text" name="lastName" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Email</label>
                            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Phone</label>
                            <input type="tel" name="phone" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">University / College Name</label>
                        <input type="text" name="university" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Major</label>
                            <input type="text" name="major" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div>
                            <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Expected Graduation Date</label>
                            <input type="date" name="gradDate" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <label class="accent-font" style="display: block; font-size: 0.75rem; margin-bottom: 5px;">Brief Statement — Why do you deserve the Jake Fruge Jr Grant? (500 characters max)</label>
                        <textarea name="statement" maxlength="500" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; height: 120px;"></textarea>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-gold" style="width: 100%; font-size: 1rem;">Submit Application</button>
                        <p style="font-size: 0.7rem; opacity: 0.5; margin-top: 15px;">By submitting, you confirm that all information provided is accurate.</p>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
