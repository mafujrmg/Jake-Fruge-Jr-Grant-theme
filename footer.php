<footer class="site-footer" style="background: var(--navy); color: var(--white); padding: 60px 0 30px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
            <div>
                <h3 style="color: var(--gold); margin-bottom: 20px;">Jake Fruge Jr Grant</h3>
                <p style="opacity: 0.7; font-size: 0.9rem;">Fueling the next generation of doers by removing financial barriers to education.</p>
            </div>
            <div>
                <h4 class="accent-font" style="margin-bottom: 20px; font-size: 0.8rem;">Quick Links</h4>
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
                <h4 class="accent-font" style="margin-bottom: 20px; font-size: 0.8rem;">Follow Jake</h4>
                <div style="display: flex; gap: 15px;">
                    <a href="https://www.instagram.com/jakefrugejr" target="_blank" style="color: var(--white); opacity: 0.7;"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="https://www.linkedin.com/in/jakefrugejr" target="_blank" style="color: var(--white); opacity: 0.7;"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
                <p style="margin-top: 15px; opacity: 0.7; font-size: 0.9rem;">info@jakefrugejrgrant.com</p>
            </div>
        </div>
        <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; text-align: center; font-size: 0.8rem; opacity: 0.5;">
            <p>&copy; <?php echo date('Y'); ?> Jake Fruge Jr Grant. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer-navigation a { color: var(--white); text-decoration: none; display: block; margin-bottom: 10px; font-size: 0.9rem; opacity: 0.7; transition: opacity 0.3s; }
    .footer-navigation a:hover { opacity: 1; color: var(--gold); }
</style>

<?php wp_footer(); ?>
</body>
</html>
