<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petla PHP</title>
</head>
<body>
    <?php
    //phpinfo();
    //
    //
    echo "<br>".rand(1,30)."<br>";
    echo "<br>";
    $a=10;
    echo ++$a."<br>";       // $x++ postinkermacja, ++$x preinkremacja
                            // $a-- postinkremacja, --$a predekrementacja
                            // zwiekszenie o 1, zmiejszenie o 1 wartosci zmiennej
    echo $a."<br>";
    for($i=1;$i<11;$i++)
    {
        if($i==5) continue;
        echo "$i ";
    }          
    ?>
    <hr>
    <?php
    $i=1;
    do
    {
        echo "$i ";
        $i++
        if($i==7) break;
    }while($i<11);

    echo "<br>";
    $i=1;
    while($i<11)
    {
        echo "$i ";
        $i++;
    }
    echo"<br>";
    $tablica=['a','b','c','d'];
    foreach($tablica as $klucz){
        echo "$klucz ";
    }
    echo "<br>";
    for($i=0;$i<sizeof($tablica);$i++)
    {
        echo $tablica[$i]." ";
    }
    echo "<br>";
    $liczby[1]=100;
    $liczby[20]=1200.9;
    $liczby[300]=2;
    //print_r($liczby);
    var_dump($liczby);
    echo "<br>";
    for($i=0;$i<301;$i++)
    {
        if(isset($liczby[$i])) echo $liczby[$i]." ";
    }
    ?>
</body>
</html>