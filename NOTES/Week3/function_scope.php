<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Scope</title>
</head>
<body>
    <?php

    $bar = 'outside'; //global scope

    function bar()
    {
        $bar = 'inside';
        echo $bar; // inside
    }

    // if i really need the bar outside 
    function passBar($outside_variable)
    {
        echo $outside_variable; //inside
    }

    passBar($bar) // outside 







    function foo()
    {
        global $bar; // declar '$bar' as global 
        echo $bar; // outside 
    }




    ?>

</body>
</html>