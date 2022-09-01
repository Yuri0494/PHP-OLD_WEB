<?php

class Render {


    // Frontend
public static function renderPersonCards ($data) {
    $res = "";
    $cards = "";
    $counter = 0;
    for($i=0; $i < count($data); $i++) {
        $cards .= $data[$i]->getHtmlCard();
        $counter++;
        if(count($data) === ($i + 1) && $counter < 3) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
            break;
        }

        if($counter%3 === 0) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
            $cards = "";
        }


        if($counter%3 !== 0 && count($data) === ($i + 1)) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
        }

        
    }
    return $res;
}

public static function renderPersonCardsInBasket ($data) {
    $res = "";
    $cards = "";
    $counter = 0;
    for($i=0; $i < count($data); $i++) {
        $cards .= $data[$i]->getBasketHtmlCard();
        $counter++;
        if(count($data) === ($i + 1) && $counter < 3) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
            break;
        }

        if($counter%3 === 0) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
            $cards = "";
        }


        if($counter%3 !== 0 && count($data) === ($i + 1)) {
            $res .= "<div class='flex-container-for-3-elemnts'>{$cards}</div>";
        }

        
    }
    return $res;
}


}

?>