<?php
function load_view($view_name) {
  $view_path = get_template_directory() . '/views/' . $view_name . '.php';
  if (file_exists($view_path)) {
    include $view_path;
  }
}

function load_component($component_name, $customClass = null, $data = array()) {
  $component_path = get_template_directory() . '/components/' . $component_name . '.php';

  global $component_customClass;
  $component_customClass = $customClass;


  if (!empty($data)) {
    extract($data);
  }

  if (file_exists($component_path)) {
    include $component_path;
  }
}

function custom_template_hierarchy($template) {
  $new_template = '';

  if (is_page()) {
    $new_template = locate_template('views/page-' . get_page_template_slug() . '.php');
  } elseif (is_single()) {
    $new_template = locate_template('views/single-' . get_post_type() . '.php');
  } elseif (is_category()) {
    $new_template = locate_template('views/category-' . get_query_var('cat') . '.php');
  } elseif (is_tag()) {
    $new_template = locate_template('views/tag-' . get_query_var('tag_id') . '.php');
  } elseif (is_archive()) {
    $new_template = locate_template('views/archive-' . get_post_type() . '.php');
  } elseif (is_search()) {
    $new_template = locate_template('views/search.php');
  } elseif (is_404()) {
    $new_template = locate_template('views/404.php');
  } elseif (is_home()) {
    $new_template = locate_template('views/home.php');
  }

  // Fallback para templates genéricos
  if (empty($new_template)) {
    if (is_page()) {
      $new_template = locate_template('views/page.php');
    } elseif (is_single()) {
      $new_template = locate_template('views/single.php');
    } elseif (is_archive()) {
      $new_template = locate_template('views/archive.php');
    } elseif (is_search()) {
      $new_template = locate_template('views/search.php');
    } elseif (is_404()) {
      $new_template = locate_template('views/404.php');
    } elseif (is_home()) {
      $new_template = locate_template('views/home.php');
    } elseif(is_post_type_archive('products')) {
      $new_template = locate_template('views/archive-products.php');
    } elseif (is_single('products')) {
      $new_template = locate_template('views/single-products.php');
    }
  }

  return ('' != $new_template) ? $new_template : $template;
}

add_filter('template_include', 'custom_template_hierarchy');