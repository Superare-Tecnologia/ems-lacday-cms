<?php /** Template name: Home **/ ?>

<?php load_component('header'); ?>

<main class="view view__homepage">
    <?php
    load_component('home/banner');
    load_component('home/needs');
    load_component('home/benefits');
    load_component('home/how-use');
    load_component('home/where-buy');
    load_component('home/drugstore');
    ?>

    
</main>

<?php load_component('footer') ?>