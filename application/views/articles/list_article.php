<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Llist of Article</title>
</head>
<body>

<h1>List Artikel</h1>
<ul>
	<?php foreach($articles as $article): ?>
	<li><?= $article['title'] ?></li>
	<?php endforeach ?>
</ul>

</body>
</html>
