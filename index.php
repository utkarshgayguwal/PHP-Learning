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
    ?>
    <h1>I <?php if($read){echo "have read";}else{echo "haven't read ";} ?> "<?php echo $book ?>"</h1>
</body>
</html>