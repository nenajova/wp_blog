<?php
/**
 * Template Name: Devnenblog Single Post
 * Description: Osnovni template za prikazivanje pojedinačnih postova.
 *
 * @package Devnenblog
 */

get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <?php if(has_post_thumbnail()): ?>
            <image src="<?php the_post_thumbnail_url('blog-large'); ?>" 
            alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <?php the_title('<h1>', '</h1>'); ?>
        <?php get_template_part('includes/section', 'postcontent') ?>

    </div>
</section>

<?php get_footer(); ?>