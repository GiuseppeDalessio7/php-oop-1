<?php

class Movie
{
    public $nome;           // variabili di istanza
    public $genere;  // variabili di istanza
    public $anno;

    // Costruttore

    function __construct($_nome, $_genere, $_anno)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    function getAnno()
    {
        return $this->anno;
    }

    function getNome()
    {
        return $this->nome;
    }
}

$JohnWich = new Movie("JohnWich", "azione", "22-01-2015");
$SetteAnime = new Movie("SetteAnime", "drammatico", "09-01-2009");

// $JohnWich = new Movie("22/01/2015");
// $SetteAnime = new Movie("09/01/2009");


// $JohnWich = new Movie();
// $JohnWich->anno = "22-01-2015";
// $JohnWich->genere = "azione";
// 
// $SetteAnime = new Movie();
// $SetteAnime->anno = "09-01-2009";
// $SetteAnime->genere = "drammatico";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
</head>

<body>
    <h1>Stampa a schermo</h1>

    <h2>Il genere di film che mi piace sono:
        <span><?php echo $JohnWich->genere ?></span>
        <span><?php echo $SetteAnime->genere ?></span>
    </h2>
    <h3>In particolare:
        <span><?php echo $JohnWich->getNome() ?></span>
        <p> Uscito nelle sale : <?php echo $JohnWich->getAnno() ?></p>
    </h3>
    <h3>Ma anche :
        <span><?php echo $SetteAnime->getNome() ?></span>
        <p> Uscito nelle sale il : <?php echo $SetteAnime->getAnno() ?></p>
    </h3>






</body>

</html>