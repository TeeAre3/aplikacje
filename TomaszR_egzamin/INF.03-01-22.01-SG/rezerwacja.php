<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="5INb2";

    $conn=mysqli_connect($servername, $username, $password, $dbName);
    if(!$conn){
        die("Error: ".mysqli_connect_error());
    }

    $data=$_POST["data"];
    $iloscOs=$_POST["iloscOs"];
    $tel=$_POST["tel"];
    

    $sql="INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ('$data', '$iloscOs', '$tel');";
    if(mysqli_query($conn, $sql)){
        echo "Dodano rezerwację do bazy";
    }else{
        echo "Error: ". mysqli_error();
    }
?>