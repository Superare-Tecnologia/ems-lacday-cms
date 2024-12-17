<?php
add_filter('show_admin_bar', '__return_false');

include(__DIR__ . '/functions/include-files.php');
include(__DIR__ . '/functions/get-image-props.php');
include(__DIR__ . '/functions/modify-wp-file-hierarchy.php');
include(__DIR__ . '/functions/permission-svg.php');
include(__DIR__ . '/functions/strip-html-tags.php');
include(__DIR__ . '/functions/create-config-cpt.php');

function convertToEmbedUrl($youtubeUrl)
{
  // Usa parse_url para extrair partes da URL
  $parsedUrl = parse_url($youtubeUrl);

  if (
    isset($parsedUrl['host']) &&
    ($parsedUrl['host'] == 'www.youtube.com' ||
      $parsedUrl['host'] == 'youtube.com')
  ) {

    parse_str($parsedUrl['query'], $queryParams);

    if (isset($queryParams['v'])) {
      $videoId = $queryParams['v'];
      return 'https://www.youtube.com/embed/' . $videoId;
    }
  }

  return null; // Retorna nulo se não for uma URL válida do YouTube
}

function is_mobile()
{
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

add_theme_support('post-thumbnails');


function expose_acf_to_rest_api( $data, $post, $context ) {
  if ( function_exists( 'get_fields' ) ) {
      $data->data['acf'] = get_fields( $post->ID ); // Adiciona os campos ACF no objeto da API.
  }
  return $data;
}
add_filter( 'rest_prepare_products', 'expose_acf_to_rest_api', 10, 3 ); 