	<?php 
		require_once('header.php');
	 ?>
	<div class="container">
		<div class="account">
			<h2>Đăng nhập</h2>
			<div class="account-pass">
				<div class="col-md-7 account-top">
					<form action="../controller/c_login.php" method="POST">
						<div> 	
							<span>Tài khoản</span>
							<input type="text" name="username" placeholder="Nhập tài khoản" required/> 
						</div>
						<div> 
							<span>Mật khẩu</span>
							<input type="password" name="password" placeholder="Nhập mật khẩu" required/>
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
	<?php require_once('./footer.php'); ?>