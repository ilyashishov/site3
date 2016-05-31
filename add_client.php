<?php 
	include("connect.php"); 
	if(isset($_POST['f'])){
		$last_name = $_POST['f'];
		$first_name = $_POST['i'];
		$patronymic = $_POST['o'];
		$date_of_birth = $_POST['date'];
		$phone = $_POST['phone'];
		$email = $_POST['mail'];
		$information = $_POST['info'];
		$query = mysql_query("INSERT INTO clients (last_name,first_name,patronymic,date_of_birth,phone,email,information) VALUES ('$last_name','$first_name','$patronymic','$date_of_birth','$phone','$email','$information')") or die (Mysql_error());
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
 			<form action="" method="POST">
 				<p>Фамилия <br><input name='f' type="text"></p>
 				<p>Имя <br><input name='i' type="text"></p>
 				<p>Отчество <br><input name='o' type="text"></p>
 				<p>Дата рождения <br><input name='date' type="text"></p>
 				<p>Номер телефона <br><input name='phone' type="text"></p>
 				<p>E-mail <br><input name='mail' type="text"></p>
 				<p>
 					Дополнительная информация<br>
 					<textarea name="info" id="" cols="30" rows="10"></textarea>
 				</p>
 				<input type="submit">
 			</form>
 		</div>
 		<?php include("right.php"); ?>
 	</div>
 </body>
 </html>