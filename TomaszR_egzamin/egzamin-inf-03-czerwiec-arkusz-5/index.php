<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div>
    <div id="lewy">
        <h2>Nasze ceny</h2>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="sklep2";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die('Error: '. mysqli_connect_error());
            }

            $sql="SELECT nazwa, cena FROM towary LIMIT 4;";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                echo "<table>";
                while($row=mysqli_fetch_row($result)){
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
                }
                echo "</table>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h2>Koszt zakupów</h2>
        <form method="post">
            wybierz artykuł:
            <select name="lista" id="lista">
                <option name="zeszyt60">Zeszyt 60 kartek</option>
                <option name="zeszyt32">Zeszyt 32 kartki</option>
                <option name="cyrkiel">Cyrkiel</option>
                <option name="linijka"> Linijka 30 cm</option>
            </select><br>
            Liczba sztuk: <input type="number" name="ile" id="ile"><br>
            <input type="submit"  id="submit" value="OBLICZ">
        </form>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="sklep2";

            $conn=mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die('Error: '. mysqli_connect_error());
            }

            if(isset($_POST['lista']) && isset($_POST['ile'])){
                $choice=$_POST['lista'];
                $ile=$_POST['ile'];
                
                $sql="SELECT cena FROM towary WHERE nazwa='$choice' ;";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_row($result);
                    echo "wartość zakupów: ". $row[0]*$ile;
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </div>
    <div id="stopka">
        <h4>Witrynę wykonał: Tomasz Rezler</h4>
    </div>
</body>
</html>