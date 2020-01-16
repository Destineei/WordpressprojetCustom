<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            <?php
            $args=array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu_header', // class à attribuer au menu
                'menu_id' => 'menu_id' // id à attribuer au menu
                // voir les autres arguments possibles sur le codex
            );
            wp_nav_menu($args);
            ?>
            <div class="hero">
                <h1>Adrien Demaegdt, <br> une nouvelle vision de Paris</h1>
            </div>
            <nav>
                <div class="logo">Adrien Demaegdt</div>
                <ul>
                    <li><a href="#">candidat</a></li>
                    <li><a href="#">équipe</a></li>
                    <li><a href="#">propositions</a></li>
                    <li><a href="#">actualités</a></li>
                    <li><a class="join" href="#">Nous rejoindre</a></li>
                </ul>
            </nav>
            <div class="hero">
                <h1>Adrien Demaegdt, <br> une nouvelle vision de Paris</h1>
            </div>
        </header>