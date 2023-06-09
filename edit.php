<?php
// 1. Подключение к БД
$link = mysqli_connect('localhost', 'root', '', 'books');
if ($link === false)
{
    echo 'Нет подключения к БД';
    exit();
}
// 2. Составить sql-запрос к БД получение данных книги по id
$id = $_GET['id'];
$sql = "SELECT * FROM `books` WHERE `id`=$id";
$result = mysqli_query($link, $sql);
$book = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать книги</title>
</head>
<body>
    <form method="post" action="handler2.php?id=<?php echo $id ?>">
    <input value="<?php echo $book['title'] ?>" name="title" type="text" placeholder="Введите название книги"/>
        <br/>
        <input value="<?php echo $book['author'] ?>" name="fio" type="text" placeholder="Введите ФИО фвтора"/>
        <br/>
        <input value="<?php echo $book['year'] ?>" name="year" type="number" placeholder="Введите год издания"/>
        <br/>
        <input value="<?php echo $book['genre'] ?>" name="genre" type="text" placeholder="Введите жанр"/>
        <br/>
        <button>Добавить изменения</button>
    </form>
</body>
</html>