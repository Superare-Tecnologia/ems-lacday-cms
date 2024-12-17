<?php
/**
 * Includes a file preventing include/require hell in code.
 * 
 * @param $path|string
 * @param $stepsBehind|int
 * 
 * @author name: Lucas Henrique
 * @author URI: https://henriquelucas.com.br/
 */

function inc($path, $stepsBehind = 1) {
  if ( !isset($path) ) {
    echo '<h1 style="color: #F00">[ERROR] No path provided to inc function.</h1>';
    die();
  }

  if ( !is_numeric($stepsBehind) ) {
    echo '<h1 style="color: #F00">[ERROR] $stepsBehind variable is not numeric. Check your code.</h1>';
    die();
  }
    
  include(dirname(__DIR__, $stepsBehind) . $path);
}
