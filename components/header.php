<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
  

<head>
  <meta charset="<?php bloginfo('charset') ?? "UTF-8" ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title() ?></title>

  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"/>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css" />

  <?php wp_head() ?>
</head>

<body>



  <?php
  inc('/components/is-admin.php');
  inc('/components/navbar.php');
  ?>