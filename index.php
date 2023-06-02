<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книги</title>
</head>
<body>
    <?php
    while ($row = mysqli_fetch_assoc($result))
    {
    ?>
        <div style="border: 2px solid red; padding: 15px">
            <h3><?php echo $row['title'] ?></h3>
            <p><?php echo $row['author'] ?></p>
            <p>Год издания:<?php echo $row['year'] ?></p>
        </div>
    <?php
    }
    ?>
</body>
</html>