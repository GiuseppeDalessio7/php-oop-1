<?php

class Movie
{
    public $anno;           // variabili di istanza
    public $genere;         // variabili di istanza

    // Costruttore

    function __construct($_genere)
    {
        $this->genere = $_genere;
    }

    // function __construct($_anno)
    // {
    // $this->anno = $_anno;
    // }
}

$JohnWich = new Movie("azione");
$SetteAnime = new Movie("drammatico");

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

</body>

</html>



<!-- all’interno della classe è definito almeno un metodo -->
<!-- <!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori --> -->
<!-- delle relative proprietà -->