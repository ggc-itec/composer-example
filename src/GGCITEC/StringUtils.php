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

}
