<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>

<body>

    <div class="container">

        <header class="row">

            <div class="twelve colums">

                <h1><?php bloginfo('name'); ?></h1>

                <h2><?php bloginfo('description'); ?></h2>

            </div>

        </header>

        <div class="row">

            <div class="twelve columns">

                <?php wp_nav_menu(array(
			            'sort_column' => 'menu_order', 
			            'container_class' => 'blank-menu-header'
			         ));
                ?>

            </div>

        </div>
