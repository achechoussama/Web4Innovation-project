<?php
  function sortByStatus($wantedStatus){
    $sortedList = array();
    $projectDAO = new ProjectDAO();
    $listOfProjects = $projectDAO->getProjects();
    foreach($listOfProjects as $project)
    {
      if ($project->status==$wantedStatus) {
      $sortedList[] = $project;
    }
    }
    return $sortedList;
  }
  // compares the name of two projects
  function cmp($a, $b)
  {
      return strcmp($a->name, $b->name);
  }

  function sortByName(){
    $projectDAO = new ProjectDAO();
    $listOfProjects = $projectDAO->getProjects();
    usort($listOfProjects, "cmp");
  return $listOfProjects;
    }
  function findByName($wantedName){
      $projectDAO = new ProjectDAO();
      $listOfProjects = $projectDAO->getProjects();
      foreach ($listOfProjects as $project) {
        if ($project->name == $wantedName) {
          return $project ;
        }
      }

    }


 ?>
