<?php
    $fname=$_POST["fname"];
    $surname=$_POST["surname"];
    $favLanguage=$_POST["favLanguage"];
    
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database="5INb_gr2";

    $conn = mysqli_connect($servername, $username, $password,);

    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    if(mysqli_select_db($conn, $database)){
        echo "Database $database connected<br>";
    }else{
        echo "Error select database: ".mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuests(firstname, lastname, favLanguage) VALUES ('$fname', '$surname','$favLanguage');";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sql."?<br>".mysqli_error($conn);
    }
?>