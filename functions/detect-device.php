<?php
/**
 * Returns if the user device is mobile or not
 * 
 * @author name: Lucas Henrique
 * @author URI: https://henriquelucas.com.br/
 */
function is_mobile_device() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}