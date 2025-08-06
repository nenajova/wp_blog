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
        the_title( '<h2>', '</h2>' );
        the_content();
    endwhile;
else :
    echo '<p>Nema sadržaja.</p>';
endif;

get_footer();