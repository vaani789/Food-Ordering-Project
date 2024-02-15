<!DOCTYPE html>
<html>
<head>
	<title>Eatory Restaurant</title>
	<link href="public/font/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"> -->
	
 	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
 	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/
 	m4="crossorigin="anonymous"></script>
	<script src="jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="public/css1/style.css">

</head>
<?php $session = session(); ?>
<body>
	<header class="topbar">
		<div class="container flex justify-between">
			<div class="icons">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
				<a href="https://www.google.com/"><i class="fab fa-google"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				<!-- <li class="searchbar"> -->
			        <i class="fa fa-search" aria-hidden="true"></i>
			         <div class="togglesearch" id="bar">
			            <input type="text" name="sbar" placeholder=""/>
			            <input type="button" name="sbtn" value="Search"/>
			        </div>
			    <!-- </li> -->
			</div>
			<div class="auth flex">
				<?php 
				if(isset($_SESSION['user_id'])) :?>
					<a href="<?php echo site_url('logout');?>">Logout</a>
				<?php else : ?>
					<i class="fas fa-user" style="padding: 5px;"></i>
				    <a href="login">Login</a>
				<?php endif; ?>
				<!-- <div>
					<i class="fas fa-user"></i>
					<a href="login">Login</a>
				</div> -->
				<span class="divider">|</span>
				<div>
					<i class="fas fa-user-edit"></i>
					<a href="reg">Register Now</a>
				</div>
				<?php 
					if (isset($_SESSION['user_id'])) { 
				?>
				<span class="divider">|</span>
				<div>
					<i class="fas fa-shopping-cart"></i>
					<a href="<?php echo base_url(); ?>/cart">Cart</a>
				</div>
				<?php } ?>
				<div>
					<p><?php echo $session->get('name');?></p>
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
				<i class="far fa-calendar-alt" style="color: red;"></i>
				<div>
					<h5>Working Hours</h5>
					<h6>Mon-Sat(8am - 12am)</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar magic-shadow">
		<div class="container flex justify-center">
			<!-- <div class="sticky"> -->
				<a href="#home" class="active">Home</a>
				<a href="#about">About us</a>
				<a href="#menu">Menu</a>
				<a href="#reservation">Reservation</a>
				<a href="#service">Service</a>
				<a href="#gallery">Gallery</a>
				<a href="#contactus">Contact Us</a>
			<!-- </div> -->
		</div>
	</div>
</nav>


<header class="hero flex items-center" id="home">
	<div class="container">
			<div class="welcome">
				<span>Welcome to Eatory</span>
			</div>
			<h1>Eatory Cafe <span>&</span> Restaurant</h1>
			<p>Eatory is a restaurant, bar and coffee roastery located on Mohali.We have awesome recipes and the most talented chefs!</p>
			<div>
				<a href="siteabout"><button class="btn">Read More</button></a>
				<a href="sitegallery"><button class="btn1">Order Now</button></a>
			</div>
		<div class="side-image flex items-center">
			<img src="public/image/frings.png">
		</div>
	</div>
	<div class="container">
		<div class="welcome">
			<span>Discover Your Teste</span>
		</div>
		<h1>We belive good food <span>offer</span><br>great smile</h1>
		<p>Making a reservation at Delicious restaurant is easy and takes just a couple of minutes.</p>
		<div>
			<button class="btn">Read More</button>
			<button class="btn1">Order Now</button>
		</div>
		<div class="side-image flex justify-between">
			<img src="public/image/burger.png">
		</div>
	</div>
	<div class="container">
		<div class="welcome">
			<span>Food's lover</span>
		</div>
		<h1>Meet eat <span>&</span> enjoy the true test</h1>
		<p>Making a reservation at Delicious restaurant is easy and takes just a couple of minutes.</p>
		<div>
			<button class="btn">Read More</button>
			<button class="btn1">Order Now</button>
		</div>
		<div class="side-image flex justify-between">
			<img src="public/image/sub.png">
		</div>
	</div>	
</header>

