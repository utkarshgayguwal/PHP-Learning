<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <?php
        $books = [
            [
                "name"        => "Can't Hurt Me",
                "author"      => "David Goggins",
                "preferedUrl" => "www.example.com",
            ],
            [
                "name"        => "Mind Management",
                "author"      => "Swami Mukudananda",
                "preferedUrl" => "www.example2.com",
            ],
        ];
    ?>

    <h1>Recommended Books by Me</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['preferedUrl'] ?>">
                    <?= $book['name'] ?>
                </a>      
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>