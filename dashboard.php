<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="public/font/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/dashboard.css">
	<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php $session = session(); ?>
<section id="sidebar">
	<div class="sidebar-brand">
		<img src="public/image/logo.png">
		<h3><center> Welcome <i class="fas fa-smile"></i></center></h3>
	</div>
	<div class="sidebar-menu">
		<ul>
			<li id="dashboard"><a href="javascript:void(0)"><i class="fa fa-desktop"></i><span>Dashboard</span></a></li>
			<li id="about"><a href="javascript:void(1)"><i class="fas fa-address-card"></i><span>About us</span></a></li>
			<li id="gallery"><a href="javascript:void(2)"><i class="fas fa-images"></i><span>Gallery</span></a></li>
			<li id="menu"><a href="javascript:void(3)"><i class="fas fa-hourglass-start"></i><span>Menu</span></a></li>
			<li id="mnucategory"><a href="javascript:void(4)"><i class="far fa-copy"></i><span>Menu category</span></a></li>
			<li id="payment"><a href="javascript:void(5)"><i class="fas fa-money-bill-wave"></i><span>Payment</span></a></li>
			<li><a href="<?php echo site_url('logout');?>"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
		</ul>
	</div>
</section>


<section id="main-content">
<header class="main-header">
	<div class="header-left">
		<h4><?php echo $session->get('email');?></h4>
		<a href="index">GotoWebsite</a>
	</div>
	<div class="header-left">
		<div class="container h-100">
    		<div class="d-flex justify-content-center h-100">
        		<div class="searchbar">
          			<input class="search_input" type="text" name="" placeholder="Search...">
          			<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        		</div>
    		</div>
		</div>
	</div>
	<div class="header-right">
		<i class="fas fa-bell"></i>
		<i class="fas fa-envelope"></i>
		<i class="fas fa-cog"></i>
	</div>

	<div class="header-left">
		<img src="public/image/user1.png" class="img-responive">
		<h3>Admin</h3>
		<p><?php echo $session->get('name');?></p>
	</div>
	<div class="clear"></div>

	
</header>
<div id="aboutpage"></div>
<div id="pgelod"></div>
<div id="galload"></div>
<div id="menuload"></div>
<div id="category"></div>
<div id="paylod"></div>

</section>

</body>
</html>

<script>
	$(document).ready(function(){
		$('#dashboard').click(function(){ 
			$('#pgelod').load('maindashboard');
			$('#galload').html("");
			$('#aboutpage').html("");
			$('#menuload').html("");
			$('#category').html("");
			$('#paylod').html("");
		}); 
	});
	$('#dashboard').ready(function(){
		
			$('#pgelod').load('maindashboard');
			$('#galload').html("");
			$('#aboutpage').html("");
			$('#menuload').html("");
			$('#category').html("");
			$('#paylod').html("");
		}); 

	$(document).ready(function(){
		$('#about').click(function(){ 
			$('#aboutpage').load('aboutus');
			$('#pgelod').html("");
			$('#galload').html("");
			$('#menuload').html("");
			$('#category').html("");
			$('#paylod').html("");
		});
	});
	$(document).ready(function(){
		$('#gallery').click(function(){
			$('#galload').load('gallery');
			$('#pgelod').html("");
			$('#aboutpage').html("");
			$('#menuload').html("");
			$('#category').html("");
			$('#paylod').html("");
		});
	});
	$(document).ready(function(){
		$('#menu').click(function(){
			$('#menuload').load('menu');
			$('#pgelod').html("");
			$('#aboutpage').html("");
			$('#galload').html("");
			$('#category').html("");
			$('#paylod').html("");
		});
	});
	$(document).ready(function(){
		$('#mnucategory').click(function(){
			$('#category').load('menucategory');
			$('#pgelod').html("");
			$('#aboutpage').html("");
			$('#galload').html("");
			$('#menuload').html("");
			$('#paylod').html("");
		});
	});
	$(document).ready(function(){
		$('#payment').click(function(){
			$('#paylod').load('payment');
			$('#pgelod').html("");
			$('#aboutpage').html("");
			$('#galload').html("");
			$('#menuload').html("");
			$('#category').html("");
		});
	});

</script>
