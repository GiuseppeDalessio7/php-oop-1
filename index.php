<?php

include __DIR__ . '/db_movies.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>




    <div class=" text-center">
        <h1 class=" m-5">Movie Card's</h1>
        <div class="row">

            <div class="card border-0 h-100">
                <img class="card-img-top w-50" src="<?php echo $JohnWich->img ?>" alt="">
                <div class="card-body bg-warning text-start">
                    <h2>Titolo: <?php echo $JohnWich->titolo ?></h2>
                    <h5>Tipo: <?php echo $JohnWich->genere ?></h5>
                    <h4>Anno:<?php echo $JohnWich->anno ?></h4>
                </div>
            </div>

        </div>
    </div>



    <div class="row">

        <div class="card border-0 h-100">
            <img class="card-img-top w-50" src="<?php echo $SetteAnime->img ?>" alt="">
            <div class="card-body bg-warning text-start">
                <h2>Titolo: <?php echo $SetteAnime->titolo ?></h2>
                <h5>Tipo: <?php echo $SetteAnime->genere ?></h5>
                <h4>Anno:<?php echo $SetteAnime->anno ?></h4>
            </div>
        </div>
    </div>
    </div>




    <div class="row">
        <div class="card border-0 h-100">
            <img class="card-img-top w-50" src="<?php echo $OdisseaNelloSpazio->img ?>" alt="">
            <div class="card-body bg-warning text-start">
                <h2>Titolo: <?php echo $OdisseaNelloSpazio->titolo ?></h2>
                <h5>Tipo: <?php echo $OdisseaNelloSpazio->genere ?></h5>
                <h4>Anno:<?php echo $OdisseaNelloSpazio->anno ?></h4>
            </div>
        </div>
    </div>
    </div>




    <div class="row">

        <div class="card border-0 h-100">
            <img class="card-img-top w-50" src="<?php echo $Avatar->img ?>" alt="">
            <div class="card-body bg-warning text-start">
                <h2>Titolo: <?php echo $Avatar->titolo ?></h2>
                <h5>Tipo: <?php echo $Avatar->genere ?></h5>
                <h4>Anno:<?php echo $Avatar->anno ?></h4>
            </div>
        </div>
    </div>
    </div>




    <div class="row">

        <div class="card border-0 h-100">
            <img class="card-img-top w-50" src="<?php echo $Avengers->img ?>" alt="">
            <div class="card-body bg-warning text-start">
                <h2>Titolo: <?php echo $Avengers->titolo ?></h2>
                <h5>Tipo: <?php echo $Avengers->genere ?></h5>
                <h4>Anno:<?php echo $Avengers->anno ?></h4>
            </div>
        </div>
    </div>
    </div>















</body>

</html>