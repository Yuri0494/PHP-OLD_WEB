<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/main.css">
    <title>Приложение по отслеживанию дня рождения</title>
</head>
<body>
    <div class="header">
        <div class="container header__container">
            <div class="logo">
                <h1>У кого сегодня день рождения? ;)</h1>
                <a href="layout/add-the-new-friend.php">Добавить карточку</a>
                <a href="basket.php">Корзина</a>
            </div>
        </div>
    </div>
    <div class="workplace">
    <div class="container workplace__container">
            <?php
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
            include "txtDB/App.php";
            echo $htmlCards;
            ?>
        </div>

    </div>
    </div>
    <footer class="footer">
        <div class="container footer__container">
            <p class="footer__text">ALL RIGHTS RESERVED</p>
        </div>
    </footer>
    
    
</body>
</html>