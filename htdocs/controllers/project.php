<?php
if(isset($_POST['association']))
  $idAssociation = ($_POST['association']);
  
if(isset($_POST['title']))
  $title = ($_POST['title']);
  
if(isset($_POST['budget']))
  $budget = ($_POST['budget']);
  
if(isset($_POST['status']))
  $status = ($_POST['status']);
  
if(isset($_POST['document']))
  $document = ($_POST['document']);
  
if(isset($_POST['description']))
  $description = ($_POST['description']);
  
if(isset($_POST['deadline']))
  $deadline = ($_POST['deadline']);
  $projectsDAO = new ProjectDAO();
 // $projectsDAO->insertProject($idAssociation ,$title ,$budget ,$document ,$description ,$status ,$deadline);
  include_once('./views/home/project.php');
 ?>
