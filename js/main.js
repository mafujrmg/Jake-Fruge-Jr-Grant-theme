/**
 * Jake Fruge Jr Grant Theme Scripts
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Jake Fruge Jr Grant theme loaded.');
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('is-active');
                
                // Close all others
                faqItems.forEach(i => i.classList.remove('is-active'));
                
                if (!isActive) {
                    item.classList.add('is-active');
                }
            });
        }
    });

    // Mobile Menu Toggle (Redundant but safe)
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.main-navigation');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('is-open');
        });
    }
});
