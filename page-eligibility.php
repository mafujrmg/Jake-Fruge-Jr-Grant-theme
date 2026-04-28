<?php
/**
 * Template Name: Eligibility Page
 */
get_header(); ?>

<main class="eligibility-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/campus-students.webp') center/cover; color: var(--white); padding: 100px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 15px; letter-spacing: 0.2em;">Requirements</p>
            <h1 class="section-title" style="color: var(--white); font-size: 3.5rem;">Grant Eligibility</h1>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Straightforward criteria for the $1,000 annual grant.</p>
        </div>
    </section>

    <section class="eligibility-details" style="padding: 100px 0; background-color: var(--cream);">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px;">
                <!-- Left: Who Can Apply -->
                <div style="background: var(--white); padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                    <h2 class="section-title" style="font-size: 2rem;">Who Can Apply?</h2>
                    <p style="margin-bottom: 30px; color: #555; line-height: 1.8;">We've removed the traditional academic gatekeeping. We want to hear from students who have a clear vision for their future.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 20px; display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: var(--gold); font-size: 1.2rem;"><i class="fas fa-check-circle"></i></div>
                            <p><strong>Enrolled Students:</strong> Must be currently enrolled at an accredited US college or university.</p>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: var(--gold); font-size: 1.2rem;"><i class="fas fa-check-circle"></i></div>
                            <p><strong>Any Major:</strong> Open to all fields of study, from business and STEM to arts and humanities.</p>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: var(--gold); font-size: 1.2rem;"><i class="fas fa-check-circle"></i></div>
                            <p><strong>All Levels:</strong> Available to undergraduate, graduate, and doctoral students.</p>
                        </li>
                        <li style="margin-bottom: 20px; display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: var(--gold); font-size: 1.2rem;"><i class="fas fa-check-circle"></i></div>
                            <p><strong>No GPA Minimum:</strong> We care more about your drive than your transcript.</p>
                        </li>
                    </ul>
                </div>

                <!-- Right: Values -->
                <div style="padding: 50px; background-color: var(--cream-dark); border-radius: 4px;">
                    <h2 class="section-title" style="font-size: 2rem;">What We Look For</h2>
                    <p style="margin-bottom: 30px; color: #555;">Jake Fruge Jr personally participates in the selection process. He is looking for "Doers" who embody these traits:</p>
                    
                    <div style="margin-bottom: 30px;">
                        <h4 style="color: var(--navy); margin-bottom: 10px; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 0.1em;" class="accent-font">1. Resilience</h4>
                        <p style="font-size: 0.95rem; color: #666;">Have you overcome obstacles? Do you keep moving forward when things get difficult?</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h4 style="color: var(--navy); margin-bottom: 10px; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 0.1em;" class="accent-font">2. Vision</h4>
                        <p style="font-size: 0.95rem; color: #666;">Do you have a clear plan for what you want to achieve with your education and career?</p>
                    </div>

                    <div style="margin-bottom: 40px;">
                        <h4 style="color: var(--navy); margin-bottom: 10px; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 0.1em;" class="accent-font">3. Execution</h4>
                        <p style="font-size: 0.95rem; color: #666;">Do you have a bias toward action? Are you already taking steps toward your goals?</p>
                    </div>

                    <div style="text-align: center;">
                        <a href="<?php echo home_url('/apply'); ?>" class="btn btn-navy" style="width: 100%;">Apply for the $1,000 Grant</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
