<?php
/**
 * Strip titles to indexes
 * 
 * @param content|string (expected: get_the_content())
 * @param tagToStrip|string (example: h2)
 * 
 * @author name: Lucas Henrique
 * @author URI: https://henriquelucas.com.br/
 */
function strip_html_tags($content, $tagToStrip) {
  $dom = new DOMDocument();
  $dom->encoding = "UTF-8";
  libxml_use_internal_errors(true);
  $dom->loadHTML('<?xml encoding="UTF-8">' . $content);

  $tags = array();
  foreach ($dom->getElementsByTagName($tagToStrip) as $tag) {
    $tagContent = '';

    foreach ($tag->childNodes as $childNode) {
      if (
        $childNode->nodeType === XML_ELEMENT_NODE &&
        $childNode->tagName === 'br'
      ) {
        $tagContent .= '<br/>';
      } else {
        $tagContent .= $dom->saveXML($childNode);
      }
    }
    
    $tags[] = $tagContent;
  }

  return $tags;
}