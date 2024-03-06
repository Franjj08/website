<?php
    $foods = array("apple", "orange", "banana", "cocount");

    array_push($foods,"pineapple");
    array_pop($foods);

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>