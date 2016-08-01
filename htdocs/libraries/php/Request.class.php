<?php
abstract class Request{

  public static function getParameter($key) {
    $ret = "";
    if (isset($_POST[$key]) && !empty($_POST[$key]))
    $ret = $_POST[$key];
    if (isset($_GET[$key]) && !empty($_GET[$key]))
    $ret = $_GET[$key];
    return $ret;
  }

  /*
  return the demanded controller
  */
  public static function getController(){
    return self::getParameter("ctl");
  }
  public static function getAction(){
    return self::getParameter("act");
  }

}
 ?>
