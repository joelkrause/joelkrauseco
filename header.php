<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>

<body>
    <div class="preloader"></div>
    <div class="page--wrapper">
        <header class="site--header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo home_url();?>">
                        <h3>Joel Krause</h3>
                    </a>
                </div>
                <?php if(is_home()) {?>
                <div class="home--intro">
                    I'm Joel &amp; I'm a frontend developer at <a href="#">Studio Chriate</a>, working with WordPress,
                    WooCommerce and Shopify.
                </div>
                <?php } elseif(is_single()) {?>
                <?php the_title();?>
                <?php get_the_date();?>
                <?php } ?>
            </div>
        </header>