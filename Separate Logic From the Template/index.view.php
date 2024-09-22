<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function and Filter part2</title>
</head>
<body>

<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
