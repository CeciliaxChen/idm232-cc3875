<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements, Alternative to If Statements</title>
</head>
<body>
    <?php

    $a = 2;

    switch ($a) {
        case 0: 
            echo 'a equals 0'; 
            // no break
        case 1: 
            echo 'a equals 1';
            // no break
        case 2: 
            echo 'a equals 2';
            // no break
        case 3: 
            echo 'a equals 3';
            // no break
        case 4: 
            echo 'a equals 4';
            // no break
    }

    // uses switch statements when there's a lot of stuff to check like the zodiac project 
    // things could get messy with the if-else statements



    $month = 5
    switch ($month) {
        case 0: 
            echo 'rat';
            break;
        case 1: 
            echo 'ox';
            break;
    }






    ?>
</body>
</html>