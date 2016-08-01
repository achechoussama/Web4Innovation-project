<?php
include_once('Db.class.php');
class ProjectDAO
{
public static function insertProject($assoc_sw_id = 0,$title = 0,$budget = 0,$document = 0,$description = 0,$status = 0,$deadline){
DB::open();
  $sql = "INSERT INTO t_project (name,description,budget,deadline,status,document,assoc_sw_id)

VALUES ('$title', '$description', $budget,'$deadline', '$status', '$document',$assoc_sw_id);";
//VALUES ('title', 'description',50,'2015-11-24 10:24:24', 'status','document',1);";// hard coded database example

  $id=DB::insertQuery($sql);
  Db::close();
}
public static function getProjects(){
  DB::open();
  $sql = "SELECT * FROM t_project;";
  $result = Db::getRowList($sql);
  Db::close();
return $result;
}
/*
public static updateName(){
$sql ="";
Db::updateQuery($sql);
Db::close();
}
*/
}

 ?>
