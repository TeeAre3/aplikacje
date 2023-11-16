<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>  
    <div id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </div>
    <div id="lewy">
        <h2>Taniej o 30%</h2>
        <ol>
            <li></li>
            <li></li>
            <li></li>
        </ol>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="sklep";

            $conn=(mysqli_connect($servername, $username, $password, $database));
            if(!$conn){
                die("error: ". mysqli_connect_error())
            }

            $sql="SELECT nazwa FROM towary WHERE promocja=1;";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_row($result)){
                    echo "<li>".$row[0]."</li>"
                }
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form method="post">
            <select name="" id="">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60szt.">Pisaki 60szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <input type="submit" id="submit" value="SPRAWDŹ">
        </form>
        <div id="skrypt2"></div>
    </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>
    <div id="stopka">
        <h4>Autor strony: Tomasz Rezler</h4>
    </div>
    
</body>
</html>