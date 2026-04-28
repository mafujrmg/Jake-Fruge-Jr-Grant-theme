<footer class="site-footer" style="background: var(--navy); color: var(--white); padding: 80px 0 40px; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 60px; margin-bottom: 60px;">
            <div>
                <h3 style="color: var(--gold); margin-bottom: 25px; font-style: italic;">Jake Fruge <span>Jr</span></h3>
                <p style="opacity: 0.7; font-size: 0.95rem; line-height: 1.8;">Fueling the next generation of doers by removing financial barriers to education. Founded by entrepreneur Jake Fruge Jr.</p>
                <div style="display: flex; gap: 20px; margin-top: 30px; font-size: 1.3rem;">
                    <a href="https://www.instagram.com/jakefrugejr" target="_blank" style="color: white; opacity: 0.6; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/jakefrugejr" target="_blank" style="color: white; opacity: 0.6; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/jakefrugejr" target="_blank" style="color: white; opacity: 0.6; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.youtube.com/@jakefrugejr" target="_blank" style="color: white; opacity: 0.6; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="accent-font" style="margin-bottom: 25px; font-size: 0.8rem; letter-spacing: 0.2em; color: var(--gold);">Quick Links</h4>
                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'fallback_cb' => false,
                        'items_wrap' => '<ul style="list-style: none; padding: 0;">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            
            <div>
                <h4 class="accent-font" style="margin-bottom: 25px; font-size: 0.8rem; letter-spacing: 0.2em; color: var(--gold);">Support</h4>
                <ul style="list-style: none; padding: 0; opacity: 0.7; font-size: 0.95rem;">
                    <li style="margin-bottom: 15px;"><a href="mailto:info@jakefrugejrgrant.com" style="color: white; text-decoration: none;">info@jakefrugejrgrant.com</a></li>
                    <li style="margin-bottom: 15px;">Available Mon-Fri</li>
                    <li>2-3 Day Response Time</li>
                </ul>
            </div>
        </div>
        
        <div style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 40px; text-align: center; font-size: 0.85rem; opacity: 0.5;">
            <p>&copy; <?php echo date('Y'); ?> Jake Fruge Jr Grant. All rights reserved. Designed for the Next Generation.</p>
        </div>
    </div>
</footer>

<style>
    .footer-navigation a { color: var(--white); text-decoration: none; display: block; margin-bottom: 12px; font-size: 0.95rem; opacity: 0.7; transition: all 0.3s; }
    .footer-navigation a:hover { opacity: 1; color: var(--gold); padding-left: 5px; }
</style>

<?php wp_footer(); ?>
</body>
</html>
