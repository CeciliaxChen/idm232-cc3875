<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action ="" method="GET"> 
        <!-- when dealing with sensitive information the URL will show the passowrd publicly, and that's not good -->
    <!-- <form action="path-to-file-or">  -->
        <!-- USE POST -->



    <form action="process.php" method="POST">
        <label for="firstName"> First Name </label>
        <input type="text" name="firstName" value="<?php echo $Get['firstName'];?>" id="firstName" placeholder="first name">
        <!-- value="Paul" it was default to Paul -->
        <br> 
        <label for="lastName"> Last Name </label> 
        <input type="text" name="lastName" value="" id="lastName" placeholder="last name">

        <!-- <p><button> Menu Button </button></p> 
        <button onClick="someFunction();"> Reset </button> 
        <button> Submit </button>  -->

        <!-- <button role="button"> Reset </buton>  -->
        <!-- Can treat this as a button but isn't really -->
        <input type="submit" value="Submit"> 



<!-- POST = send info in private way 
GET = send info in public way  -->

<!-- inside form, you can collect input field, google it 
    Each input field has a name, label for accessibility reasons  -->

<!-- to submit a form, do input field or button  -->


header('Location: https://google.com');

</body>
</html>