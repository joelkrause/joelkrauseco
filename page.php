<?php get_header();?>
<h3>
    <?php the_title();?>
</h3>
<div class="post--content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer();?>