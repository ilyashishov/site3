<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="ru">
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
			<div class="text">
				<font size="+3">
				Фамилия Имя Отчество
				<br> <br>
				Телефон: +7(000)000-00-00
				E-mail: example@example.ru
				Skype: Username
				<br> <br>
				Дополнительная информация:
				www.information.org
				www.information.ru
				www.information.com
				</font>
			</div>
		</div>
		<?php include("right.php"); ?>
	</div>
</body>
</html>
