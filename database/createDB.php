<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    //create connection
    $conn = mysqli_connect($servername, $username, $password,);
    //check connection
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected successfully";
    
    
    $database="5INb_gr2";
    // //create database
    // $sql="CREATE DATABASE $database";
    // if(mysqli_query($conn, $sql)){
    //     echo "Database created sucessfully";
    // }else{
    //     echo "Error creating database: ".mysqli_error($conn);
    // }
    // mysqli_close($conn);
    

    if(mysqli_select_db($conn, $database)){
        echo "Database $database connected<br>";
    }else{
        echo "Error select database: ".mysqli_error($conn);
    }


    // $sql = "CREATE TABLE MyGuests(
    //                             id INT(6) UNSIGNED AUTO_INCREMENT
    //                                 PRIMARY KEY,
    //                             firstname VARCHAR(30) NOT NULL,
    //                             lastname VARCHAR(30) NOT NULL,
    //                             email VARCHAR(50),
    //                             reg_date TIMESTAMP DEFAULT
    //                                     CURRENT_TIMESTAMP ON UPDATE
    //                                 CURRENT_TIMESTAMP
    //                             );";
    // if(mysqli_query($conn, $sql)){
    //     echo "Table MyGuests created successfully";
    // }else{
    //     echo "Error creating table: ".mysqli_error($conn);
    // }

    // $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com');";
    // $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES('Kamil', 'Slimak', 'kaml@slimak.com');";
    // $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES('Jan', 'Wiepsz', 'jan@wiepsz.com');";
    // if(mysqli_multi_query($conn, $sql)){
    //     echo "New record created successfully";
    // }else{
    //     echo "Error: ".$sql."?<br>".mysqli_error($conn);
    // }
    
    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);
    
    // if(mysqli_num_rows($result)>0){
    //     //output data of each row
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "id: ".$row["id"]. " - Name: ".$row["firstname"]. " ".$row["lastname"]. "<br>"; 
    //     }
    // }else{
    //     echo "0 results";
    // }

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result)>0){
    //     //output data of each row
    //     while($row=mysqli_fetch_row($result)){
    //         echo "id: ".$row[0]." - Name: ".$row[1]." ".$row[2]."<br>";
    //     }
    // }else{
    //     echo "0 results";
    // }

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result)>0){
    //     echo "<table>";
    //     while($row=mysqli_fetch_row($result)){
    //         echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    //     }
    //     echo "</table>";
    // }else{
    //     echo "0 results";
    // }

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result)>0){
    //     echo "<ul>";
    //     while($row=mysqli_fetch_row($result)){
    //         echo "<li>".$row[0]." ".$row[1]." ".$row[2]."</li>";
    //     }
    //     echo "</ul>";
    // }else{
    //     echo "0 results";
    // }

    $sql="DELETE FROM MyGuests WHERE id=3;";

    if(mysqli_query($conn,$sql)){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: ".mysqli_error($conn);
    }

    mysqli_close($conn);
?>