<?php

//Load the libraries
include_once('./libraries/php/Request.class.php');
include_once('./configurations/database.php');
<<<<<<< HEAD
//include_once('./libraries/php/dao/ProjectsDAO.php');
=======
include_once('./libraries/php/dao/ProjectDAO.php');
>>>>>>> 677eda83e32b4e2c1f44d0a5309fccf5d82d6b7d

$ctl = Request::getController();


if(empty($ctl)){
  $ctl = 'home';
}
if(!file_exists('controllers/'. $ctl .'.php')){
  $ctl = 'home';
}
  include('controllers/'. $ctl .'.php');

 ?>
