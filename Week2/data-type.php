<!-- PHP Supports the following data types: 
 - string 
 - Integer 
 - Float (decimal)
 - Boolean (true or false) 
 - Array 
 - Object 
 - NULL  -->



<?php
$x = 'Hello world!' ;
$y = 'Hello World!' ;

echo $x; // Hello World
echo '<br>' ;
echo $y; // Hello World 2! 


echo '<br>' ;
$x = 4820 ;
echo $x ; // 4820
$x = '4820';
echo '<br>' ;


var_dump($x); // it's like console.log and gives you more information 

// FLOAT
echo '<br>';
$x = 10.2300; 
var_dump(10.2300);



// ARRAY
echo '<br>';
$favourite_car_brands = [
    'Volvo',
    'BMW',
    'Toyota',
    // arrays don't need to be the same type of data
    4, 
    false, 
    2.35,
];
var_dump($favourite_car_brands);



// CONCATENATION 
$first_name = 'Paul';
$last_name = 'Phan';
$full_name = $first_name . $last_name;
// echo $full_name; PaulPhan
$full_name = $first_name . ' ' . $last_name;
// echo $full_name; Paul Phan


$phrase = 'Hello my name is' . $first_name . ' ' . $last_name;
// echo $phrase; Hello my name is Paul Phan 



// Quotes single vs double 
$phrase = 'Hello World';
echo '$phrase Again<br>'; <!-- $phrase Again -->  
echo "$phrase Again<br>"; Hello World! Again 
echo $phrase . 'Again<br>'; Helllo WOrld! Again 


echo "String's apostrophe"; <!-- String's apostrophe -->
// echo 'String's apostrophe'; 
echo 'String\'s apostrophe'; 


// With double quotes, can use $phrase and can use apopstrophes 

?> 


