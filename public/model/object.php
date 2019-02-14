<?php

// Object class
class Object {

  var $object;
  var $url;

  function __construct() {
    $this->url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';
    $this->object = $this->get_object();
  }

  // Get object from api
  public function get_object() {
    $result = array();
    return $result = json_decode(file_get_contents($this->url));
  }

  // Calculate percentage between values
  public function calculate_percentage($nat_average, $reg_average) {
    return round($reg_average / $nat_average * 100,0);
  }

  // Determine weather value is positive or negative
  public function above_below($num) {
    if (strpos($num, '-')) {
      // is below
      return 'below';
    }else{
      return 'above';
    }
  }

  // Get icon based on region type
  public function get_icon($key) {
    switch ($key) {
      case 'regional':
        return '<span style="display: inline-block; padding: 0.5em 0; color:black; margin-right: 1em;"><i class="fas fa-circle"></i></span>';
        break;
      case 'state':
        return '<span style="display: inline-block; padding: 0.5em 0; color:skyblue; margin-right: 1em;"><i class="fas fa-square-full"></i></span>';
        break;
      case 'nation':
        return '<span style="display: inline-block; padding: 0.5em 0; color:lightblue; margin-right: 1em;"><i class="fas fa-exclamation-triangle"></i></span>';
        break;
      default:
        return '<span style="display: inline-block; padding: 0.5em 0; color:white; margin-right: 1em;"><i class="fas fa-circle"></i></span>';
        break;
    }
  }

}
