<?php
    if(isset($_POST["vehicle1"])){
        echo "pierwszy checkbox: ".$_POST["vehicle1"]."<br>";
    }
    if(isset($_POST["vehicle2"])){
        echo "pierwszy checkbox: ".$_POST["vehicle2"]."<br>";
    }

    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database="5INb_gr2";

    $conn = mysqli_connect($servername, $username, $password,);

    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected successfully";
    
    
    if(mysqli_select_db($conn, $database)){
        echo "Database $database connected<br>";
    }else{
        echo "Error select database: ".mysqli_error($conn);
    }

    // $sql="ALTER TABLE MyGuests ADD vehicle varchar(30);";

    // if(mysqli_query($conn,$sql)){
    //     echo "Column added successfully";
    // }else{
    //     echo "Error adding column: ".mysqli_error($conn);
    // }
    

    mysqli_close($conn);
?>