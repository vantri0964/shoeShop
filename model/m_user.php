<?php 
	require_once('common/database.php');

class M_User extends Database
{	
	private $userName;
	private $pass;
	function __construct($_userName, $_pass)
	{
		$this->userName = trim($_userName);
		$this->pass = md5($_pass);
		parent::__construct();
	}
	function queryUserName(){
		$conn = parent::getConn();
		$stmt = null;
		try {
			$stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
			$stmt->bindParam(":username", $this->userName);
			$stmt->execute();
		}catch(PDOException $e){
	    	echo "Query failed: " . $e->getMessage();
	    }
	    if(($stmt->fetch()) == false){
	    	$stmt=null;
	    	$conn=null;
	    	return false;
	    }else{
		    $stmt=null;
		    $conn=null;
		    return true;
		    
		}
	}

	function queryUser(){
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
}
 ?>