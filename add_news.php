<?php 
include("connect.php"); 
if(isset($_POST['title'])){
	if($_POST['title'] != ''){
		$title = $_POST["title"];
		$text = $_POST["text"];

		$query = mysql_query("INSERT INTO `news` (`title`,`text`) VALUES ('$title','$text')") or die (Mysql_error());
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method='POST'>
		Заголовок
		<input type="text" name='title'><br>
		Текст
		<input type="text" name='text'><br>
		<button type="submit">Добавить</button>
	</form>
</body>
</html>