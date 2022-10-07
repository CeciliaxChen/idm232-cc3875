<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 2;
    $b = 4;
    <!-- if () {

    } -->

    if ($a > $b) {
        echo 'a is larger than b';
    } elseif ($a < $b) {
        echo 'a is smaller than b';
        <!-- this would be outputted -->
    } else {
        echo 'a is equal to be';
    }



    $a = 5;
    $b = 4;
    
    if ($a > $b) {
        echo 'a is larger than b';
        <!-- this would be outputted -->
    } elseif ($a < $b) {
        echo 'a is smaller than b';
        <!-- elseif is used when you want to check multiple things -->
    } else {
        echo 'a is equal to be';
        <!-- can you else when it's just checking one thing  -->
    }


    $user_logged_in = true;
    if (!$user_logged_in) {
        echo 'You cannot access this page. Please go to home page';
    }
    <!-- this wouldn't run because ! = not  -->

    ?> 
</body>
</html>