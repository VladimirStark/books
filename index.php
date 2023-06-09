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
            <?php
            if (!empty($row['year']))
            {
            ?>
            <p>Год издания:<?php echo $row['year'] ?></p>
            <?php
            }
           
            if (!empty($row['genre']))
            {
            ?>
            <p>Жанр:<?php echo $row['genre'] ?></p>
            <?php
            }
            ?>
            <a href="edit.php?id=<?php echo $row['id'] ?>">Редактировать</a>
        </div>
    <?php
    }
    ?>
    <a href="add.php">Добавить новую книгу</a>
</body>
</html>