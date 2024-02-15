<!DOCTYPE html>
<html>
<head>
	<title>OrderSuccess</title>
	<link href="public/font/css/all.css" rel="stylesheet">
	<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php $session = session(); ?>	
<div class="container">
	<h2>Order Status</h2>
	<p class="ord_succ">Your order has been placed successfully.</p>
		<div class="card">
			<div class="card-header">
				Invoice
				<span class="float-right"> 
				<strong>Status:</strong> Pending</span>
			</div>
			<div class="card-body">
				<div class="row mb-4">
					<div class="col-sm-6">
  						<h3>Shipping Address</h3>
					</div>	
				</div>
				<?php foreach($users as $user){ ?>
				<div>	
					<h6><?php echo $user->username; ?></h6>
					<h6><?php echo $user->email; ?></h6>
					<h6><?php echo $user->phone; ?></h6>
					<h6><?php echo $user->address1; ?></h6>
				</div>
			<?php } ?>
			</div>
		</div>
</div>
</body>
</html>