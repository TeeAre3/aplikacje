<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div id="baner">
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </div>
    <div id="lewy">
        <h3>Polecamy dzieła autorów:</h3>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="biblioteka1";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Error: ".mysqli_connect_error());
            }

            $sql="SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                echo "<ol>";
                while($row=mysqli_fetch_row($result)){
                    echo "<li>".$row[0]." ".$row[1]."</li>";
                }
                echo "</ol>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h3>ul. Czytelnicza 25, Książkowice&nbsp; Wielkie</h3>
        <p><a href="sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka.png" alt="książki">
    </div>
    <div id="prawy1">
        <h3>Dodaj czytelnika</h3>
        <form method="post">
            imię: <input type="text" name="imie" id="imie"><br>
            nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
            symbol: <input type="number" name="symbol" id="symbol"><br>
            <input type="submit" name="submit" id="submit" value="DODAJ">
        </form>
    </div>
    <div id="prawy2">
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="biblioteka1";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Error: ".mysqli_connect_error());
            }

            if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["symbol"])){
                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $symbol=$_POST["symbol"];
                
                $sql="INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$symbol');";
                if(mysqli_query($conn, $sql)){
                    echo "Czytelnik " . $imie . " " . $nazwisko . " został(a) dodany do bazy danych";
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        <p>Projekt strony: Tomasz Rezler</p>
    </div>
    
</body>
</html>