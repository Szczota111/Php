<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losowanie Liczb</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 50px;
        }
        .sekcja {
            border: 1px solid #333;
            padding: 20px;
            text-align: center;
            width: 30%;
        }
        .z {
            color: green;
        }
        .czerwony {
            color: red;
        }
    </style>
</head>
<body>
    <!-- Sekcja Lewa -->
    <div class="sekcja">
        <h3>Sekcja Lewa</h3>
        <?php
        $lewaLiczba = rand(1, 100);
        echo "<p>Liczba: $lewaLiczba</p>";
        ?>
    </div>

    <!-- Sekcja Środkowa -->
    <div class="sekcja">
        <h3>Sekcja Środkowa</h3>
        <?php
        $srodkoweLiczby = [];
        for ($i = 0; $i < 100; $i++) {
            $liczba = rand(1, 100);
            $srodkoweLiczby[] = $liczba;
            $kolor = $liczba > 20 ? "z" : "czerwony";
            echo "<span class='$kolor'>$liczba </span>";
        }
        ?>
    </div>

    <!-- Sekcja Prawa -->
    <div class="sekcja">
        <h3>Sekcja Prawa</h3>
        <?php
        $prawaLiczba = rand(1, 100);
        $liczbaWystapien = array_count_values($srodkoweLiczby)[$prawaLiczba] ?? 0;
        echo "<p>Liczba: $prawaLiczba</p>";
        echo "<p>Wystąpienia: $liczbaWystapien</p>";
        ?>
    </div>
</body>
</html>
