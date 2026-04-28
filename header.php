<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">Jake Fruge <span>Jr</span></a>
        </div>
        
        <nav class="main-navigation" id="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
                'items_wrap' => '<ul>%3$s</ul>',
            ));
            ?>
        </nav>

        <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false" style="display: none; background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer;">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<div style="height: 80px;"></div> <!-- Spacer for fixed header -->

<style>
    @media (max-width: 768px) {
        .mobile-menu-toggle { display: block !important; }
        .main-navigation { position: absolute; top: 70px; left: 0; width: 100%; background: var(--navy); display: none; padding: 20px 0; }
        .main-navigation.is-open { display: block; }
        .main-navigation ul { flex-direction: column; gap: 0; }
        .main-navigation li a { padding: 15px 20px; border: none; }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.main-navigation');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('is-open');
            const icon = toggle.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
    }
});
</script>
