skrypt losuje liczbe n wyswietla sie w 3 sekcji potem losujemy n liczb z zakresu (1,20), nastepnie liczymi sume tyvh liczb srednia i odklenie standardowe 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            padding: 10px;
            border: 1px black solid;
            min-height: 100px

        }
        </style>
</head>
<body>
    <section><?php
$n=rand(1,100);
echo $n;
$liczby = [];
for($i = 0; $i < $n; $i++) {
    $liczby[] = rand(1,50);
}
$a = $suma / $n;


?></section>
    <section><?php
    $suma = array_sum($liczby);
    echo "liczba n: $n\n";
    echo "wylosowane liczby: \n" . implode(",",$liczby);
    echo "suma: $suma \n" ;
    echo "sredmia $liczby\n";
    echo "odchylenie: \n"
    ?></section>

</body>
</html>