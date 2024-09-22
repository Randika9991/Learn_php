<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function and Filter</title>
</head>
<body>
    <?php 
    $books = [
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://example.com/the-martian'
        ],
        [
            'name' => 'Artemis',
            'author' => 'Andy Weir',
            'releaseYear' => 2017,
            'purchaseUrl' => 'https://example.com/artemis'
        ]
    ];

    function filterByAuther($book){
       return 'filter';
    }
    
    ?>
<ul>
    <?php foreach ($books as $book): ?>
        <?php if ($book['author'] == 'Andy Weir'): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<p>
    <?php echo
        filterByAuther();         //"php echo" = "="
    ?>
</p>
</body>
</html>
