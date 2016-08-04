<?php
  $idAssociation = ($_POST['association']);
  $title = ($_POST['title']);
  $budget = ($_POST['budget']);
  $status = ($_POST['status']);
  $document = ($_POST['document']);
  $description = ($_POST['description']);
  $deadline = ($_POST['deadline']);
  $projectsDAO = new ProjectDAO();
  $projectsDAO->insertProject($idAssociation ,$title ,$budget ,$document ,$description ,$status ,$deadline);
  $projectsDAO->getAllProjects();
  include_once("./views/home/project.php");
 ?>
