<?php
// Algoritm
// 1. Считать введенные данные с формы
//print_r($_POST);  
$title = $_POST['title'];
$fio = $_POST['fio'];
$year = $_POST['year'];
$genre = $_POST['genre'];

// 2. Подключится к БД
$link = mysqli_connect('localhost', 'root', '', 'books');
// Убедиться, что подключение прошло успешно. 
if ($link === false)
{
    echo 'Невозможно подключится к базе данных';
    exit();
}

// 3. Добавить данные новой книги в базу
$sql = "INSERT INTO `books` (`title`, `author`, `year`, `genre`) VALUES ('$title', '$fio', $year, '$genre');";
$result = mysqli_query($link, $sql);
// 4. Если добовление произошло успешно :
if ($result)
{
    // 4.1 Вывести сообщение об успешном добавлении книги
    echo 'Книга успешно добавлена';
    // 4.2 Вывести ссылку на список книг
    ?>
    <a href="index.php">Вернутся к списку книг</a>
    <?php
}