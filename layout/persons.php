
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Приложение по отслеживанию дня рождения</title>
</head>
<body>
<p><i>Новый пользователь добавлен в базу</i></p>
<a href="../index.php">Главная</a>
<a href="add-the-new-friend.php">Добавление нового пользователя</a>
<?php
include "../txtDB/TextDataBaseService.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

TextDataBaseService::addPersonInTxtFolder ($_POST, '../txtDB/persons/');

print_r($_POST);

?>   
    
</body>
</html>












