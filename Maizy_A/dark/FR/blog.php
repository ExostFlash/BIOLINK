<!-- About -->
<div class="pb-2">
	<h1 class="title title--h1 first-title title__separate">Blog</h1>
</div>

<!-- News -->
<div class="news-grid pb-0">
	<!-- Post -->
	<?php

	$recup = $db->query("SELECT * FROM blog WHERE 1 ORDER BY id_blog DESC");
	while ($row = $recup->fetch()) {
	?>
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date"><?= $row['mois'] . " " . $row['jour'] . " , " . $row['annee'] ?></div>
				<a class="news-item__link" href="?page=single-post&id_post=<?= $row['id_blog'] ?>"></a>
				<img class="cover lazyload" src="assets/img/blog/<?= $row['img'] ?>.png" alt="" />
			</div>
			<div class="news-item__caption">
				<h2 class="title title--h4"><?= $row['titre'] ?> in <?= $row['annee'] ?></h2>
				<p><?= $row['micro_text'] ?></p>
			</div>
		</article>
	<?php
	}
	?>
</div>
</div>