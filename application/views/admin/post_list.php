<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>List Artikel</h1>

			<div class="toolbar">
				<a href="<?= site_url('admin/post/new') ?>" class="button button-primary" role="button">+ Tulis Artikel</a>
				<div>
					<form action="" method="GET" style="flex-direction: row; width:360px">
						<input type="search" name="keyword" placeholder="Cari artikel" value="<?= html_escape($keyword) ?>">
						<input type="submit" value="Cari" class="button" style="width: 32%;">
					</form>
				</div>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($articles as $article) : ?>
						<tr>
							<td>
								<div><?= $article->title ?></div>
								<div class="text-gray"><small><?= $article->created_at ?><small></div>
							</td>
							<?php if ($article->draft === 'true') : ?>
								<td class="text-center text-gray">Draft</td>
							<?php else : ?>
								<td class="text-center text-green">Published</td>
							<?php endif ?>
							<td>
								<div class="action">
									<a href="<?= site_url('article/' . $article->slug) ?>" class="button button-small" target="_blank" role="button">Preview</a>
									<a href="<?= site_url('admin/post/edit/' . $article->id) ?>" class="button button-small" role="button">Edit</a>
									<a href="#" data-delete-url="<?= site_url('admin/post/delete/' . $article->id) ?>" class="button button-small button-danger" role="button" onclick="deleteConfirm(this)">Delete</a>
								</div>
							</td>
						</tr>
					<?php endforeach ?>

				</tbody>
			</table>

			<?=  $this->pagination->create_links(); ?>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event) {
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if (dialog.isConfirmed) {
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if ($this->session->flashdata('message')) : ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>
