<!DOCTYPE html>
<html>
<head>
	<link href="font/css/all.css" rel="stylesheet">

<style>
.btnn{
	width:6%;
	height: 30px;
	border: none;
	line-height: 30px;
	background-color: red;
	color: #fff;
	border-radius: 8px;
}
.btnn:hover{
	color: black;
}
.box-container {
    padding: 10px 10px 10px 25px;
    box-shadow: 10px 10px 10px #bbb;
}	
</style>
</head>
<body>
	<?=\Config\Services::validation()->listErrors();?>
	<form method="POST" action="<?=site_url('GalleryController/uploadgallery');?>" enctype="multipart/form-data">
		
		<div class="box-container">
			<h2>Add Images</h2><br>
			<h3>Image Title:</h3>
			<input type="text" name="name"><br><br>
			<h3 for="myfile">Select a file:</h3>
			<input type="file" name="file" value="Choose File..."><br><br>
			<h3>Image Description:</h3>
			<textarea type="text" name="description"></textarea><br><br>
			<input class="btnn" type="submit" name="btn" value="Submit">
			<input class="btnn" type="submit" name="btn1" value="Cancel">
		
		</div>
	</form>

</body>
</html>