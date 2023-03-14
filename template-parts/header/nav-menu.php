<?php
            if ( function_exists( 'wp_nav_menu' ) && wp_nav_menu( 'primary-navigation' ) ) {

            wp_nav_menu( array(
                'container' => 'nav',
                'container-class' => 'site-header__nav',
                'theme-location' => 'primary-navigation',
            ));
        }
?>