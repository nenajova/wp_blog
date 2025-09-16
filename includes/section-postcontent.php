<?php if(have_posts()): while(have_posts()): the_post(); ?>
    
    <?php echo get_the_date(); ?>
    <?php the_content(); ?>
    <?php the_author(); ?>
    <?php $fname = get_the_author_meta('first_name'); ?>
    <?php $lname = get_the_author_meta('last_name'); ?>

    <p>Napisao, <?php echo $fname; ?> <?php echo $lname; ?></p>


    <?php
    $tags = get_the_tags();
    foreach($tags as $tag): ?>
        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
            <?php echo $tag->name; ?>
        </a>
    <?php endforeach; ?>

    <?php
    $categories = get_the_category();
    foreach($categories as $cat): ?>
        <a href="<?php echo get_category_link($cat->term_id); ?>" class="badge badge-success">
            <?php echo $cat->name; ?>
        </a>
    <?php endforeach; ?>

    <?php //comments_template(); ?>

<?php endwhile; else: endif; ?>