<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Demo</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	$books = [
		[
			'name' => 'Do Androids Dream of Electric Sheep',
			'author' => 'Philip K. Dick',
			'releaseYear' => 1968,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'name' => 'Project Hail Mary',
			'author' => 'Andy Weir',
			'releaseYear' => 2021,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'name' => 'The Martians',
			'author' => 'Andy Weir',
			'releaseYear' => 2011,
			'purchaseUrl' => 'http://example.com'
		],
	];


	function filterByAuthor($books, $name)
	{
		$filteredBooks = [];

		foreach ($books as $book) {
			if ($book['author'] === $name) {
				$filteredBooks[] = $book;
			}
		}

		return $filteredBooks;
	}

	?>

	<ul>
		<?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>

			<li>
				<a href="<?= $book['purchaseUrl'] ?>">
					<?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
				</a>
			</li>

		<?php endforeach; ?>
	</ul>

</body>

</html>