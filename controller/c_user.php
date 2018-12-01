<?php 
	require_once('../model/m_user.php');
	require_once('../model/validation.php');

class C_User
{
	public function loginUser($_username, $_pass)
	{
		//model
		$errArr = array('userNameErr' => null, 'passErr' => null);
		$m_Login = new M_User();
		$had = $m_Login->queryUserName($_username);
		$user = $m_Login->queryUser($_username, $_pass);	
		if ($had == 0) {
			$errArr['userNameErr'] = "Tài khoản không chính xác!";
			return $errArr;
		}elseif($user == 0){
			$errArr['userNameErr'] = "<script>$('#username').val('$_username')</script>";
			$errArr['passErr'] = "Mật khẩu không chính xác!";
			return $errArr;
		}else{
			$_SESSION['name'] = $user['name'];
			return null;
		}
	}
	public function regUser($_name, $_username, $_email, $_pass, $_pass2)
	{
		$errArr = array(
	 		'username'=>null,
	 		'name'=>null,
	 		'email'=>null,
	 		'pass'=>null,
	 		'pass2'=>null
 		);

		$vali = new Validation();

		//test input
		$username = $vali->test_input($_username);
		$name = $vali->test_input($_name);
		$email =$vali->test_input($_email);
		$pass = $vali->test_input($_pass);
		$pass2 = $vali->test_input($_pass2);
		// //check value
		$errArr['username'] = $vali->checkUserName($username);
		$errArr['name'] = $vali->checkName($name);
		$errArr['email'] = $vali->checkEmail($email);
		$errArr['pass'] = $vali->checkPass($pass);
		$errArr['pass2'] = $vali->checkPass2($pass, $pass2);
		if(
			($errArr['username'] == null) && 
			($errArr['name'] == null) && 
			($errArr['email'] == null) &&
			($errArr['pass'] == null) && 
			($errArr['pass2'] == null)
		){
			$m_user = new M_User();
			$m_user->inserUser($name, $username, $email, '', '', '', '',$password);
			return null;
		}else{
			return $errArr;
		}
	}
	public function outUser()
	{
		if (isset($_SESSION['name'])) 
			unset($_SESSION['name']);
	}
}

 ?>