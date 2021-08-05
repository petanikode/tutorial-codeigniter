<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container">
		<h1>List Artikel</h1>
		<ul>
			<?php foreach ($articles as $article) : ?>
				<li>
					<a href="<?= site_url('article/show/' . $article->slug) ?>">
						<?= $article->title ? html_escape($article->title) : "No Title" ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
