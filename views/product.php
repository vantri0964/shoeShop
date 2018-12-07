<?php 
	require_once('./header.php');
 ?>
<?php
	require_once('../controller/c_products.php');
	$c_Product = new C_Products();
	$data = $c_Product->loadProduct();
 ?>
	<!--content-->
	<div class="content">    
		<div class="content-grids">
			<h2 align="center"><b>Sản Phẩm</b></h2>
			<br>
				<div class="row">
					<div class="col-md-10 col-md-offset-2">
						<form class="form-inline" action="">
							<div class="form-group">
								<label for="sel1">Loại giày:</label>
							    <select class="form-control" id="sel1">
							     	<option>Nam</option>
							        <option>Nữ</option>
							    </select>
							</div>
							<div class="form-group">
								<label for="sel1">Kiểu giày:</label>
							    <select class="form-control" id="sel1">
							     	<option>Nam</option>
							        <option>Nữ</option>
							    </select>
							</div>
							<div class="form-group">
								<label for="sel1">Giá:</label>
							    <select class="form-control" id="sel1">
							     	<option>Thấp - Cao</option>
							        <option>Cao - Thấp</option>
							    </select>
							</div>
							<button type="submit" class="btn btn-default">Tìm kiếm</button>
						</form>
					</div>
				</div>
			<div class="product-top">
				<!-- start-product -->
				<div class="row">
				<?php 
					foreach ($data as $row) {
						?>
							<div class="col-md-3 grid-product-in">	
								<div class=" product-grid">	
									<a href="./single.php?id=<?=$row['id']?>"><img class="img-responsive " src="../images/<?=$row['img']?>" alt="<?=$row['name']?>" style="height: 214px;width: 234px;"></a>		
									<div class="shoe-in">
										<h6><a href="./single.php?id=<?=$row['id']?>"><?=(ucwords($row['name']))?></a></h6>
										<label><?=$row['cost']?> đ</label>
										<a href="./single.php?id=<?=$row['id']?>" class="store">Xem chi tiết</a>
									</div>

									<b class="plus-on">+</b>
								</div>	
							</div>

						<?php
					}


				 ?>
				<!-- end product -->
				
					
				</div>
					<div class="clearfix"> </div>
			</div>
			<!-- product-top -->
			<div class="clearfix"> </div>
		</div>
		<!-- content-grids -->
	</div>
	<!-- content -->
<?php 
	require_once('./footer.php');
 ?>