<?php 
	include("connect.php"); 
	if(isset($_POST['login'])){
		$login = $_POST['login'];
		$user = mysql_query("SELECT * FROM `users` WHERE login='$login' LIMIT 1");
		$res = mysql_fetch_row($user);
		if($res[2] == $_POST['password']){
			echo "ok";
			$hash = md5(generateCode());
			$userLogin = mysql_query("UPDATE `users` SET hash='$hash' WHERE login='$login'");
			setcookie("id", $res[0], time()+60*60*24*30);
        	setcookie("hash", $hash, time()+60*60*24*30);
        	header('Location: /');
			exit;
		}else{
			echo 'error';
		}
	}

	function generateCode($length=32) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
		$code = "";
		$clen = strlen($chars) - 1;  
		while (strlen($code) < $length) {
			$code .= $chars[mt_rand(0,$clen)];  
		}
		return $code;
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login</title>
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
 		<h2>Вход</h2>
 		<form action="" method="POST">
 			<input name="login" type='text' placeholder='Login'>
 			<input name='password' type="password" placeholder="Password">
 			<input type="submit" style='cursor: pointer;'>
 		</form>
 	</div>
 </body>
 </html>