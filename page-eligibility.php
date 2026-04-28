<?php
/**
 * Template Name: Eligibility Page
 */
get_header(); ?>

<main class="eligibility-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/campus-students.webp') center/cover; color: var(--white); padding: 80px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Requirements</p>
            <h1 style="font-size: 3rem; color: var(--white);">Grant Eligibility</h1>
            <p style="opacity: 0.8; max-width: 600px; margin: 20px auto 0;">Learn about the requirements for the $1,000 Jake Fruge Jr Grant.</p>
        </div>
    </section>

    <section class="eligibility-content">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: flex-start;">
                <div style="background: var(--white); padding: 50px; border-radius: 8px; box-shadow: 0 4px 30px rgba(0,0,0,0.05);">
                    <h2 style="font-size: 2.2rem; margin-bottom: 30px;">Who Can Apply?</h2>
                    <p style="margin-bottom: 30px; line-height: 1.8;">The Jake Fruge Jr Grant is open to students who are currently pursuing higher education in the United States. We believe in supporting drive over diplomas, which is why we've kept our requirements straightforward.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 20px; display: flex; align-items: center; gap: 15px;">
                            <span style="background: var(--gold); color: var(--navy); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">✓</span>
                            <span>Currently enrolled at an accredited US-based college or university.</span>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; align-items: center; gap: 15px;">
                            <span style="background: var(--gold); color: var(--navy); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">✓</span>
                            <span>Open to undergraduate, graduate, and doctoral students.</span>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; align-items: center; gap: 15px;">
                            <span style="background: var(--gold); color: var(--navy); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">✓</span>
                            <span>Available to students in any field of study / major.</span>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; align-items: center; gap: 15px;">
                            <span style="background: var(--gold); color: var(--navy); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">✓</span>
                            <span>International students studying in the US are eligible.</span>
                        </li>
                    </ul>
                </div>

                <div style="background: #f0ede8; padding: 50px; border-radius: 8px;">
                    <h2 style="font-size: 2.2rem; margin-bottom: 30px;">What We Value</h2>
                    <p style="margin-bottom: 25px; line-height: 1.8;">Unlike traditional scholarships, we do not require a specific GPA or a lengthy essay. We are looking for the "Doers" — those who demonstrate:</p>
                    
                    <div style="margin-bottom: 20px;">
                        <h4 class="accent-font" style="color: var(--navy); font-size: 0.9rem; margin-bottom: 5px;">Resilience</h4>
                        <p style="font-size: 0.95rem; opacity: 0.7;">The ability to bounce back from setbacks and keep moving forward.</p>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h4 class="accent-font" style="color: var(--navy); font-size: 0.9rem; margin-bottom: 5px;">Ambition</h4>
                        <p style="font-size: 0.95rem; opacity: 0.7;">A clear vision for your future and the drive to achieve it.</p>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h4 class="accent-font" style="color: var(--navy); font-size: 0.9rem; margin-bottom: 5px;">Innovation</h4>
                        <p style="font-size: 0.95rem; opacity: 0.7;">A willingness to think differently and solve problems creatively.</p>
                    </div>

                    <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #ddd; text-align: center;">
                        <p style="margin-bottom: 20px; font-weight: 700;">Ready to take the next step?</p>
                        <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn btn-navy" style="width: 100%;">Submit Your Application</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
