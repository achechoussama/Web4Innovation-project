<?php

//Load the libraries
include_once('./libraries/php/Request.class.php');
include_once('./configurations/database.php');
include_once('./libraries/php/dao/ProjectsDAO.php');

$ctl = Request::getController();

if(empty($ctl)){
  $ctl = 'home';
}
if(!file_exists('controllers/'. $ctl .'.php')){
  $ctl = 'home';
}else {
  include('controllers/'. $ctl .'.php');
}
 ?>
