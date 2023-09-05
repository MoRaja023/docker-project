<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mijn eerste project</title>
</head>

<body>
    <?php
    echo "i am a big fan of the simpsons"
    ?>

    <?php
    $tvshow = "The Simpons";
    echo $tvshow;

    $tvshow = "Family Guy";
    echo $tvshow;

    echo "<h1>$tvshow</h1>";
    ?>

    <?php
    $voornaam = "Mohamed";
    echo $voornaam;

    $achternaam = "El Harchaui";
    echo $achternaam;

    $leeftijd = "23";
    echo $leeftijd;
    ?>

    <?php
    $leeftijd = 16;

    if ($leeftijd < 18) {
        echo "je bent minderjarig";
    }

    $geboortejaar = 2008;

    if ($geboortejaar > 1997 && $geboortejaar < 2012) {
        echo "Jij behoort tot generatie Z. (Zoomer)";
    }
    ?>

    <?php $a = 12;
    $b = 222;

    if ($a < $b) {
        echo '$a is smaller then $b';
    } else {
        echo '$a is larger the $b';
    }
    ?>
</body>

</html>