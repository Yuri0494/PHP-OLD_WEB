<?php 

include "txtDB/Card.php";

class Name {
    public $name;
    public $lastName;
    public function __construct (string $name, string $lastName) {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function showName () {
        return $this->name;
    }

    public function showLastName () {
        return $this->lastName;
    }

    public function showFullName () {
        return $this->name . " " . $this->lastName;
    }
}

class BorthDate {

    public $borthDate;
    public function __construct (string $borthDate) {
        $this->borthDate = $borthDate;
    }

    public function showBorthDate () {
        
        return $this->borthDate;
    }

}

class Phone {

    public $phone;

    public function __construct (string $phone) {
        $this->phone = $phone;
    }

    public function showPhone () {
        return $this->phone;
    }
}

class Photo {

    public $photo;

    public function __construct (string $photo) {
        $this->photo = $photo;
    }

    public function showPhoto () {
        return $this->photo;
    }

}

class TypeOfCard {

    public $typeOfCard;

    public function __construct ($typeOfCard) {
        if($typeOfCard == 1) {
            $this->typeOfCard = $typeOfCard;
        } else {
            $this->typeOfCard = 'rightAngle';
        }
    }

    public function getTypeOfCard () {
        return $this->typeOfCard;
    }

}

class Person {

    const FAMILY = "family";
    const FRIEND = "friend";

    private $name;
    private $borthDate;
    private $phone;
    private $photo;
    public $typeOfCard;
    public $status;

    public function __construct (Name $name, BorthDate $borthDate, Photo $photo, $typeOfCard = null, Phone $phone = null, $status = null) {

        $this->name = $name;
        $this->borthDate = $borthDate;
        $this->phone = $phone;
        $this->photo = $photo;
        $this->status = $status;
        $this->typeOfCard = $typeOfCard->getTypeOfCard();
    }

    public function getFullName () {
        return $this->name->showFullName();
    }

    public function getBorthDate () {
        return $this->borthDate->showBorthDate();
    }

    public function getPhone () {
        return $this->phone->showPhone();
    }

    public function getPhoto () {
        return $this->photo->showPhoto ();
    }

    public function showPerson () {
        $space = "<br/>";
        $photo = self::getPhoto();
        $name = self::getFullName();
        $date = self::getBorthDate();

        
        $phone = self::getPhone();
        return $photo . $space . $name .  $space .$date . $space . $phone;

    }

    public function getHtmlCard () {
        $photo = self::getPhoto();
        $name = self::getFullName();
        $date = self::getBorthDate();
        $htmlCard = null;
        echo gettype($this->typeOfCar);
        if($this->typeOfCard === 1) {
            $htmlCard = new CardWithRadius([$name, $date, $photo], 'main');
        } else {
            $htmlCard = new CardWithRightAngles([$name, $date, $photo], 'main');
        }

        return $htmlCard->getHtmlCard();

    }

    public function getBasketHtmlCard () {
        $photo = self::getPhoto();
        $name = self::getFullName();
        $date = self::getBorthDate();
        $htmlCard = null;
        if($this->typeOfCard === 1) {
            $htmlCard = new CardWithRadius([$name, $date, $photo], 'basket');
        } else {
            $htmlCard = new CardWithRightAngles([$name, $date, $photo], 'basket');
        }

        return $htmlCard->getHtmlCard();
    }
}

