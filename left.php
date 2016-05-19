<?php
function isLogin(){
	if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
		$query = mysql_query("SELECT * FROM users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
		$userdata = mysql_fetch_assoc($query);
		if(($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])) {
			setcookie("id", "", time() - 3600*24*30*12, "/");
			setcookie("hash", "", time() - 3600*24*30*12, "/");
			return false;
		}else{
			return true;
		}
	}else{
	}
}

$isLogin = isLogin();
?>
<div class="left">
	<div calss="menu">
		<h2 class="text-center">Меню</h2>
		<ul class="text-center">
			<?php
				if($isLogin){
					?>
					<li><a href="/add_news.php">Добавить новость</a></li>
					<li><a href="/add_client.php">Добавить клиента</a></li>
				<?php
				}
			?>
			<li><a href="/clients.php">Программы и услуги</a></li>
			<li><a href="/clients.php">Контакты</a></li>
			<li><a href="/clients.php">Список клиентов</a></li>
			<li><a href="/users_list.php">Список пользователей</a></li>
		</ul>
	</div>
</div>
