<?php get_header();?>
<div class="single--post">
    <div class="post--header">
        <h3>
            <?php the_title();?>
        </h3>
        <div class="date">
            <?php the_time('F jS, Y'); ?>
        </div>
        <hr />
    </div>
    <div class="post--content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php include ("modules/post-comments.php");?>
</div>
<?php get_footer();?>