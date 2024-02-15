<html>

<head>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="jquery-1.9.1.min.js"></script>
<!-- <link id="popup_css" href="" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  /*transition: all 0.5s ease;*/
}
.modal-dialog{
	width: 50%;
    height: 70%;
    margin-left: auto;
    margin-right: auto;
    z-index: 1000 !important;
    margin-top: 12%;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<style>
.modal-title{
	text-align:center;
	padding: 10px;
}
.popup form {
	width: 100%;
}
.popup input[required] + label, .popup form input, .popup form select, .popup form textarea {
	font-family: "Roboto";
	font-weight: 300;
  color: red;
  font-size:16px;
}
.popup form input, .popup form select {
	height:38px;
}

.popup form input, .popup form select, .popup form textarea {
	border:1px solid #d0d0d0;
	display: block;
	margin: 0 auto;
	margin-bottom: 20px;
	padding-left: 10px;
	width: 83.55%;
  color: red;
}
.popup input[required] + label {
	position: absolute;
	transform: translateX(60px) translateY(-50px);
}
::-webkit-input-placeholder { 
        color: blue;
        opacity: 1; }
::-moz-placeholder          { color: red;
        opacity: 1; }
:-moz-placeholder           { color: blue; 
        opacity: 1;}
:-ms-input-placeholder      { color: blue; 
        opacity: 1;}

.popup input[required] + label:after {
    content:'*';
    color: red;
}
.popup input[required]:invalid + label{
    display: inline-block;
}
.popup input[required]:valid + label{
    display: none;
}

.popup form select {
	background-image: url("../image/arr-black.png");
	background-position: right 10px center;
	background-repeat: no-repeat;
     -webkit-appearance: none;
      -moz-appearance: none;
      text-indent: 0.01px; 
      text-overflow: '';
      -ms-appearance: none;
      appearance: none!important;
    color: red;
}

 .popup form textarea {
	height: 110px;
	padding-top: 10px;
	color: red;
}
.popup form input[type="submit"] {
	background: linear-gradient(137deg, #990000 0%, #ff0000 74%);
	border-radius:3px;
	width:317px;
	height:40px;
	margin-bottom: 0;
	font-weight: 500;
	font-size:1em;
	color:#ffffff;
	line-height:23px;
}
</style>
</head>

<!-- <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#myModal" tabindex="-1">Book Now</button> -->
<div id="myModal" class="modal fade" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
	<button class="close" type="button" data-dismiss="modal">×</button>
	<h4 class="modal-title">Reservation Form</h4>
</div>
<div class="modal-body">
  	<div class="popup">
  		<form action="index" method="post" enctype="text/plain">
			<input type="text" id="name" name="name" required />
			<label for="name">Name</label>
			
			<input type="tel" id="tel" name="t" required />
			<label for="tel">Mobile</label>
			
			<input type="e-mail" id="email" name="email" required />
			<label for="email">Email</label>
			
			<input type="Date"  name="date" placeholder=""/>
			<input type="time"  name="time" placeholder="Time"/>
			
			<select name="person" placeholder="Person" >
			<label for="email">Person</label>
			
				<option value="1">1Person</option>
				<option value="2">2Person</option>
				<option value="3">3Person</option>
				<option value="4">4Person</option>
				<option value="5">5Person</option>
				<option value="6">6Person</option>
			</select>
			
			
			<input type="submit" name="submit" value="Book Now">
		</form>
  	</div>
</div>
</div>
</div>
</div>


<!-- <script>

        $(function () {
        	if ($('#myModal').is(':visible'))
        	{
        		$('link#popup_css').attr('href', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        	}    
        	else
        	{
        		$('link#popup_css').attr('href', '');
        	}
            $('#launch').click(function () {
                $('link#popup_css').attr('href', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
            });
 
        });
    
</script> -->
<script>
$(document).ready(function(){
  $("#launch").click(function(){
   
    $("#myModal").fadeIn("slow");
    // $("#myModal").fadeIn("fast");
  });
});
</script>
</html>