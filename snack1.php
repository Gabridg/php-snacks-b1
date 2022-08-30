<?php 
$nba_matches = [
    [
        "home" => "Phoenix",
        "visiting" => "Chicago",
        "pointsT1" => 42,
        "pointsT2" => 90,
    ],
    [
        "home" => "Pelicans",
        "visiting" => "Lakers",
        "pointsT1" => 114,
        "pointsT2" => 111,
    ],
    [
        "home" => "Celtics",
        "visiting" => "NYKnicks",
        "pointsT1" => 117,
        "pointsT2" => 84,
    ],
    [
        "home" => "Cavaliers",
        "visiting" => "Milwaukee",
        "pointsT1" => 115,
        "pointsT2" => 103,
    ]
    ];

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
    <div>
        <ul>
            <?php for($i = 0; $i < count($nba_matches); $i++) : ?>
            <li>
                <span class="team">
                    <?= $nba_matches[$i]['home'] ?>
                    /
                    <?= $nba_matches[$i]['visiting'] ?>
                    ||
                </span>    
                <span class="points">
                    <?= $nba_matches[$i]['pointsT1'] ?>
                    -
                    <?= $nba_matches[$i]['pointsT2'] ?>
                </span>
   
            </li>
            <?php endfor; ?>
        </ul>
    </div>
</body>
</html>