<!DOCTYPE html>
<html>
<head>
	<title>Aboutus</title>
	<link href="public/font/css/all.css" rel="stylesheet">
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 	
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>public/css1/about.css">
</head>
<body>
<?php $session = session(); ?>
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
					<a href="cart">Add to Cart</a>
				</div>
			</div>
		</div>
	</header>
<nav id="top_nav_bar">
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
				<img src="public/icons/eatorylogo1.png">
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
				<span>About Us</span>
			</div>
			<div class="toplink">
				<a href="index">Home-></a>
				<a href="#about">Aboutus</a>
			</div>
	</div>
</header>

<section class="story">
	<div class="container">
		<h1 class="section-heading">About Us</h1>
		<div class="flex">
			<div class="flex-1">
				<img src="public/gallery/storyimg.jpg">
			</div>
			<?php foreach($users as $user){ ?>
			<div class="flex-1">
				
				<h2><?php echo $user->articaltitle; ?></h2>
				<p><?php echo $user->description; ?></p>
				
			</div>
			<?php }?>
		</div>
		<div class="flex">
			<div class="flex-1">
				<h2>Our Mission</h2>
				<p>Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh.Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh.</p>
				
			</div>
			<div class="flex-1">
				<img class= "pic" src="public/gallery/aboutimg1.jpg">
			</div>
		</div>
	</div>	
</section>

<section class="counters">
			<div class="container">
				<div>
					<i class="fas fa-history"></i>
					<div class="counter" data-target="700">0</div>
					<h3>Working Hours</h3>
				</div>
				<div>
					<i class="fas fa-box-open"></i>
					<div class="counter" data-target="325">0</div>
					<h3>Order Daily</h3>
				</div>
				<div>
					<i class="fas fa-users"></i>
					<div class="counter" data-target="500">0</div>
					<h3>Happy clients</h3>
				</div>
				<div>
					<i class="fas fa-award"></i>
					<div class="counter" data-target="300">0</div>
					<h3>Awards Received</h3>
				</div>
			</div>
</section>

<section class="table">
	<div class="container">
	</div>
</section>

<section class="testimonal">
    <div class="rt-container">
        <div class="col-rt-12">
			<div class="Scriptcontent">
				<div class="carrousel">
					<h2><b>Users Reviews</b></h2>						
					<input type="radio" name="slides" id="radio-1" checked>
					<input type="radio" name="slides" id="radio-2">
					<input type="radio" name="slides" id="radio-3">
					<input type="radio" name="slides" id="radio-4">
					<ul class="slides">
						 <li class="slide">
					<p>
					   <q>Fantastic snacks! The prepared foods are delicious!</q> 
					  <span class="author">
					  <img src="public/icons/testi1.png">
					  – Dina Rose Rankin
					  </span>
					</p>
				   </li>        
					<li class="slide">
					  <p>
						<q>"...Thank you for the love in your food!"</q> 
						<span class="author">
						  <img src="public/icons/testi2.png">
						  ~ Christina
						</span>
					  </p>
				   </li>
				  <li class="slide">
					 <p>
						<q>"Your Gluten Free breads truly make me feel lighter and uplifted."</q> 
						<span class="author">
						<img src="public/icons/testi1.png">
						~ Alex
						</span>
					 </p>
				  </li>
				  <li class="slide">
					<p>
					  <q>"I am writing just to "Thank You" for making such wonderful quality products.</q> 
					  <span class="author">
						<img src="public/icons/testi2.png">
						~ Kate
					  </span>
					</p>
				   </li>
					</ul>
					<div class="slidesNavigation">
						<label for="radio-1" id="dotForRadio-1"></label>
						<label for="radio-2" id="dotForRadio-2"></label>
						<label for="radio-3" id="dotForRadio-3"></label>
						<label for="radio-4" id="dotForRadio-4"></label>
					</div>
				</div>
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

<!-- ####counter##### -->

<script>

const counters = document.querySelectorAll('.counter');
const speed = 100; // The lower the slower

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		const inc = target / speed;

		if (count < target) {
			
			counter.innerText = count + inc;
			setTimeout(updateCount, 5);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});

</script>	

</body>
</html>