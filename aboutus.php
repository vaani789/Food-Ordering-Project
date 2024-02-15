<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/materialize.min.css">
	<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	
<style>
.btn{
	width:10%;
	/*height: 30px;*/
	border: none;
	line-height: 30px;
	background-color: red;
	color: #fff;
	font-size:20px;
	border-radius: 8px;
}
.btn:hover{
	color: black;
}
label{
	font-size:20px;
}
</style>	
</head>
<body>
	<?= \Config\Services::validation()->listErrors();?>
	<form method="POST" action="<?php echo site_url('upload'); ?>">
		<label><b>Artical Title:</b></label>
		<input type="text" name="name"><br><br>
		<textarea type="text" name="description"></textarea><br>
		<input class="btn" type="submit" name="submit" value="Submit">
		<input class="btn" type="submit" name="submit" value="Cancel">
		<script src="../ckeditor.js"></script>
		<script>
			CKEDITOR.replace('description');
		</script>
	</form>
</body>
</html>