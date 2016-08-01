<?php
$projectDAO = new ProjectDAO();
$listOfProjects = $projectDAO->getProjects();
foreach($listOfProjects as $project)
{
echo 'ID = ' . $project->id . ' / Name = '.$project->name . ' <br/>';
}
include_once("./views/assoc_sw/assoc_sw.php");
 ?>
