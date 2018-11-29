<?php 
	require_once('../model/m_login.php');

	$userNameErr = "";
	$passErr = "";
	$name="";
	$role="";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//get text
		$userName = $_POST['username'];
		$pass = $_POST['pass'];

		//check in database
		$mLogin = new M_Login($userName, $pass);
		$had = $mLogin->queryUserName();
		$row = $mLogin->queryUser();
		if($userNameErr=="" && $passErr==""){
			if ($had == false) {
				$userNameErr = "Tài khoản không chính xác";
			}else{
				if ($row==false) {
					$passErr = "Mật khẩu không chính xác";
				}
			}
		}

		//accept
		if($userNameErr == "" && $passErr == ""){
			$name = $row['name'];
			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['role'] = $role;
			require_once('../views/index.php');
		}
		//denial
		if ( $userNameErr!="" || $passErr!="") {
			require_once('../views/account.php');
		}

	}else{
		require_once('../views/account.php');
	}

 ?>