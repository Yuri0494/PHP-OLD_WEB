<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <title>Корзина</title>
</head>
<body>
    <div class="header">
        <div class="container header__container">
            <div class="logo">
                <h1>Корзина</h1>
                <a href="index.php">Вернуться на главную</a>
            </div>
        </div>
    </div>
    <div class="workplace">
    <div class="container workplace__container">
            <?php  
            include "txtDB/App.php";
            echo $basketCards;
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