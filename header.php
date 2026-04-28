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
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul>%3$s</ul>',
            ));
            ?>
        </nav>

        <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<div class="header-spacer" style="height: 80px;"></div> <!-- Spacer for fixed header -->

<style>
    body.admin-bar .header-spacer { height: 80px; }
    @media (max-width: 991px) {
        .header-spacer { height: 70px !important; }
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
