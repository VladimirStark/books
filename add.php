<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление книги</title>
</head>
<body>
    <form method="post" action="handler.php">
        <input name="title" type="text" placeholder="Введите название книги"/>
        <br/>
        <input name="fio" type="text" placeholder="Введите ФИО фвтора"/>
        <br/>
        <input name="year" type="number" placeholder="Введите год издания"/>
        <br/>
        <input name="genre" type="text" placeholder="Введите жанр"/>
        <br/>
        <button>Добавить новую книгу</buttom>
    </form>
</body>
</html>