<?php 

use GGCITEC\StringUtils;

class StringUtilsTest extends PHPUnit_Framework_TestCase {
  
  // run the tests with the following command: vendor/bin/phpunit tests/
  public function testReverseBob() {
    $this->assertSame(StringUtils::reverse("bob"),"bob");
  }
  
  public function testReverseHello() {
    $this->assertSame(StringUtils::reverse("hello"),"olleh");
  }
  
  public function testToUpperCaseShouting() {
    $str = "arrggh!! hulk smash!!!";
    $this->assertSame(StringUtils::toUpperCase($str),strtoupper($str));
  }
  
  public function testToUpperCaseSomeSentence() {
    $str = "the lazy dog jumped over the quite fox";
    $this->assertSame(StringUtils::toUpperCase($str),strtoupper($str));    
  }
}
