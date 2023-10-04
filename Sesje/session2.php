<?php
    //session2.php
    session_start();

    echo "Welcome to page #2<br>";

    echo "Ulubiony kolor: ".$_SESSION["favColor"]. "<br>";
    echo "Ulubione zwierzę: ".$_SESSION["animal"]."<br>";
    echo date("Y m d H:i:s".$_SESSION["time"])."<br>";

    echo $_SESSION["bzdura"];

    echo '<br/><a href="session1.php">Page 1 </a>';
    echo '<br/><a href="session3.php">Page 3 </a>';

?>