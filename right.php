<?php 
	$news = mysql_query("SELECT * FROM users");
	$res = mysql_fetch_assoc($news);
 ?>

<div class="right">
	<div class="news">
		<div class="new">
			<p class='title'>Lorem ipsum dolor sit amet, consectetur.</p>
			<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum placeat omnis, mollitia blanditiis adipisci enim iste quibusdam iure officia voluptatibus asperiores perspiciatis explicabo nulla rerum nihil. Ad, aspernatur harum similique?</p>
		</div>
		<div class="new">
			<p class='title'>Lorem ipsum dolor sit amet, consectetur.</p>
			<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum placeat omnis, mollitia blanditiis adipisci enim iste quibusdam iure officia voluptatibus asperiores perspiciatis explicabo nulla rerum nihil. Ad, aspernatur harum similique?</p>
		</div>
	</div>
</div>