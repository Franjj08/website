<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALiDATE_INPUT</title>
</head>
<body>
    <form action="VALIDATE_INPUT.php" method="post">
        username:<br>
        <input type="text" name = "username"><br>
        age:<br>
        <input type="text" name = "age"><br>
        email:<br>
        <input type="text" name = "email"><br>
        <input type = "submit" name = "login" value = "login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST,"age", FILTER_VALIDATE_INT);
        $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

        //echo "Your are {$age} years old";
        if(empty($age)){
            echo"That number wasn't valid";
        }
        else{
            echo"You are $age years old";
        }
        //echo "Your email is {$email}";
    }
?>