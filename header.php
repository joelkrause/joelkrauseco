<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="preloader"></div>
    <div class="page--wrapper">
        <header class="site--header">
            <div class="container">
                <div class="bar">
                    <div class="logo">
                        <a href="<?php echo home_url();?>">
                            Joel Krause.
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
                    <div class="social--links">
                        <ul>
                            <li><a href="https://twitter.com/Joel_Krause" target="_blank"><img src="<?php echo get_template_directory_uri();?>/lib/images/twitter.svg" /></a></li>
                            <li><a href="https://www.linkedin.com/in/joel-krause/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/lib/images/linkedin.svg" /></a></li>
                            <li><a href="https://github.com/joelkrause" target="_blank"><img src="<?php echo get_template_directory_uri();?>/lib/images/github.svg" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>