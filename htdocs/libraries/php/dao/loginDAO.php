<?php
  include_once('Db.class.php');
  /**
   *
   */
  class Login
  {

    public static function insertAssoc($user_name,$password){
    Db::open();
      $sql = "INSERT INTO t_login (user_name,password) VALUES ('$user_name', '$password');";

      $id=Db::insertQuery($sql);
      Db::close();
    }

    public static function getLoginInformation(){
      Db::open();
      $sql = "SELECT * FROM t_login;";
      $result = Db::getRowList($sql);
      Db::close();
    return $result;
    }

    public static function updateUserName($oldtName = 0, $newtName = 0){
      Db::open();
      $sql ="UPDATE `t_login` SET `user_name`='$newName' WHERE `user_name`= '$oldName' ;";
      Db::updateQuery($sql);
      Db::close();
    }

    public static function updatePassword($oldPassword = 0, $newPassword = 0){
      Db::open();
      $sql ="UPDATE `t_project` SET `pwd` = '$newPassword' WHERE `pwd` = '$oldPassword' ;";
      Db::updateQuery($sql);
      Db::close();
    }
  }
 ?>
