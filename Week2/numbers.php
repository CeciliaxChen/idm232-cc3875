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
    $var1 = 3;
    $var2 = 4; 
    // PEMDAS still applies in math 
    $basic_math_value = ((1 + 2 + $var1) * $var2) / 2 - 5; 
    // (6 * $var2) / 2 - 5; 
    // 24 / 2 - 5;
    // 12 - 5; 
    // 7; 


    $var2++; 
    // incremented by 1 
    $var2--; 
    // decremented by 1 



    <?php $float = 3.4273; ?> 
    <?php echo round($float, 1); ?>  
    // round it to the first decimal point --> 3.4 
    <?php echo round($float, 2); ?> 
    // round it to the second decimcal point --> 3.43
    <?php echo ceil($float); ?> 
    // round up --> 4 
    <?php echo floor($float); ?> 
    // round down --> 3 


    echo "Is $integer integer?" . is_int($integer);
    echo "Is $integer float?" . is_float($float);
    // When dealing with money 
    echo "Is $integer numeric?" . is_numeric($integery);
    // checks if it is float or integer 
    
    




</body>
</html>