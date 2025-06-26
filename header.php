<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

  <?php wp_head(); ?>
</head>
<body class="mx-auto" <?php body_class(); ?>>
  <?php get_template_part('templates/partials/top-notification'); ?>
  <?php get_template_part('templates/partials/navbar'); ?>