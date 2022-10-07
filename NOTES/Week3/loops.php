<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php

// WHILE LOOP 

    $count = 0;
    // the while loop loops through a block of code as long as a specificed condition is true
    while ($count <=10) {
        echo $count; // 0 
        echo '<br>';
        //$count++; // increment by 1 
    }
    // this code will run endlessly 

    $count = 0;
    // the while loop loops through a block of code as long as a specificed condition is true
    while ($count <=10) {
        echo $count; 
        echo '<br>';
        $count++; // increment by 1 
    }


    $number = 0; 
    while ($number <=10) {
        echo "<li>{$number}: ";
        
        if ($number %2) {
            echo 'it odd';
        } else {
            echo 'is even';
        }
    }



// FOR LOOP
    The for statement creates a loop with 3 optional expressions: 
        Expression 1 is executed (one time) before the execution of the code block 
        Expression 2 defines the condition for executing the code block 
        Expression 3 is executed (every time) after the code block has been executed 

        for ($count = 0; $count <=10; $count ++) {
            echo $count . ', ';
        }








// FOR EACH LOOP
    $ages = [4, 8, 15, 16, 23, 42];

    foreach ($ages as $age) {
        echo "Age: {$age}<br>";
    }

    foreach ($ages )

    ?> 
</body>
</html>