<?php
/**
 * Template Name: FAQ Page
 */
get_header(); ?>

<main class="faq-page">
    <section class="page-header" style="background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://temp.temporarysites.link/wp-content/uploads/2026/04/campus-students.webp') center/cover; color: var(--white); padding: 80px 0; text-align: center;">
        <div class="container">
            <p class="accent-font" style="color: var(--gold); margin-bottom: 10px;">Support</p>
            <h1 style="font-size: 3rem; color: var(--white);">Frequently Asked Questions</h1>
            <p style="opacity: 0.8; max-width: 600px; margin: 20px auto 0;">Everything you need to know about the Jake Fruge Jr Grant.</p>
        </div>
    </section>

    <section class="faq-content">
        <div class="container" style="max-width: 900px;">
            <div class="faq-list">
                <?php
                $faqs = array(
                    array(
                        'q' => 'What is the Jake Fruge Jr Grant?',
                        'a' => 'The Jake Fruge Jr Grant is a $1,000 annual grant founded by Jake Fruge Jr, entrepreneur and CEO of JFJ Holdings. It is awarded to one US college student each year to help remove financial barriers to education.'
                    ),
                    array(
                        'q' => 'Who is eligible for the Jake Fruge Jr Grant?',
                        'a' => 'Any student currently enrolled at an accredited US-based college or university is eligible. This includes undergraduate, graduate, and doctoral students in any field of study. There is no GPA requirement and no essay requirement.'
                    ),
                    array(
                        'q' => 'How much is the Jake Fruge Jr Grant worth?',
                        'a' => 'The Jake Fruge Jr Grant awards $1,000 to one recipient per year.'
                    ),
                    array(
                        'q' => 'Is there a GPA requirement for the Jake Fruge Jr Grant?',
                        'a' => 'No. Jake Fruge Jr believes that grades do not always reflect a student\'s potential or drive. The Jake Fruge Jr Grant has no minimum GPA requirement.'
                    ),
                    array(
                        'q' => 'Do I need to write an essay to apply?',
                        'a' => 'No essay is required. The application includes a brief statement (500 characters maximum) where you explain why you deserve the Jake Fruge Jr Grant. That is the only written component.'
                    ),
                    array(
                        'q' => 'What is the deadline to apply for the Jake Fruge Jr Grant?',
                        'a' => 'The application deadline for the 2026 Jake Fruge Jr Grant is August 15, 2026 at 11:59 PM EST.'
                    ),
                    array(
                        'q' => 'When will the Jake Fruge Jr Grant winner be announced?',
                        'a' => 'The Jake Fruge Jr Grant recipient will be announced on August 30, 2026.'
                    )
                );

                foreach ($faqs as $faq) :
                ?>
                    <div class="faq-item" style="background: var(--white); margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
                        <div class="faq-question" style="padding: 25px; cursor: pointer; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #f0f0f0;">
                            <h3 style="font-size: 1.2rem; margin: 0; color: var(--navy);"><?php echo esc_html($faq['q']); ?></h3>
                            <span style="color: var(--gold); font-size: 1.5rem; font-weight: 700;">+</span>
                        </div>
                        <div class="faq-answer" style="padding: 25px; display: none; background: #fafafa;">
                            <p style="margin: 0; color: #555;"><?php echo esc_html($faq['a']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<script>
document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        const answer = item.nextElementSibling;
        const icon = item.querySelector('span');
        const isOpen = answer.style.display === 'block';
        
        document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
        document.querySelectorAll('.faq-question span').forEach(i => i.textContent = '+');
        
        if (!isOpen) {
            answer.style.display = 'block';
            icon.textContent = '-';
        }
    });
});
</script>

<?php get_footer(); ?>
