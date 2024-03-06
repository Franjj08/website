<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>x: </label>
        <input type="text" name="x" ><br>

        <label>y: </label>
        <input type="text" name="y" ><br>
        <input type="submit" value="total"><br>
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;

    // $total = abs($x);
    $total = max($x,$y);

    echo "Your total is:{$total}";
?>