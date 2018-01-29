<html>
<head>
	<title>QR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
			transition: 0.3s;
			width: 20%;             <!-- change here for card width and height -->
			border-radius: 5px;
			background-color: #ffffff;
			opacity: 0.75;
		}

		.card:hover {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		img {
			border-radius: 5px 5px 0 0;
		}

		.containe {
			padding: 13px 0px;
		}
		
		body{
			background-image: url('images/back.jpg');
			background-repeat: no-repeat;
			overload: hidden;
			background-size: 100% 100%;
		}
		
	</style>
</head>

<body>
<center><br><br><br>
<?php
include 'uuid.php';
?>
</center>
</body>

<script src="assets/jquery/jquery.min.js"></script>
	<script>
	function showME(){
        $.ajax({
          url: "red.php",
          cache: false,
          success: function(data){
             if(data == 'yeah'){
				console.log(data);
				window.location.href='check.php';
			 }else{
				 console.log(data);
			 }
          } 
        });
    }
		
	$(document).ready(function(){
		$('#sec').hide();
		showME();
	});
		
	setInterval(showME,2000);
	
	</script>
</html>