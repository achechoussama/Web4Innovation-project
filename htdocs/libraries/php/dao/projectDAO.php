<?php
include_once('Db.class.php');
class ProjectDAO
{
public static function insertProject($assoc_sw_id = 0,$title = 0,$budget = 0,$document = 0,$description = 0,$status = 0,$deadline){
Db::open();
  $sql = "INSERT INTO t_project (name,description,budget,deadline,status,document,assoc_sw_id)

VALUES ('$title', '$description', $budget,'$deadline', '$status', '$document',$assoc_sw_id);";
//VALUES ('title', 'description',50,'2015-11-24 10:24:24', 'status','document',1);";// hard coded database example

  $id=Db::insertQuery($sql);
  Db::close();
}
public static function getProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project;";
  $result = Db::getRowList($sql);
  Db::close();
return $result;
}
public static function updateName($oldtName = 0, $newtName = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `name`='$newName' WHERE `name`= '$oldName' ;";
  Db::updateQuery($sql);
  Db::close();
}
public static function updateDescription($oldDescription = 0, $newdescription = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `description`='$newdescription' WHERE `description`= '$oldDescription' ;";
  Db::updateQuery($sql);
  Db::close();
}
public static function updateBudget($oldBudget = 0, $newBudget = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `budget`='$newBudget' WHERE `budget`= '$oldBudget' ;";
  Db::updateQuery($sql);
  Db::close();
}
public static function updateDeadline($oldDeadline = 0, $newDeadline = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `deadline`='$newDeadline' WHERE `deadline`= '$oldDeadline' ;";
  Db::updateQuery($sql);
  Db::close();
}
public static function updateStatus($oldStatus = 0, $newStatus = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `status`='$newStatus' WHERE `status`= '$oldStatus' ;";
  Db::updateQuery($sql);
  Db::close();
}
public static function updateDocument($oldDocument = 0, $newDocument = 0){
  Db::open();
  $sql ="UPDATE `t_project` SET `document`='$newDocument' WHERE `document`= '$oldDocument' ;";
  Db::updateQuery($sql);
  Db::close();
}

}

 ?>
