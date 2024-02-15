<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
	<link href="public/font/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>public/css1/cart.css">

</head>
<body>
<header class="topbar">
		<div class="container flex justify-between" style="width: 52%;">
			<div class="icons">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
				<a href="https://www.google.com/"><i class="fab fa-google"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.skype.com/en/"><i class="fab fa-skype"></i></a>
			</div>
			<div class="auth flex">
				<div>
					<i class="fas fa-user"></i>
					<a href="login">Login</a>
				</div>
				<span class="divider">|</span>
				<div>
					<i class="fas fa-user-edit"></i>
					<a href="reg">Register Now</a>
				</div>
				<span class="divider">|</span>
				<div>
					<i class="fas fa-shopping-cart"></i>
					<a href="">Cart</a>
				</div>
			</div>
		</div>
</header>
<nav id="top_nav_bar">
	<div class="top">
		<div class="container flex justify-between" style="width: 60%;">
			<div class="contact flex items-center">
				<i class="fas fa-phone-alt" style="color: red;"></i>
				<div>
					<h6>Call Us:(+91)89654236582</h6>
					<h6>E-mail:support@gmail.com</h6>
				</div>
			</div>
			<div class="branding">
				<a href="index"><img src="public/icons/eatorylogo1.png"></a>
			</div>
			<div class="time flex items-center">
				<i class="fas fa-clock" style="color: red;"></i>
				<div>
					<h6>Working Hours</h6>
					<h6>Mon-Sat(8am - 12am)</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar magic-shadow">
		<div class="container flex justify-center" style="width: 55%;">
			<a href="#home" class="active">Home</a>
			<a href="#about">About us</a>
			<a href="#menu">Menu</a>
			<a href="#reservation">Reservation</a>
			<a href="#service">Service</a>
			<a href="#gallery">Gallery</a>
			<a href="#contactus">Contact Us</a>
		</div>
	</div>
</nav>

<section class="cart-header">
	<div>
		<h3>Cart</h3>
	</div>
</section>

<section class="cart-table">
<div class="container mt-1">
	<div class="row justify-content">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h5><b>Cart Products</b></h5>
				</div>
				<?php 
				if(session()->getFlashdata('status'))
				{
					echo "<h4>".session()->getFlashdata('status')."</h4>";
				}
			?>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Image</th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th></th>	
							</tr>
								
								<?php foreach ($items as $item){
        							$products = $cart->findproductbyid($item['product_id']);

        							foreach ($products as $product){
									?>
									<tr>
										<form action="cartController/delete" method="post">
											<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
										<td><?php echo $item['id']; ?></td>
										<td><img style="height: 50px;width: 50px;"src="<?php echo base_url(); ?>/uploads/<?php echo $product->image; ?>"></td>
										<td><?php echo $product->name; ?></td>
										<td><?php echo $product->price; ?></td>
										<td><input type="text" value="<?php echo $item['quantity'];?>"></td>
										<td><?php echo $item['quantity']*$product->price; ?></td>
										<td><button name="del" type="submit" class="btn" ><i class="fas fa-times"></i></button></td>
									</form>
									</tr>

								<?php }} ?>	
					</table>
				</div>
				<?php
				$total=0; 
				foreach ($items as $item){
        				$products = $cart->findproductbyid($item['product_id']);

        					foreach ($products as $product){
        					$total+=$product->price;
							
				
				 }}?>
				<h5 style="margin-left:40rem;">Grand Total=<?php echo $total; ?></h5>
			</div>

			<a href="sitegallery"><button class="btn btn-primary mt-2">Continue Shopping</button></a>
			<a href="checkout"><button class="btn btn-success float-right mt-2">Checkout</button></a>
		</div>
	</div>
</div>

	
</section>


<footer class="footer-area">
	<div class="footer-info">
		<div class="logo">
			<img src="public/icons/eatorywhite.png">
		</div>
		<div class="footer-content">
			<h3>20, floor, Sahibzada Ajit Singh Nagar,Punjab 160023</h3>
			<p><a href="emailto:support@eatory.com">support@gmail.com</a></p>
			<p><a href="tel:91985632156">(+91)9856214569</a></p>
		</div>
		<div class="footer-icon">
			<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
			<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
			<a href="https://www.google.com/"><i class="fab fa-google"></i></a>
			<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fas fa-search"></i></a>
			<a href="https://www.skype.com/en/"><i class="fab fa-skype"></i></a>
		</div>
	</div>
	<hr class="footer-hr">
	<div class="container flex">
		<div class="footer-menu">
			<a href="#home">Home</a>
			<a href="#about">About Us</a>
			<a href="">Gallery</a>
			<a href="#menu">Menu</a>
			<a href="#reservation">Reservation</a>
			<a href="#contactus">Contact Us</a>
		</div>
		<div class="copyright flex">
			© 2021 <a href="#home"> Eatory Restaurant </a> All Right Reserved.
		</div>
	</div>
</footer>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("top_nav_bar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



</body>
</html>