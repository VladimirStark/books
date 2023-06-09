<?php
// Algoritm изменения одной книги БД
// 1. Подключится к БД
$link = mysqli_connect('localhost', 'root', '', 'books');

// 2. Проверить успешность подключения.
if ($link === false)
{
    echo 'Нет подключения';
    exit();
}

// 3. Получить данные из формы и id изменяемой книги.
$title = $_POST['title'];
$fio = $_POST['fio'];
$year = $_POST['year'];
$genre = $_POST['genre'];

$id = $_GET['id'];

// 4. Делаем запрос к БД на изменение данных книги по id.
$sql = "UPDATE `books` SET  `title` = '$title', `author` = '$fio', `year` = $year, `genre` = '$genre' WHERE `id` =$id";
$result = mysqli_query($link, $sql);

// 5. Если изменени произошло упешо:
if ($result)
{
    // 5.1 Вывести сообщение об успешном изменении книги.
    echo 'Книга успешно изменена';
    // 5.2 Вывести ссылку на список книг.
?>
<a href="index.php">Вернутся к списку книг</a>
<?php
}
?>