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
                <li><?= $note['custId']  ?></li>
                <li><?= $note['custName']  ?></li>
                <li>
                    <a href="/book?custId=<?=$note['custId']?>" class="bg-gray-100 hover:underline"><?= $note['custName']  ?></a>
                </li>
            <?php endforeach; ?>
        </div>
    </main>
</div>
</body>
</html>
