<?php

class Movie
{
    public $titolo;           // variabili di istanza
    public $genere;  // variabili di istanza
    public $anno;
    public $img;

    // Costruttore

    function __construct($_titolo, $_genere, $_anno, $_img)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->img = $_img;
    }

    function getAnno()
    {
        return $this->anno;
    }

    function getNome()
    {
        return $this->titolo;
    }

    function getimg()
    {
        return $this->img;
    }
}

$JohnWich = new Movie("John Wich", "azione", "2015", "https://imgcinemas.it/wp-content/uploads/2022/10/john-wick-4-poster.jpg");
$SetteAnime = new Movie("Sette Anime", "drammatico", "2009", "https://movieplayer.net-cdn.it/t/images/2008/12/16/la-locandina-italiana-di-sette-anime-99845_jpg_400x0_crop_q85.jpg");
$OdisseaNelloSpazio = new Movie("Odissea Nello Spazio", "Avventura", "1968", "https://imgcinemas.it/wp-content/uploads/2023/01/2001odisseanellospazio.jpg");
$Avatar = new Movie("Avatar", "fantascienza", "2010", "https://imgcinemas.it/wp-content/uploads/2022/09/avatarrerelease_RGB-1.jpg");
$Avengers = new Movie("Avengers", "fantascienza", "2019", "https://mr.comingsoon.it/imgdb/locandine/big/55032.jpg");
