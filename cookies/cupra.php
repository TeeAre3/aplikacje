<?php
    setcookie("auto", "cupra",time()+86400*2);

    $cookie_name = "auto";
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named '". $cookie_name. "' is not set!";
    } else{
        echo "Cookie '". $cookie_name. "' is set!<br>";
        echo "Value is: ". $_COOKIE[$cookie_name];
    }
?>