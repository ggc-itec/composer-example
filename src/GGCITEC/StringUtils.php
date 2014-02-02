<?php
namespace GGCITEC;

class StringUtils {

  public static function reverse($str) {
    $rev = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
      $rev = $rev . $str[$i];
    }
    return $rev;
  }

  public static function toUpperCase($str) {
    $pattern = '/[a-z]/';
    $result = preg_replace_callback($pattern, function($matches) {
      return strtoupper($matches[0]);
    }, $str);
    return $result;
  }

}
