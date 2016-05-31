<?php 
	include("connect.php"); 
	if (isset($_POST['login'])) {
		if($_POST['password'] == $_POST['password2']){
			$query = 'INSERT INTO users (login,password,first_name,last_name) VALUES ($_POST["login"],$_POST["password"],$_POST["first_name"],$_POST["last_name"])';
			$res = mysql_query($query);
			print_r($res);
		}else{
			echo "<h1 class='error'>Пароли не совпадают</h1>";
		}
	}
 ?>
