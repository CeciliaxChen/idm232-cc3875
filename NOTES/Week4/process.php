<?php
echo '<pre';
    var_dump($_POST);
echo '</pre>';





$cars = ['car1', 'car2', 'car3'];
echo '<pre';



echo $cars[0]; // car1
echo $cars[1]; // car2
echo $cars[2]; // car3



function redirect_to($location)
{
    header(Location: ' . $location');
    exit;
}

redirect_to('http://www.google.com');


?> 