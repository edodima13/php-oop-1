<?php

class movie{
    public $titolo;
    public $sottotitolo;
    public $voto;
    //costruttore
    function __construct(string $_titolo, string $_sottotitolo, float $_voto )
    {
        $this->titolo = $_titolo;
        $this->sottotitolo = $_sottotitolo;
        $this->voto = $_voto;
    }
    //funzione 
    public function getTitle(){
        return $this->titolo.' - '.$this->sottotitolo.' - ';
    }
}

//istanze  
$KM_1 = new movie("Kingsman","secret service",7.5);
$KM_2 = new movie("Kingsman","il cerchio d'oro",8);
$KM_3 = new movie("Kingsman","le origini",7);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ol>
        <li>
            <span>
                <?php
                    echo $KM_1->getTitle();
                ?>
            </span>
            <span>
                <?php
                    echo $KM_1->voto;
                ?>
            </span>
        </li>
        <li>
            <span>
                <?php
                    echo $KM_2->getTitle();
                 ?>
            </span>
            <span>
                <?php
                    echo $KM_2->voto;
                 ?>
            </span>
        </li>
        <li>
            <span>
                <?php
                    echo $KM_3->getTitle();
                ?>
            </span>
            <span>
                <?php
                    echo $KM_3->voto;
                ?>
            </span>
        </li>
    </ol>


    
</body>
</html>


