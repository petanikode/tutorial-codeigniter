<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Write new Article</h1>

			<form action="" method="POST">
				<label for="title">Title*</label>
				<input type="text" name="title" placeholder="Judul artikel" required title="Wajib tulis judul artikel"/>
				
				<label for="content">Konten</label>
				<textarea name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<div>
					<button type="submit" name="draft" class="button" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button button-primary" value="false">Publish</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
