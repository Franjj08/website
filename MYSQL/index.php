<?php
    //include("database.php");

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

    // $sql = "INSERT INTO users (user, password)
    //         VALUES ('Spongebob', 'pineapple1')";
    

    $sql = "SELECT * FROM users WHERE user = 'FRAN'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);//row is an object
        echo $row["user"] . "br";
    }
    else{
        echo "No user found";
    }

    mysqli_close($conn);

    // $username  = "Squidward";
    // $password = "clarinet2";
    // $hash = password_hash($password, PASSWORD_DEFAULT)

    // $sql = "INSERT INTO users (user, password)
    //         VALUES ('$username', $password)";

    // try{
    //     mysqli_query($conn, $sql);
    //     echo"User is now registrered";
    // }

    // catch(mysqli_sql_exception $e){
    //     echo" Could not register user";
    // }

    // mysqli_close($conn);


?>

