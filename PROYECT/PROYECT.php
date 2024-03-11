<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";
    try{
        $conn = mysqli_connect($db_server, $db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!<br>";
    }

    if($conn){
        echo "You are connected!<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Wlecome to Kakebook</h2>
        username:<br>
        <input type="text" name ="username"><br>
        password:<br>
        <input type = "password" name = "password"><br>
        <input type ="submit" name ="submit">
    </form>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);

        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);


        if(empty(($username))) {
            echo "Please enter a username";
        }
        elseif(empty($password)) {
            echo "Please enter a password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash' )";
            try{
                mysqli_query($conn, $sql);
                echo"You are now registered";
            }
            catch(mysqli_sql_exception){
                echo "That username is taken";
                }
        }

    }
    mysqli_close($conn);

?>