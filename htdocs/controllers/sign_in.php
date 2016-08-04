<?php
	session_start();
	//include_once("./views/home/sign_in.php");
	include_once("./libraries/php/dao/signInDAO.php");
	$signIn_DAO = new signIn_DAO();
    if(isset($_SESSION['id_user']) == true)
    {

        if($_SESSION['user_type']== 'student')
        {
            include_once("./views/student/student.php");
        }
        else if($_SESSION['user_type'] == 'assoc_sw')
        {
					$assoc_sw = $signIn_DAO->get_assoc_sw_by_login($_POST['login']);
            include_once("./views/assoc_sw/assoc_sw.php");
        }
    }
    else if((isset($_POST['login']) == true) && (isset($_POST['pwd']) == true))
    {
        $login = $_POST['login'];
        $password = $_POST['pwd'];

        if($signIn_DAO->verify_login_password($login, $password) == true)
        {
            $assoc_sw = $signIn_DAO->get_user_by_login($_POST['login']) ;
            $_SESSION['id_user'] = $assoc_sw[0]->id;
            $_SESSION['user_type'] = $assoc_sw[0]->type;
            if($_SESSION['user_type']== 'student')
	        {
	        	include_once("./views/student/student.php");
	        }
	        else if($_SESSION['user_type'] == 'assoc_sw')
	        {
						$assoc_sw = $signIn_DAO->get_assoc_sw_by_login($_POST['login']);
						var_dump($assoc_sw);
	        	//include_once("./views/assoc_sw/assoc_sw.php");
	        }

        }else
        {
                //if($signIn_DAO->get_user_login($_POST['login'],$_POST['pwd']) == NULL)
            //include_once("./views/home/home.php");
        }
    }
 ?>
