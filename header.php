<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        .site-header { background: var(--navy); padding: 20px 0; position: sticky; top: 0; z-index: 1000; }
        .header-container { display: flex; justify-content: space-between; align-items: center; }
        .logo a { color: var(--gold); text-decoration: none; font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; }
        .main-navigation ul { list-style: none; display: flex; gap: 30px; }
        .main-navigation a { color: var(--white); text-decoration: none; font-family: 'Oswald', sans-serif; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; transition: color 0.3s; }
        .main-navigation a:hover { color: var(--gold); }
        
        @media (max-width: 768px) {
            .main-navigation { display: none; } /* Simplified for prototype */
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">Jake Fruge Jr Grant</a>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
                'items_wrap' => '<ul>%3$s</ul>',
            ));
            ?>
        </nav>
    </div>
</header>
