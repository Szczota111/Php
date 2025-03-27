<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=baza_mysql_z_formularz.php method=post>
        marka<input type=text name=marka><br>
        cena<input type="number" name="cena"><br>
        kolor<input type="text" name="kolor"><br>
        rokprod<input type="number" name="rokprod"><br>
        <input type="submit" value="wyślij">
        <input type="reset" value="Czyść dane">
        </form>
        <?php
        if(isset($_POST["marka"]))
        {
            if(empty($_POST["marka"]) || empty($_POST["cena"]))
            {
                echo "Brak danych";
                exit();
            }
            else
            {
                $marka=$_POST["marka"];
                $cena=$_POST["cena"];
                $kolor=$_POST["kolor"];
                $rokprod=$_POST["rokprod"];
                
                $pol=mysqli_connect("localhost","root","","samochody");
                if(mysqli_connect_Errno())
                {
                    echo "UWAGA:".mysqli_connect_error();
                    exit();
                }
                $z="INSERT INTO auta(marka,cena,kolor,rokprod) values ('$marka', $cena, '$kolor', $rokprod)";
                //echo $z;
                $w=mysqli_query($pol,$z);
                mysqli_close($pol);
                //header("Location: baza_mysqli_z_formularz.php");
            }
        }
        ?>
</body>
</html>