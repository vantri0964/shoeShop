<?php 
	require_once('../model/m_user.php');

class C_User
{
	public function loginUser($userName, $pass)
	{
		//model
		$errArr = array('userNameErr' => null, 'passErr' => null);
		$m_Login = new M_User($userName, $pass);
		$had = $m_Login->queryUserName();
		$user = $m_Login->queryUser();

		//check in database
		if ($had == false) {
			$errArr['userNameErr'] = "Sai UserName";
			return $errArr;
		}elseif($user == false){
			$errArr['passErr'] = "Sai Password";
			return $errArr;
		}else{
			session_start();
			$_SESSION['name'] = $user['name'];
			return null;
		}
	}
	public function regUser($userName, $pass)
	{

	}
	public function outUser()
	{
		if (isset($_SESSION['name'])) 
			unset($_SESSION['name']);
	}
}

 ?>