<?php 
	require_once('common/database.php');

class M_User extends Database
{	
	private $userName;
	private $pass;
	private $name;
	private $email;
	private $sex;
	private $birthday;
	private $phone;
	private $address;
	function __construct()
	{
		parent::__construct();
	}
	function queryUserName($_userName){
		$this->userName = $_userName;
		$conn = parent::getConn();
		$stmt = null;
		try {
			$stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
			$stmt->bindParam(":username", $this->userName);
			$stmt->execute();
		}catch(PDOException $e){
	    	echo "Query failed: " . $e->getMessage();
	    }
	    if($stmt->rowCount() == 0){
	    	$stmt=null;
	    	$conn=null;
	    	return 0;
	    }else{
		    $stmt=null;
		    $conn=null;
		    return 1;
		}
	}

	function queryUser($_userName, $_pass){
		$this->userName = trim($_userName);
		$this->pass = md5($_pass);
		$conn =parent::getConn();
		$stmt = null;
		try {
			$stmt = $conn->prepare('SELECT * FROM users WHERE username=:username and password=:password');
			$stmt->bindParam(':username', $this->userName);
			$stmt->bindParam(':password', $this->pass);
			$stmt->execute();
		}catch(PDOException $e){
	    	echo "Query failed: " . $e->getMessage();
	    }
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	    if($row==null){
	    	$stmt=null;
	    	$conn=null;
	    	return false;
	    }else{
		    $stmt=null;
		    $conn=null;
		    return $row;
	    }
	}
	//name, username, email, sex, birthday, phone, crtime
	public function inserUser($userArr=array())
	{
		$conn = parent::getConn();
		$stmt = null;
		try {
			$stmt = $conn->prepare('INSERT INTO users (name, username, email, sex, birthday, phone, address, password) VALUES ( N'.'?'.', ?, ?, ?, ?, ?, ?, ?)');
			$stmt->execute($userArr);
			$stmt=null;
			$conn=null;
			return true;
		}catch(PDOException $e){
	    	echo "Lỗi insert: " . $e->getMessage();
	    }
		$stmt=null;
		$conn=null;
		return false;
	}
}
 ?>