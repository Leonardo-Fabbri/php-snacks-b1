<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  un array contenente le partite di basket -->
    <!-- Ogni array avrà una squadra di casa e una squadra ospite -->
    <!-- casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite -->
    <!-- Milano - Cantù | 55-60 -->
    <?php
       $partite= [
           [
                "casa" => "Lakers", 
                "ospite" => "Chicago Bulls",
                "punti_casa" => 50,
                "punti_ospite" => 51

            ],
            [
                "casa" => "San Antonio Spurs", 
                "ospite" => "Olimpia Milano",
                "punti_casa" => 40,
                "punti_ospite" => 20

            ],
            [
                "casa" => "virtus", 
                "ospite" => "fortitudo",
                "punti_casa" => 40,
                "punti_ospite" => 20

            ],
          
           
        ];
    ?>
    <p> <?php echo $partite[0]['casa'];?>-<?php echo $partite[0]['ospite'];?>||
    <?php echo $partite[0]['punti_casa']?>-<?php echo $partite[0]['punti_ospite'];?> </p>

    <p> <?php echo $partite[1]['casa'];?>-<?php echo $partite[1]['ospite'];?>||
    <?php echo $partite[1]['punti_casa']?>-<?php echo $partite[1]['punti_ospite'];?> </p>

    <p> <?php echo $partite[2]['casa'];?>-<?php echo $partite[2]['ospite'];?>||
    <?php echo $partite[2]['punti_casa']?>-<?php echo $partite[2]['punti_ospite']?> </p>


    
</body>
</html>