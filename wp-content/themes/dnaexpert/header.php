<?php
/*
 * @package: DNA Expert
 * @subpackage: dnaexpert
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <!--JQuery Google CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Bootstrap-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--Stylesheet-->
        <link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"/>

        <title><?php bloginfo('title');?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php bloginfo('home');?>"><?php bloginfo('title'); ?></a>
                    </div>
                    <?php wp_nav_menu(array('menu'=>'Navigation Menu','menu_class' => 'nav navbar-nav navbar-right')); ?>
                </div>
            </nav>
        </header>

