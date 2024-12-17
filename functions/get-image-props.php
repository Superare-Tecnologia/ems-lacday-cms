<?php

/**
 * Returns an image with all necessary props for
 * SEO and Acessbility
 * 
 * @param attachmentId|int
 * @param imageSize|string 
 *        Options: full, thumbnail, medium or large
 * @param isFeatured|boolean
 * @param shouldReturnObject/boolean
 * 
 * @author name: Lucas Henrique
 * @author URI: https://henriquelucas.com.br/
 */
function get_image_props($attachmentId, $class = '', $imageSize, $isFeatured, $shouldReturnObject = false)
{
  $title = get_the_title($attachmentId);
  $obj = new stdClass;
  $imageSize = $imageSize ?? 'full';
  $img = $attachmentId;

  if ($isFeatured) {
    $img = get_post_thumbnail_id($attachmentId);
  }

  $imgProps = wp_get_attachment_image_src($img, $imageSize);
  $obj->alt = get_post_meta($img, '_wp_attachment_image_alt', true);
  $obj->url = $imgProps[0];
  $obj->width = $imgProps[1] == 0 ? "30" : $imgProps[1];
  $obj->height = $imgProps[2] == 0 ? "30" : $imgProps[2];

  if (empty(trim($obj->alt))) {
    $obj->alt = "Imagem ilustração para página " . $title;
  }

  if ($shouldReturnObject) {
    return $obj;
  } else {
    echo "<img class='" . $class . "' src='" . $obj->url . "' alt='" . $obj->alt . "' width='" . $obj->width . "' height='" . $obj->height . "'/>";
  }
}
