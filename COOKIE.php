<?php
    setcookie("fav_food", "pizza", time() - (86400*2),"/");

    foreach($_COOKIE as $key => $value) {
        echo "{$kry} = {$value}<br>";
    }
?>