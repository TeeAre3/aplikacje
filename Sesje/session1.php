<?php
    //session.php
    session_start();

    echo "Welcome to page #1";

    $_SESSION["favColor"] = "blue";
    $_SESSION["animal"] = "dog";
    $_SESSION["time"] = time();

    echo '<br/><a href="session2.php">Page 2 </a>';
    echo '<br/><a href="session3.php">Page 3 </a>';
?>