<section class="top-dishes">
	<div class="container">
		<h1 class="section-heading">Top Dishes</h1>
		<div class="slider">
			<button class="slider-btn prev-btn"><i class="far fa-caret-square-left"></i></button>
			<button class="slider-btn next-btn"><i class="far fa-caret-square-right"></i></button>
			<div class="food-slider">
				<?php foreach($products as $items){
				?>
				<div class="food-card">
					<div class="product-img flex justify-center items-center">
						<img src="uploads/<?php echo $items['image'];?>">
					</div>
					<hr>
					<div>
						<h2 class="text-center"><?php echo $items['name']; ?></h2>
						<div class="stars flex justify-center items-center">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="price text-center">
							Rs/-<?php echo $items['price']; ?>
						</div>
						<div class="flex justify-center">
							<button id="<?php echo $items['id']; ?>" class="slider-btn">
								<i class="fas fa-shopping-cart"></i>
								Add to cart
							</button>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>	
		</div>
		<div class="text-center btn-wrapper">
			<a href="sitegallery"><button class="btn btn black">View More</button></a>
		</div>
	</div>
</section>

<section class="about-meal" id="about">
	<div class="container">
		<h1 class="section-heading">Our Story</h1>
		<div class="about-meal-wrap flex">
			<div class="flex-1">
				<img src="public/dish/smpizza.jpg">
			</div>
			<div class="flex-1">
				<h2>About Eatory Restaurant</h2>
				<p>Open day by day for lunch and dinner,’Eatory Restaurant’ offers a choice of naturally arranged things utilizing just the best fixings accessible.
				Top picks incorporate Certified Angus Beef, crisp fish,infant back pork ribs,new prepared pot pie,
				strength plates of mixed greens,wood-let go pizzas, pasta, sandwiches, burgers and more.</p>
				<a href="siteabout"><button class="btn btn black">Read More</button></a>
			</div>
		</div>
	</div>
</section>

<section class="special-pack">
	<div class="container">
		<h1 class="section-heading">Special Package</h1>
		<div class="pack-img flex">
			<img src="public/image/banner.jpg">
		</div>
		<div class="promotion-detail ">
			<h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
			<p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
			<a href="siteabout"><button class="btn btn red">Read More</button></a>
		</div>
	</div>
</section>

<section class="today-menu" id="menu">
	<section class="products">
	<div class="container">
		<h1 class="section-heading">Today's Menu</h1>
	</div>
	<div class="row">
		<?php foreach($products as $items){
		?>
			<div class="product-container">
				<div class="p-box">
					<img src="uploads/<?php echo $items['image'];?>">
					<h2><?php echo $items['name']; ?></h2>
					<b>Rs. <small><?php echo $items['price']; ?>/-</small></b>
					<button id="<?php echo $items['id']; ?>" class="cart-btn">Add to cart</button>
				</div>
				
			</div>
			<?php } ?>
	</div>	
</section>
	
</section>


<section class="table-book" id="reservation">
	<div class="container">
		<h1 class="table-heading">BOOK A TABLE NOW !</h1>
		<?php include('popup.php'); ?>
		<a class="button" id="launch" href="#myModal" data-target="#myModal" data-toggle="modal"tabindex="-1" type="button">Book Now</a>
	</div>
</section>


<section class="our-services" id="service">
	<div class="container">
		<h1 class="section-heading">Our Services</h1>
		<div class="card-wrapper flex">
			<div class="service-card">
				<img class="icon"src="public/icons/delivery.png">
				<h2>Free Delivery</h2>
				<p>Online Food Ordering systems partner with local restaurants that offer home.</p>
				<a href="siteabout"><button class="btn1">Read More</button></a>
			</div>
			<div class="service-card">
				<img class="icon"src="public/icons/food1.png">
				<h2 class="text">Delicious Food</h2>
				<p>Online Food Ordering systems partner with local restaurants that offer home.</p>
				<a href="siteabout"><button class="btn btn red">Read More</button></a>
			</div>
			<div class="service-card">
				<img class="icon"src="public/icons/staff.png">
				<h2>Good Staff</h2>
				<p>Online Food Ordering systems partner with local restaurants that offer home.</p>
				<a href="siteabout"><button class="btn1">Read More</button></a>
			</div>
		</div>
	</div>
</section>

<section class="gallery" id="gallery">
	<h1 class="section-heading">Gallery</h1>
	<div class="swiper-container mySwiper">
      	<div class="swiper-wrapper">
	        <div class="swiper-slide">
	          <img src="public/gallery/a.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/b.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/c.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/d.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/cake1.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/e.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/f.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/7.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/9.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/10.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/11.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/g.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/h.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/i.png" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/j.png" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/14.jpg" />
	        </div>
	        <div class="swiper-slide">
	          <img src="public/gallery/l.jpg" />
	        </div>
      </div>
    </div>
</section>

<section class="update">
	<div class="container flex items-center">
		<div>
			<img src="public/icons/updatebg.png">
		</div>
		<div>
			<h1>Receive Great Offers and Event Updates</h1>
			<div class="input-wrap">
				<input type="email" placeholder="email@eatory.com">
				<a href=""><button>SIGNUP</button></a>
			</div>
		</div>
	</div>
</section>

<section class="contact-us flex" id="contactus">
	<div class="contact-info-wrapper">
		<h1 class="section-heading">Contact Us</h1>
		<div class="contact-info">
			<div>
				<div>
					<i class="fas fa-map-marker-alt" style="color:red;"></i>
					<span>Sahibzada Ajit Singh Nagar</span>
					<span>Punjab</span>
				</div>
				<div>
					<i class="fas fa-phone-alt" style="color:red;"></i>
					<span>Call Us:</span>
					<span>(+91)9856214569</span>
				</div>
				<div>
					<i class="fas fa-envelope" style="color:red;"></i>
					<span>Email:</span>
					<span>support@eatory.com</span>
				</div>
				<div>
					<i class="fas fa-clock" style="color:red;"></i>
					<span>Working Hours:</span>
					<span>Mon-Sat(8.00am-12.00am)</span>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109782.86712293245!2d76.62734007586944!3d30.6983052074133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee906da6f81f%3A0x512998f16ce508d8!2sSahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1620899060145!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

<a href="javascript:void(0)" class="goTop">
	<i class="fas fa-chevron-up"></i>
</a>



<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="public/js/app.js"></script>

<script>
	var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 20,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideShadows: true,
        },
		loop:true,
		autoplay:{
			delay:1000,
			disableOnInteraction:false,
		}
   	});
</script>



<script type="text/javascript" src="public/js/slick.min.js"></script>
<script>
		$('.hero').slick({
			autoplay:true,
			delay:500,
		});
</script>
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
<script>
	$(document).ready(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>400){
			$('.goTop').fadeIn('1000');
			}
			else{
				$('.goTop').fadeOut('1000');
			}
	});
});
	$('.goTop').click(function(){
		$('html, body').animate({scrollTop:0},1000);	
	});
</script>


<script>
	$(document).ready(function() {
 
	$(".fa-search").click(function() {
	   $(".togglesearch").toggle();
	   // $(".togglesearch").animate({ left: '100%'}, 'slow');
	   $("input[type='text']").focus();
	   
	 });
 
});
</script>


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
	$('.slider-btn').click(function(){
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

</body>
</html>