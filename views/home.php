<?php

/** Template name: Home **/
?>

<?php load_component('header'); ?>

<main class="view view__homepage">
  <?php
  load_component('home/banner');
  ?>


</main>

<?php load_component('footer') ?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/home.js?v='.time(); ?>"></script>