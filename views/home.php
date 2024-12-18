<?php /** Template name: Home **/ ?>

<?php load_component('header'); ?>

<main class="view view__homepage">
    <?php
    load_component('home/banner');
    load_component('home/benefits');
    load_component('home/how-use');
    load_component('home/where-buy');
    load_component('home/drugstore');
    ?>
    <section>

        </section>
 <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.js"></script>
</main>

<?php load_component('footer') ?>