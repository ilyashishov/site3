<?php 
	$connect = mysql_connect('localhost', 'root', '');
	mysql_select_db('test');
	$res = mysql_query("SELECT * FROM t1");
	$row = mysql_fetch_assoc($res);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="./css/style.css">
 </head>
 <body>
 	<header>
 		<h1>Lorem ipsum dolor.</h1>
 		<div class="h-right">
 			<a href="#"></a>/<a href="#"></a>
 		</div>
 	</header>
 </body>
 </html>