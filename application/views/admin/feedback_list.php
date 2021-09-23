<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Feedback</h1>

			<?php foreach($feedbacks as $feedback): ?>
			<div class="card">
				<div class="card-header">
					<div>
						<b><?= $feedback->name ?></b> <small class="text-gray"><?= $feedback->email ?></small>
					</div>
					<div><small class="text-gray"><?= $feedback->created_at ?></small></div>
				</div>
				<p><?= $feedback->message ?></p>
				<a href="#" 
					data-delete-url="<?= site_url('admin/feedback/delete/'.$feedback->id) ?>" 
					class="button button-danger button-small" 
					role="button"
					onclick="deleteConfirm(this)">Delete</a>
			</div>
			<?php endforeach ?>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
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
