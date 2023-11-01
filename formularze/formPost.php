<?php
    echo "Welcome ".$_POST["fname"]." ".$_POST["surname"]."<br>"; 
    echo "Your email address is: ".$_POST["email"]."<br>";
    
    $servername = "localhost";
    $username = "root"; 
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

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

    $fname = $_POST["fname"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

    if(isset($_POST["vehicle1"])){
        $vehicle1=$_POST["vehicle1"];
    }else{
        $vehicle1=NULL;//niekoniecznie poprawnie
    }
    
    if(isset($_POST["vehicle2"])){
        $vehicle2=$_POST["vehicle2"];
    }else{
        $vehicle2=NULL;//niekoniecznie poprawnie
    }
   
    // $sql="ALTER TABLE MyGuests ADD vehicle1 varchar(30);";
    // $sql.="ALTER TABLE MyGuests ADD vehicle2 varchar(30);";

    // if(mysqli_multi_query($conn,$sql)){
    //     echo "Column added successfully";
    // }else{
    //     echo "Error adding column: ".mysqli_error($conn);
    // }

    // $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('$fname', '$surname', '$email');";
    // if(mysqli_query($conn, $sql)){
    //     echo "New record created successfully";
    // }else{
    //     echo "Error: ".$sql."?<br>".mysqli_error($conn);
    // }

    $sql = "UPDATE MyGuests SET vehicle1='$vehicle1', vehicle2='$vehicle2' WHERE firstname='$fname' AND lastname='$surname' AND email='$email';";
    if(mysqli_query($conn, $sql)){
        echo "Update successful";
    }else{
        echo "Update failed: ".mysqli_error($conn);
    }
?>
