<?php
/**
 * Template Name: Devnenblog Index
 * Description: Osnovni template za prikazivanje postova.
 *
 * @package Devnenblog
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        echo '<h2><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></h2>';
        the_excerpt(); 
        // the_content();
    endwhile;
else :
    echo '<p>Nema sadržaja.</p>';
endif;

get_footer();