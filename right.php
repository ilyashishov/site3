<div class="right">
	<div class="news">
		<h2 class="text-center">Новости</h2>
		<?php
			$q = mysql_query("SELECT * FROM news");
			while (($r = mysql_fetch_assoc($q)) != false) {
				echo '<div class="new">';
					echo '<p class=\'title\'>'.$r['title'].'</p>';
					echo '<p class="content">'.$r['text'].'</p>';
				echo '</div>';
			}
		?>
	</div>
</div>