<?php


include_once('DbCon.class.php');



Class Db {

	private static $dbh;


	public static function open(){

		if(!self::$dbh)
			self::$dbh = DbCon::getInstance();

	}


	public static function insertQuery($sql){

/*
		$statement = self::$dbh->prepare($sql);

		$statement->execute();
*/


                self::$dbh->exec($sql);



	}

}

?>
