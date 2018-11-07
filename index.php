<?php get_header();?>
<div class="home--intro">
    I'm Joel &amp; I'm a frontend developer at <a href="#">Studio Chriate</a>, working with WordPress,
    WooCommerce and Shopify.
</div>
<h3>Posts</h3>
<div class="posts">
    <ul class="post-list">
        <?php
        $day_check = '';
        while (have_posts()) : the_post();
        $day = get_the_date('Y');
        if ($day != $day_check) {
            echo '<h3> '.get_the_date("Y") . '</h3>';
        }
        ?>
        <li class="post">
            <div class="date">
                <?php the_time('M jS'); ?>
            </div>
            <a href="<?php the_permalink() ?>">
                <div class="title">
                    <?php the_title(); ?>
                </div>
            </a>
        </li>
        <?php
        $day_check = $day;
        endwhile; ?>
        <?php if ( have_posts() ) : ?>
        <?php endif; ?>
    </ul>
</div>
<?php get_footer();?>