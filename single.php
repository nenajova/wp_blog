<?php
/**
 * Template Name: Devnenblog Single Post
 * Description: Osnovni template za prikazivanje pojedinačnih postova.
 *
 * @package Devnenblog
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
    endwhile;
else :
    echo '<p>Post nije pronađen.</p>';
endif;

get_footer();