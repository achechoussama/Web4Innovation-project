<?php
	session_start();
	include_once("./views/home/sign_in.php");
	include_once("./libraries/php/dao/signInDAO.php");
	$signIn_DAO = new signIn_DAO();
    if(isset($_SESSION['id_user']) == true)
    
        if($_SESSION['user_type']== 'student')
        {
        	include_once("./views/student/student.php");
        }
        else if($_SESSION['user_type'] == 'assoc_sw')
        {
        	include_once("../views/assoc_sw/assoc_sw.php");

        }
        else if((isset($_POST['connecting_form']) == true) && (isset($_POST['login']) == true) && (isset($_POST['pwd']) == true))
    {
        $login = $_POST['login'];
        $password = $_POST['pwd'];

        if($signIn_DAO->verify_login_password($login, $password) == true)
        {
            $user = $signIn_DAO->get_user_login($_POST['login']);
            $_SESSION['id_user'] = $user->id_user;
            $_SESSION['type'] = $user->_user_type; 

            if($_SESSION['user_type']== 'student')
	        {
	        	include_once("./views/student/student.php");
	        }
	        else if($_SESSION['user_type'] == 'assoc_sw')
	        {
	        	include_once("../views/assoc_sw/assoc_sw.php");
	        }

        }else
        {
            if($signIn_DAO->get_user_login($_POST['login'],$_POST['pwd']) == NULL)
            require("./views/home/home.php");
        }
    }else
        include_once("./views/home/home.php");
 ?>
