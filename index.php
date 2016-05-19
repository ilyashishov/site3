<?php 
	include("connect.php"); 
	include("check.php"); 

	if($isLogin){
		echo "Привет";
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="./css/style.css">
 </head>
 <body>
 	<?php include("header.php"); ?>
 	<div class="container">
 		<?php include("left.php"); ?>
 		<div class="cont">
 			<?php 

 		?>
 		</div>
 		<?php include("right.php"); ?>
 	</div>
 </body>
 </html>