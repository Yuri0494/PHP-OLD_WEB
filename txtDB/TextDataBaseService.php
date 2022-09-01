<?php
include "./types.php";

class TextDataBaseService {
    public static $dataFolder = "persons/"; // Зачем статическая переменная?
    public static $basketFolder = "basket/";

    // Требуются вшитые в класс переменные, в которых содержится путь к добавляемой/удаляемой карточке. И переменные путей, которые ссылаются на App.php

    public static function addPersonInTxtFolder (array $arr, string $folder) {
        $res = [];
        foreach($arr as $key => $value) {
            $res[$key] = $value;
        }
        $fileName = $folder . $res['name'] . '_' . $res['surname'] . '.txt'; // Здесь баг
        file_put_contents($fileName, serialize($res));
    }

    public static function deletedPersonInTxtFolder ($personName, $folderName) {
        $name = key($personName);
        $path = $folderName . $name . ".txt"; // Желательно избавиться от txt
        copy($path, self::$basketFolder . $name . ".txt");
        unlink($path); 
    }

    public static function deletedPersonInTxtFolderForever ($personName, $folderName) {
        $name = key($personName);
        $path = $folderName . $name . ".txt"; // Желательно избавиться от txt
        unlink($path); 
    }
    

    public static function restorePersonInTxtFolder ($personName, $folderName) {
        $name = key($personName);
        $path = $folderName . $name . ".txt"; // Желательно избавиться от txt
        self::addInTheBasket($path, self::$dataFolder . $name . ".txt");
        unlink($path); 
    }

    public static function createArrayOfPersons ($folder) {
        $res = [];
        $data = self::createPersonsDataFromTxt($folder); // Здесь можно в качестве аргумента передать функцию, которая будет доставать персон из определенной БД
        echo($data[0]["typeOfCard"]);
        for($i=0; $i < count($data); $i++) {
            ${$data[$i]} = new Person(
                new Name($data[$i]["name"], $data[$i]["surname"]), 
                new BorthDate($data[$i]["birthday"]),
                new Photo ($data[$i]["photo"]),
                new TypeOfCard ((int) $data[$i]["typeOfCard"])
            );
            array_push($res, ${$data[$i]});
        }
        return $res;
    }

    private static function createPersonsDataFromTxt ($folderName) {
        $data = scandir($folderName);
        $res = [];
        for($i = 2; $i < count($data); $i++) {
            $file = file_get_contents($folderName . $data[$i]);
            array_push($res, unserialize($file));
        }
        return $res;
    }

    private static function addInTheBasket ($person, $basketPath) {
        copy($person,$basketPath);
    }


}
?>