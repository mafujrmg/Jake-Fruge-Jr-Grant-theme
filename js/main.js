/**
 * Jake Fruge Jr Grant Theme Scripts
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Jake Fruge Jr Grant theme loaded.');
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
