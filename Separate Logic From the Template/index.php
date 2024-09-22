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

require "index.view.php";
