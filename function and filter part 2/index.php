<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function and Filter part2</title>
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

    function filterBooksByAuthor($books, $authorName) {
        $filteredBooks = [];
    
        foreach ($books as $book) {
            if ($book['author'] == $authorName) {
                $filteredBooks[] = $book;
            }
        }
    
        return $filteredBooks;
    }
    $author = "Andy Weir"; // Filter by Andy Weir's books
    $filteredBooks = filterBooksByAuthor($books, $author);

    ?>
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
