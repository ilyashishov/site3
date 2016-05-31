<?php 
	include("connect.php"); 
	if (isset($_POST['login'])) {
		if($_POST['password'] == $_POST['password2']){
			$login = $_POST['login'];
			$password = $_POST['password'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$query = mysql_query("INSERT INTO users (login,password,first_name,last_name) VALUES ('$login','$password','$first_name','$last_name')") or die (Mysql_error());
			print_r($query);
		}else{
			echo "<h1 class='error'>Пароли не совпадают</h1>";
		}
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Регистрация</title>
 </head>
 <style>
	.reg{
		width: 300px;
		background-color: #444;
		margin: 100px auto;
		color: #fff;
		border-radius: 5px;
		padding: 10px;
		text-align: center;
	}
	.reg input{
		margin: 10px;
		width: 220px;
		height: 30px;
		border-radius: 5px;
		border: none;
		padding-left: 4px;
		box-shadow: 2px 2px 8px rgba(0,0,0,.7)
	}
	.error{
		color: red;
	}
 </style>
 <body>
 	<div class="reg">
 		<h2>Регистрация</h2>
 		<form action="" method="POST">
 			<input name="login" type='text' placeholder='Login'>
 			<input name='password' type="password" placeholder="Password">
 			<input name='password2' type="password" placeholder='Password'>
 			<input name="last_name" type='text' placeholder='Last name'>
 			<input name="first_name" type='text' placeholder='First name'>
 			<input type="submit" style='cursor: pointer;'>
 		</form>
 	</div>
 </body>
 </html>