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
    
</body>
</html>


