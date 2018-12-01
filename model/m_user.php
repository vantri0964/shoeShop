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
			$stmt = $conn->prepare("SELECT * FROM users WHERE username=:username and password=:password");
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
	public function inserUser($name, $username, $email, $sex, $birthday, $phone, $address, $password)
	{
		$sql = "INSERT INTO users (name, username, email, sex, birthday, phone, address, password) 
		VALUES (N':name', ':username', ':email', ':sex', ':birthday', ':phone', ':address', ':password')";
		$this->name = $name;
		$this->userName = $username;
		$this->email = $email;
		$this->sex = $sex;
		$this->birthday = $birthday;
		$this->phone = $phone;
		$this->address = $address;
		$this->pass = md5($password);
		$conn = parent::getConn();
		$stmt = null;
		try {
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name', $this->name);
			$stmt->bindParam(':password',$this->userName);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':sex', $this->sex);
			$stmt->bindParam(':birthday', $this->birthday);
			$stmt->bindParam(':phone', $this->phone);
			$stmt->bindParam(':address', $this->address);
			$stmt->bindParam(':password', $this->password);
			$stmt->execute();
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