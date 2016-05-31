<header>
	<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="107px" xml:space="preserve">
		<rect x="0.2%" y="2" transform="rotate(1)" fill="#FFFFFF" stroke="#C7C7C6" stroke-width="1" width="98%" height="86"></rect>
		<rect x="1.8%" y="16" transform="rotate(-0.8)" fill="#FFFFFF" stroke="#C7C7C6" stroke-width="1" width="98%" height="86"></rect>
		<rect x="1%" y="10" fill="#FFFFFF" stroke="#C7C7C6" stroke-width="1" width="98%" height="86"></rect>
	</svg>
	<div style="position: absolute; top: 0px; width: 90%; left: 50px;">
		<div class="logo">
			<a href="/">САЙТ ПСИХОТЕРАПЕВТА</a>
		</div>
		<div class="h-right">
			<?php 
			if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
				$query = mysql_query("SELECT * FROM users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
				$userdata = mysql_fetch_assoc($query);
				if(($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])) {
					setcookie("id", "", time() - 3600*24*30*12, "/");
					setcookie("hash", "", time() - 3600*24*30*12, "/");
					?>
					<a href="/reg.php">Регистрация</a>/<a href="/login.php">Вход</a>
					<?php
				}else{
					?>
					<h2>Привет <?php echo $userdata['last_name'].' '.$userdata['first_name'] ?></h2>
					<a style='float: right;' href="/logout.php">Выйти</a>
					<?php
				}
			}else{
				?>
				<a href="/reg.php">Регистрация</a>/<a href="/login.php">Вход</a>
				<?php
			}
			?>
		</div>		
	</div>
</header>
