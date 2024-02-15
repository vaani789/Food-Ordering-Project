
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link href="public/font/css/all.css" rel="stylesheet">
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
    <link rel="stylesheet" type="text/css" href="public/css1/gallery.css">
</head>
<body>
	<header class="topbar">
		<div class="container flex justify-between">
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
					<a href="cart" title="view cart">Cart</a>
				</div>
			</div>
		</div>
	</header>
<nav>
	<div class="top">
		<div class="container flex justify-between">
			<div class="contact flex items-center">
				<i class="fas fa-phone-alt" style="color: red;"></i>
				<div>
					<h5>Call Us:(+91)89654236582</h5>
					<h6>E-mail:support@gmail.com</h6>
				</div>
			</div>
			<div class="branding">
				<a href="index"><img src="public/icons/eatorylogo1.png"></a>
			</div>
			<div class="time flex items-center">
				<i class="fas fa-clock" style="color: red;"></i>
				<div>
					<h5>Working Hours</h5>
					<h6>Mon-Sat(8am - 12am)</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar magic-shadow">
		<div class="container flex justify-center">
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
<header class="hero items-center justify-between" id="home">
	<div class="container">
			<div class="top-text">
				<span>Gallery</span>
			</div>
			<div class="toplink">
				<a href="index">Home-></a>
				<a href="#gallery">gallery</a>
			</div>
	</div>
</header>

<section class="products">
	<div class="container">
		<h1 class="section-heading">Top Products</h1>
	</div>
	<div class="row">
		<?php foreach($products as $items){
		?>
			<div class="product-container">
				<div class="p-box">
					<img src="uploads/<?php echo $items['image']; ?>">
					<h2><?php echo $items['name']; ?></h2>
					<b>Rs. <small><?php echo $items['price']; ?>/-</small></b>
					<button id="<?php echo $items['id']; ?>" class="cart-btn">Add to cart</button>
				</div>
				
			</div>
			<?php } ?>
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
			<a href="#gallery">Gallery</a>
			<a href="#menu">Menu</a>
			<a href="#reservation">Reservation</a>
			<a href="#contactus">Contact Us</a>
		</div>
		<div class="copyright flex">
			© 2021 <a href="#home"> Eatory Restaurant </a> All Right Reserved.
		</div>
	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$('.cart-btn').click(function(){
  	var product = $(this).attr('id');
  	var quantity =1;
  	$.ajax({
  		type: 'POST',
  		url: '<?php echo base_url(); ?>/cart_add',
  		data: {"product_id":product,"quantity":quantity},
  		success: function(response){
  			console.log(response);
  		}
  	});
  });
</script>
<script>
	$('.cart-btn').click(function(){
		alert("Product added to cart");
	});
</script>
</body>
</html>