

<?php
include_once('Db.class.php');
class signIn_DAO
{

public function get_user_login($login)
{
    $sql = "SELECT * FROM `user` WHERE login = :login LIMIT 1";
    $query = $this->db->prepare($sql);
    $parameters = array(':login' => $login);
    try
    {
        $query->execute($parameters);
    } 
    catch (PDOException $e) 
    {
        return NULL;
    }

    return $query->fetch();
}

public static function verify_login_password($login,$pwd)
{
  Db::open();
  $sql = "SELECT COUNT(id_user) as amount_of_users FROM user WHERE login = :login AND password = :password";
  $query = $this->db->prepare($sql);
  $parameters = array(':login' => $login, ':password' => $pwd);
  $query->execute($parameters);
  Db::close();
  if($query->fetch()->amount_of_users == 1)
        return true;
   return false;
}

public static function getProjects(){
  Db::open();
  $sql = "SELECT * FROM t_project;";
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
