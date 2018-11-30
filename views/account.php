	<?php 
		require_once('header.php');
		if(isset($_SESSION['name'])){
			header('location:index.php');
		}
		include_once('../controller/c_user.php');

		$userNameErr = null;
		$passErr = null;

		if(($_SERVER['REQUEST_METHOD'] == 'POST')){
				//get text
			$userName = $_POST['username'];
			$pass = $_POST['password'];

			$c_login = new C_User();
			$errArr = $c_login->loginUser($userName, $pass);

			if($errArr == null){
				header('location:index.php');
			}else{
				$userNameErr = $errArr['userNameErr'];
				$passErr = $errArr['passErr'];
			}
		}
	?>
	<div class="container">
		<div class="account">
			<h2>Đăng nhập</h2>
			<div class="account-pass">
				<div class="col-md-7 account-top">
					<form action="" method="POST">
						<div> 	
							<span>Tài khoản: (*) </span>
							<input type="text" name="username" placeholder="Nhập tài khoản" required/> 
							<?php 
								if(isset($userNameErr))
									echo "<span class='text-danger'>".$userNameErr."</span>"; 
							?>
						</div>
						<div> 
							<span>Mật khẩu: (*)</span>
							<input type="password" name="password" placeholder="Nhập mật khẩu" required/>
							<?php 
								if(isset($passErr)) 
									echo "<span class='text-danger'>".$passErr."</span>"; 
							?>
						</div>				
						<input type="submit" value="Đăng Nhập"> 
					</form>
				</div>
				<!-- register -->
				<div class="col-md-5 left-account ">
					<a href="../views/single.php"><img class="img-responsive " src="../images/ac.png" alt=""></a>
					<div class="five">
						<h1>25% </h1><span>discount</span>
					</div>
					<a href="./register.php" class="create">Create an account</a>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---->
	<?php require_once('footer.php'); ?>