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

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand"><?php bloginfo('title'); ?></a>
                    </div>
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a href="">Home</a></li>
                    </ul>
                </div>
            </nav>
        </header>

