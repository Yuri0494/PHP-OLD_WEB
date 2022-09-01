<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение удаления</title>
</head>
<body>
    ВЫ ДЕЙСТВИТЕЛЬНО ХОТИТЕ УДАЛИТЬ ПОЛЬЗОВАТЕЛЯ НАВСЕГДА??
    <form  action='./foreverDelet.php' method='POST'>
    <input type='submit' name="<?php echo key($_POST);?>" value='Да'/>
    </form>
    <form action='../basket.php' method='GET'>
    <input type='submit' value="НЕТТ!"/>
    </form>
</body>
</html>
