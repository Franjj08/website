<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKBOXES</title>
</head>
<body>
    <form action="CHECKBOXES.php" method="post">
        <input type="checkbox" name = "foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name = "foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name = "foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name = "foods[]" value="Taco">Taco<br>
        <input type="submit" name = "submit"value = "Submit">
    </form>
</body>
</html>

<?php
    // if(isset($_POST["submit"])){
    //     if(isset($_POST["pizza"])){
    //         echo"You like pizza!<br>";
    //     }
    //     if(isset($_POST["hamburguesa"])){
    //         echo"You like hamburguesa!<br>";
    //     }
    //     if(isset($_POST["hotdog"])){
    //         echo"You like hotdog!<br>";
    //     }
    //     if(isset($_POST["taco"])){
    //         echo"You like taco!<br>";
    //     }
    //     if(empty($_POST["pizza"])){
    //         echo"You DON'T like pizza!<br>";
    //     }
    //     if(empty($_POST["hamburge"])){
    //         echo"You DON'T like hamburge!<br>";
    //     }
    //     if(empty($_POST["hotdog"])){
    //         echo"You DON'T like hotdog!<br>";
    //     }
    //     if(empty($_POST["taco"])){
    //         echo"You DON'T like taco!<br>";
    //     }
    // }
    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        foreach($foods as $food){
            echo "{$food} <br>";
        }
    }
?>