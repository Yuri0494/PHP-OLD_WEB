<?php
include "TextDataBaseService.php";
include "services/FrontendService.php";

//Заголовки для получения данных
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

// Данные для главной страницы
function getMainPageData () {
    $personsData = TextDataBaseService::createArrayOfPersons("./txtDB/persons/");
    $data = Render::renderPersonCards($personsData);
    return $data;
}

// Данные для корзины 
function getBasketData () {
    $personsInBasket = TextDataBaseService::createArrayOfPersons("./txtDB/basket/");
    $data = Render::renderPersonCardsInBasket($personsInBasket);
    return $data;
}

$htmlCards = getMainPageData ();
$basketCards = getBasketData ();

?>