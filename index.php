<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <?php
        $book = "Can't Hurt Me";
        $read = false;
        if ($read) {$message = "I have read \"$book\"";} else {$message = "I haven't read \"$book\"";}
    ?>
    
    <h1><?php echo $message ?></h1>
</body>
</html>