<?php
    //session3.php
    session_start();

    echo "Welcome to page #3<br>";

    unset($_SESSION["animal"]);

    echo "Ulubione zwierzę: ".$_SESSION["animal"]."<br>";

    echo '<br/><a href="session1.php">Page 1 </a>';
    echo '<br/><a href="session2.php">Page 2 </a>';

    $_SESSION = array();
    session_destroy(); 
?>