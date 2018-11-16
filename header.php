<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php
$logoImg = get_field('logo','options');
?>
    <div class="preloader"></div>
    <div class="page--wrapper">
        <header class="site--header">
            <div class="container">
                <?php if($logoImg) {?>
                <div class="profile--image">
                    <img src="<?php echo $logoImg['sizes']['thumbnail'];?>" />
                </div>
                <?php } ?>
                <div class="logo">
                    <a href="<?php echo home_url();?>">
                        <?php bloginfo('name');?>
                    </a>
                </div>
                <nav class="main--navigation">
                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary',
                        ) );
                    ?>
                </nav>
                <?php include ("modules/social-links.php");?>
            </div>
        </header>