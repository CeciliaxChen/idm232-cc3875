<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php
    // a user-defined function declaration starts with the word function: 
    function functionName() 
    {
        // code to be executed;
    }



    function say_hello ()
    {
        echo 'Hello World! <br>';
    }
    // this is stored information until it needs to be called 

    say_hello (); // then it will be called and spits out 'Hello World!'




    function say_something ($word)
    {
        echo "Hello {$word} <br>";
    }

    say_something('Cowboy!'); // Hello Cowboy! 
    say_something('Dog!'); // Hello Dog! 
    say_something('Cat!'); // Hello Cat! 



    function full_name($first_name, $last_name)
    {
        echo "{$first_name} {$last_name} <br>";
    }


    full_name('Paul', 'Phan'); // Paul Phan

    $name = 'John Doe';
    // function better_hello(4greeting, $target, $punct)

    
    ?>
</body>
</html>