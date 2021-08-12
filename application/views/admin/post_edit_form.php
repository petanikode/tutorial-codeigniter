<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Edit Article</h1>

			<form action="" method="POST">
				<div>
					<label for="title">Title*</label>
					<input type="text" name="title" class="<?= form_error('title') ? 'invalid' : '' ?>"
					value="<?= form_error('title') ? set_value('title') : $article->title ?>" 
					required maxlength="128"/>
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>

				<div>
					<label for="content">Konten</label>
					<textarea name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."><?= form_error('content') ? set_value('content') : $article->content ?></textarea>
				</div>

				<div>
					<button type="submit" name="draft" class="button" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button button-primary" value="false">Publish Update</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
