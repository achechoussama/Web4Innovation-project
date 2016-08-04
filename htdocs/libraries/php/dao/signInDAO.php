

<?php
include_once('Db.class.php');
class signIn_DAO
{

public static function get_user_id_by_login($user_name)
{
    Db::open();
    $sql = "SELECT * FROM `t_user` WHERE user_name = '$user_name' ";
    return Db::getRowList($sql) ;
}

public static function verify_login_password($user_name,$pwd)
{
  Db::open();
  $sql = "SELECT * FROM t_user WHERE user_name = '$user_name' AND pwd = '$pwd' ";
  $rslt =Db::getRowList($sql) ;
  if (empty($rslt)) {
    return false;
  }
   return true;
}

public static function getProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project;";
  $result = Db::getRowList($sql);
  Db::close();
return $result;
}


public static function get_user_by_login($login)
{
    Db::open();
    $sql = "SELECT * FROM `t_user` WHERE user_name = '$login'";
    $result = Db::getRowList($sql);
    Db::close();
    return $result;
}

public static function get_assoc_sw_by_login($login)
{
  $assoc = self::get_user_id_by_login($login) ;
  Db::open();
  $idd=$assoc[0]->id;
    $sql = "SELECT * FROM `t_assoc_sw` WHERE login_id = '$idd'";
    $result = Db::getRowList($sql);
    Db::close();
    return $result;

}

public static function geDoneProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project WHERE status='done';";
  $result = Db::getRowList($sql);
  Db::close();
return $result;
}

public static function getOnProgressProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project WHERE status='onProgress';";
  $result = Db::getRowList($sql);
  Db::close();
return $result;
}

public static function getNotAssignedProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project WHERE status='notAssigned';";
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
