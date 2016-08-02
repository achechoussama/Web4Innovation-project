<?php
include_once("./models/assoc_sw.php");
/* test of functionnalities
function sortByStatus(wantedStatus){
  $sortedList;
  $projectDAO = new ProjectDAO();
$listOfProjects = $projectDAO->getProjects();
foreach($listOfProjects as $project)
{
  if ($project->status==wantedStatus) {

  }
}
}
 // sort by status
$listOfProjects = $projectDAO->getProjects();
foreach($listOfProjects as $project)
{
echo 'ID = ' . $project->id . ' / Name = '.$project->name . ' <br/>' . $project->description;
}
$projectDAO->updateDescription('description','aaa');
//$sortedList = sortByStatus('draft');

//sort by name
$sortedList = sortByName();
$count = 1;
foreach($sortedList as $project)
  {
  echo " project '$count' ID = " . $project->id . ' / Name = '.$project->name . ' <br/>' . $project->description . ' <br/>';
$count ++;
  }
  //find by name
  $project = findByName('project1');
  echo " project  ID = " . $project->id . ' / Name = '.$project->name . ' <br/>' . $project->description . ' <br/>';
  */
//include_once("./views/assoc_sw/assoc_sw.php");
 ?>
