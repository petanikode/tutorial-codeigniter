<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<article class="article">
		<h1 class="post-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h1>
		<div class="post-meta">
			Published at <?= $article->created_at ?>
		</div>
		<div class="post-body">
			<?= $article->content ?>
		</div>
	</article>
	

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
