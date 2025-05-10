<?php

/**
 * Header Template
 * @package Mangrove Collection
 * @version 1.0.0
 * 
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
    <main class=" ">
        <header class="bg-green-900 ">
            <?php get_template_part('template-parts/header/nav'); ?>
        </header>