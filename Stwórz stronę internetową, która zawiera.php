<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
table{
    border-collapse: collapse;
    width: auto;
}
td, th{
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}
.zolty{
    background-color: yellow;
}
</style>
</head>
<body>
<?php
$a = rand(1, 100); 
$b = rand($a + 1, 100);

function f1($x) {
    return 2 * $x + 1;
}
function f2($x) {
    return $x * $x;
}

echo "<h3>Wartości funkcji dla przedziału od $a do $b:</h3>";
echo "<table>";

// Nagłówki kolumn
echo "<tr>";
echo "<th>x</th>";
for ($x = $a; $x <= $b; $x++) {
    echo "<th>$x</th>";
}
echo "</tr>";

// Wiersz f1(x)
echo "<tr>";
echo "<td>f1(x)</td>";
for ($x = $a; $x <= $b; $x++) {
    $l1 = f1($x);
    $l2 = f2($x);
    $class = $l1 > $l2 ? 'zolty' : '';
    echo "<td class='$class'>$l1</td>";
}
echo "</tr>";

// Wiersz f2(x)
echo "<tr>";
echo "<td>f2(x)</td>";
for ($x = $a; $x <= $b; $x++) {
    $l1 = f1($x);
    $l2 = f2($x);
    $class = $l2 > $l1 ? 'zolty' : '';
    echo "<td class='$class'>$l2</td>";
}
echo "</tr>";

echo "</table>";
?>
</body>
</html>