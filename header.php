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
                </div>
            </div>
        </header>