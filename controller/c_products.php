<?php 
	require_once('../model/m_products.php');

	class C_Products
	{
		function loadProduct(){
			$m_Products = new M_Products();
			$data = $m_Products->queryProduct();
			return $data;
		}
		function loadDetail($_id){
			$m_Products = new M_Products();
			$data = $m_Products->queryDetail($_id);
			return $data;
		}
	}
 ?>