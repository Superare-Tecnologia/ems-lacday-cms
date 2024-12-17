<?php /** Template name: Sobre nós **/ ?>



<?php load_component('header'); ?>

<main class="view view__about">

    <?php
    load_component(component_name:'about/banner');
    load_component(component_name: 'about/specialist');
    load_component(component_name: 'about/history');
    load_component(component_name: 'about/factory');
    load_component(component_name: 'about/product');
    load_component(component_name: 'about/credentials');
    ?>



</main>

<?php load_component('footer') ?>