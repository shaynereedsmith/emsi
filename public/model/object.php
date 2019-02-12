<?php

class Object {

  var $object;
  var $url;

  function __construct(){
    $this->url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';
    $this->object = $this->get_object();
  }

  public function get_object(){
    $result = array();
    return $result = json_decode(file_get_contents($this->url));
  }

}
