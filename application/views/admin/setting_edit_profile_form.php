<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Update Profile</h1>

			<form action="" method="POST">
				<div>
					<label for="name">Name</label>
					<input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>"
					value="<?= form_error('name') ? set_value('name') : $current_user->name ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('name') ?>
					</div>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="text" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>"
					value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
					required maxlength="32"/>
					<div class="invalid-feedback">
						<?= form_error('email') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="button button-primary">Save Update</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
