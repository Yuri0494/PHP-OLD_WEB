<?php 
abstract class  Card 
{
    public $data;
    public $type;
    public function __construct (array $data, string $type) {
        $this->data = $data;
        $this->type = $type;
    }
    public function getHtmlCard(){}
}

class CardWithRadius extends Card {

    public function getHtmlCard() {
        if($this->type === "main") {
            return "<div class='person-card radius'>
                        <h3 class='third-title'>
                        {$this->data[0]}
                        </h3>
                        <img src='{$this->data[2]}'>
                        <p><span>У НЕГО ДРха:</span> <span>{$this->data[1]}</span></p>
                        <button class='radius' >Поздравить сейчас?</button>
                        <form action='./txtDB/deletPerson.php' method='POST'>
                        <input class='radius' type='submit' name='{$this->data[0]}' value='Удалить'/>
                        </form>
                    </div>";
        } else if ($this->type === "basket") {
            return "<div class='person-card radius'>
                        <h3 class='third-title'>
                        {$this->data[0]}
                        </h3>
                        <img src='{$this->data[2]}'>
                        <p><span>У НЕГО ДРха:</span> <span>{$this->data[1]}</span></p>
                        <form action='txtDB/restorePerson.php' method='POST'>
                        <input type='submit' class='radius' name='{$this->data[0]}' value='Восстановить'/>
                        </form>
                        <form action='txtDB/confirm.php' method='POST'>
                        <input type='submit' class='radius' name='{$this->data[0]}' value='Удалить навсегда'/>
                        </form>
                    </div>";
        }
    }
}

class CardWithRightAngles extends Card {

    public function getHtmlCard() {
        if($this->type === "main") {
            return "<div class='person-card'>
                        <h3 class='third-title'>
                        {$this->data[0]}
                        </h3>
                        <img src='{$this->data[2]}'>
                        <p><span>У НЕГО ДРха:</span> <span>{$this->data[1]}</span></p>
                        <button>Поздравить сейчас?</button>
                        <form action='./txtDB/deletPerson.php' method='POST'>
                        <input type='submit' name='{$this->data[0]}' value='Удалить'/>
                        </form>
                    </div>";
        } else if ($this->type === "basket") {
            return "<div class='person-card'>
                        <h3 class='third-title'>
                        {$this->data[0]}
                        </h3>
                        <img src='{$this->data[2]}'>
                        <p><span>У НЕГО ДРха:</span> <span>{$this->data[1]}</span></p>
                        <form action='txtDB/restorePerson.php' method='POST'>
                        <input type='submit' name='{$this->data[0]}' value='Восстановить'/>
                        </form>
                        <form action='txtDB/confirm.php' method='POST'>
                        <input type='submit' name='{$this->data[0]}' value='Удалить навсегда'/>
                        </form>
                    </div>";
        }
    }
}

?>


