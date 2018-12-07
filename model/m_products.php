<?php 
	require_once('common/database.php');
	class M_Products extends Database
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function queryProduct(){
			$conn = parent::getConn();
			$stmt = null;
			try {
				$stmt = $conn->prepare("SELECT * FROM productshoe");
				$stmt->execute();
			}catch(PDOException $e){
		    	echo "Query failed: " . $e->getMessage();
		    }
		    if($stmt->rowCount() == 0){ //không có
		    	$stmt=null;
		    	$conn=null;
		    	return 0;
		    }else{ //có
		    	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			    $stmt=null;
			    $conn=null;
			    return $data;
			}
		}
		function queryDetail($_id){
			$conn = parent::getConn();
			$stmt = null;
			try {
				$stmt = $conn->prepare("SELECT * FROM productshoe WHERE id=?");
				$stmt->bindValue(1, $_id);
				$stmt->execute();
			}catch(PDOException $e){
		    	echo "Query failed: " . $e->getMessage();
		    }
		    if($stmt->rowCount() == 0){ //không có
		    	$stmt=null;
		    	$conn=null;
		    	return 0;
		    }else{ //có
		    	$data = $stmt->fetch(PDO::FETCH_ASSOC);
			    $stmt=null;
			    $conn=null;
			    return $data;
			}
		}
	}

 ?>