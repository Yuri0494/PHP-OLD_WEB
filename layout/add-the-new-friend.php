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
    <div class="header">
        <div class="container header__container">
            <div class="logo">
                <h1>Добавь своего нового дружка
                </h1>
                <a href="../index.php">Главная</a>
            </div>
        </div>
    </div>
    <div class="workplace">
    <div class="container workplace__container">
    <form action="persons.php" method="POST">
        <p>Имя: <input type="text" name="name" /></p>
        <p>Фамилия: <input type="text" name="surname" /></p>
        <p>Ссылка на фото: <input type="text" name="photo"/></p>
        <p>День рождения: <input type="text" name="birthday" /></p>
        <p>Тип карточки:<br/>
        <input type="radio" id="radius" name="typeOfCard" value="1"/>
        <label for="radius">С закругленными углами</label>
        <input type="radio" id="rightAngle" name="typeOfCard" value="0"/>
        <label for="rightAngle">С прямыми углами</label>
        </p>
        <input type="submit" value="Отправить">
    </form>
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