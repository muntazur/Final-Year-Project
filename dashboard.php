<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="./assets/jquery.min.js"></script>
	<script src="./assets/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="./assets/font-awesome.min.css">
 	<script type="text/javascript" src="./js/main.js"></script>
 </head>
<body>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			   
				<div>
					<h4 class="card-title">Categories</h4>
					<p class="card-text"></p>
					<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
					<a href="manage_categories.php" class="btn btn-primary">Manage</a>
				</div>

				<br>
				<br>

				<div>
					<h4 class="card-title">Brands</h4>
					<p class="card-text"></p>
					<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
					<a href="manage_brand.php" class="btn btn-primary">Manage</a>
				</div>

			</div>
			<div class="col-md-4">
				
				<h1>Welcome!</h1>		
				<img src="images/inv.png" style="width:80px;height:80px;border-radius: 50%">
				<img src="images/inv1.jpg" style="width:80px;height:80px;border-radius: 50%">
				<img src="images/inventory.jpg" style="width:80px;height:80px;border-radius: 50%">
				<img src="images/inv1.png" style="width:80px;height:80px;border-radius: 50%">


				<div>
					<h4 class="card-title"></h4>
					<p class="card-text"></p>
					<a href="new_order.php" class="btn btn-primary">New Orders</a>
				</div>

			</div>

			<div class="col-md-4">
				
					<div>
						<h4 class="card-title">Products</h4>
						<p class="card-text"></p>
						<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
						<a href="manage_product.php" class="btn btn-primary">Manage</a>
					</div>

			</div>
				
		</div>
	</div>

	

	<p></p>
	<p></p>

	
	<?php
	//Categpry Form
	include_once("./templates/category.php");
	 ?>
	 <?php
	//Brand Form
	include_once("./templates/brand.php");
	 ?>
	 <?php
	//Products Form
	include_once("./templates/products.php");
	 ?>


</body>
</html>