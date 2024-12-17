<?php
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'    => 'Configurações do Tema',
    'menu_title'    => 'Configurações do Tema',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}