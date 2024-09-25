<!DOCTYPE html>
<?php require "views/partials/head.php" ?>
<html lang="en" class="h-full bg-gray-100">
<body class="bg-blue-500">
<div class="min-h-full">

    <?php require "views/partials/nav.php" ?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note) : ?>
                <li><?= $note['id']  ?></li>
                <li><?= $note['body']  ?></li>
                <li>
                    <a href="/book?id=<?=$note['id']?>" class="bg-gray-100 hover:underline"><?= $note['body']  ?></a>
                </li>
            <?php endforeach; ?>
        </div>

        <p class="mt-6">
            <a href="/notes/create" class="max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-white-500 hover:underline">Create Note</a>
        </p>
    </main>
</div>
</body>
</html>
