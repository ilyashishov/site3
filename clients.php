<?php
include("connect.php");
include("check.php");

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
		<table style="width: 100%;">
			<tr>
				<th>ФИО</th>
				<th>Дата рождения</th>
				<th>Номер телефона</th>
				<th>Почта</th>
				<th>Дополнительная информация</th>
			</tr>
			<?php
			$q = mysql_query("SELECT * FROM clients");
			while (($r = mysql_fetch_assoc($q)) != false) {
				echo '<tr>';
					echo '<td>'.$r['last_name'].' '.$r['first_name'].' '.$r['patronymic'].'</td>';
					echo '<td>'.$r['date_of_birth'].'</td>';
					echo '<td>'.$r['phone'].'</td>';
					echo '<td>'.$r['email'].'</td>';
					echo '<td>'.$r['information'].'</td>';
				echo '</tr>';
			}

			?>
		</table>
	</div>
	<?php include("right.php"); ?>
</div>
</body>
</html>