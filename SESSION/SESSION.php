<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SESSION.php" method="post">
        username:<br>
        <input type="text" name = "username"><br>
        password:<br>
        <input type="password" name = "password"><br>
        <input type = "submit" name = "login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])) {
        

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            
            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";
            
            header("Location: home.php");//redirect to home.php
        }
        else {
            echo "Missing username/password<br>";
        }
    }
?>