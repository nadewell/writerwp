<?php

/**
 * wp_enqueue_scritps action hooks the scripts into head tag via wp_head()
 */
 $theme = wp_get_theme();
 function theme_scripts(){
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), $theme->version );
 }
 add_action( 'wp_enqueue_scripts','theme_scripts', 10, 1 );
 // now our main style is linked. lets just download bootstrap and add its files into theme. 
 // but before that lets just commit our changes into the repository.