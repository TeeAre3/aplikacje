<?php
    echo "Welcome ".$_POST["fname"]." ".$_POST["surname"]."<br>"; 
    echo "Your email address is: ".$_POST["email"]."<br>";
    
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    //create connection
    $conn = mysqli_connect($servername, $username, $password,);
    //check connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    $database="5INb_gr2";

    if(mysqli_select_db($conn, $database)){
        echo "Database $database connected<br>";
    }else{
        echo "Error select database: ".mysqli_error($conn);
    }

    $fname = $_GET["fname"];
    $surname = $_GET["surname"];
    $email = $_GET["email"];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('$fname', '$surname', '$email');";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sql."?<br>".mysqli_error($conn);
    }
?>