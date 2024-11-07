
sa dwie sekcje w sekcji gornej losujemy 100 liczb w zakresei od 1 do 5 a w dolnej wyswietlamy zostala wylosowana dana liczba 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            border: 1px solid;
            padding: 10px;
            max-height: 100px;
            
        }
        </style>
</head>
<body>
    <section>
        <?php
        $l1 = 0;
        $l2 = 0;
        $l3 = 0;
        $l4 = 0;
        $l5 = 0;
        for($i=0;$i < 100; $i++) {
            $liczby[] = rand(1,5);
            echo $liczby[$i]. ", ";



            if ($liczby[$i] == 1){
                $l1++;
            }
                 

            else if ($liczby[$i] == 2){
                $l2++;
            }
            else if ($liczby[$i] == 3){
                $l3++;
            }
            else if ($liczby[$i] == 4){
                $l4++;
            }
            else if ($liczby[$i] == 5){
                $l5++;
            }
            

        }
       
        
            
        ?>
        </section>
        <section>
            <?php
            echo "liczba 1 = $l1 <br>";
            echo "liczba 2 = $l2 <br>";
            echo "liczba 3 = $l3 <br>";
            echo "liczba 4 = $l4 <br>";
            echo "liczba 5 = $l5 <br>";
            ?>
        </section>
</body>
</html>