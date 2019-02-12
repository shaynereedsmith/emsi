<?php

class Object {

  var $object;
  var $url;

  function __construct() {
    $this->url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';
    $this->object = $this->get_object();
  }

  public function get_object() {
    $result = array();
    return $result = json_decode(file_get_contents($this->url));
  }

  public function calculatePercentage($oldFigure, $newFigure) {
    if (($oldFigure != 0) && ($newFigure != 0)) {
        $percentChange = (1 - $oldFigure / $newFigure) * 100;
    }
    else {
        $percentChange = null;
    }
    return round($percentChange,0);
  }

  public function aboveBelow($num) {
    if (strpos($num, '-')) {
      // is below
      return 'below';
    }else{
      return 'above';
    }
  }

}
