<aside class="side-nav">
	<div class="brand">
		<h2>Berita Coding</h2>
		<div style="display: flex; gap: 0.8rem; margin:1rem 0;">
			<?php
			$avatar = $current_user->avatar ?
				base_url('upload/avatar/' . $current_user->avatar)
				: get_gravatar($current_user->email)
			?>
			<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="32" width="32">
			<div>
				<b><?= htmlentities($current_user->name) ?></b>
				<small><?= htmlentities($current_user->email) ?></small>
			</div>
		</div>
	</div>
	<nav>
		<a href="<?= site_url('admin/dashboard') ?>">Overview</a>
		<a href="<?= site_url('admin/post') ?>">Post</a>
		<a href="<?= site_url('admin/feedback') ?>">Feedback</a>
		<a href="<?= site_url('admin/setting') ?>">Setting</a>
		<a href="<?= site_url('auth/logout') ?>">Logout</a>
	</nav>
</aside>
