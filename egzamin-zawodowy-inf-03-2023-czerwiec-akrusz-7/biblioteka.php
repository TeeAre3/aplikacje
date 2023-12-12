<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="baner">
        <h1>Biblioteka w Księżkowicach Małych</h1>
    </div>
    <div id="lewy">
        <h4>Dodaj czytelnika</h4>
        <form method="post">
            <label for="imie">imie: </label>
            <input type="text" name="imie" id="imie"><br>
            <label for="nazwisko">nazwisko: </label>
            <input type="text" name="nazwisko" id="nazwisko"><br>
            <label for="symbol">symbol: </label>
            <input type="number" name="symbol" id="symbol"><br>
            <input type="submit" value="AKCEPTUJ"><br>
        </form>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="biblioteka";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Error: ". mysqli_connect_error());
            }
            if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["symbol"])){

                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $symbol=$_POST["symbol"];
                
                $sql="INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$symbol');";
                if(mysqli_query($conn, $sql)){
                    echo "Dodano czytelnika ". $imie . " " . $nazwisko;
                }else{
                    echo "Error: ". mysqli_error();
                }
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników 15&nbsp; Książkowice Małe</h6>
        <p><a href="biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
    </div>
    <div id="prawy">
        <h4>Nasi czytelnicy:</h4>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="biblioteka";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Error: ". mysqli_connect_error());
            }

            $sql="SELECT imie, nazwisko FROM czytelnicy ORDER BY nazwisko ASC;";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                echo "<ol>";
                while($row=mysqli_fetch_row($result)){
                    echo "<li>". $row[0] ." ". $row[1] . "</li>";
                }
                echo "</ol>";
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        <p>Projekt witryny: Tomasz Rezler</p>
    </div>
</body>
</html>