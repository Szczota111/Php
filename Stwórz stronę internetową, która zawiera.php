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
        .zielony {
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
        $lewaLiczby = [];
        for ($i = 0; $i < 10; $i++) {
            $liczba = rand(1, 50);
            $lewaLiczby[] = $liczba;
            $kolor = ($liczba % 2 == 0) ? "zielony" : "czerwony";  // Parzyste = zielony, nieparzyste = czerwony
            echo "<span class='$kolor'>$liczba </span>";
        }
        ?>
    </div>

    <!-- Sekcja Środkowa -->
    <div class="sekcja">
        <h3>Sekcja Środkowa</h3>
        <?php
        $suma = array_sum($lewaLiczby);
        $srednia = $suma / count($lewaLiczby);  // Średnia liczb z sekcji lewej
        echo "<p>Średnia liczb z sekcji lewej: $srednia</p>";
        ?>
    </div>

    <!-- Sekcja Prawa -->
    <div class="sekcja">
        <h3>Sekcja Prawa</h3>
        <?php
        $prawaLiczba = rand(1, 50);
        $wystapienia = array_count_values($lewaLiczby)[$prawaLiczba] ?? 0;  // Sprawdzamy, ile razy liczba występuje w sekcji lewej

        echo "<p>Liczba wylosowana w sekcji prawej: $prawaLiczba</p>";
        echo "<p>Wystąpienia: $wystapienia</p>";

        // Porównanie z średnią
        if ($prawaLiczba > $srednia) {
            echo "<p>Liczba z sekcji prawej jest większa od średniej.</p>";
        } elseif ($prawaLiczba < $srednia) {
            echo "<p>Liczba z sekcji prawej jest mniejsza od średniej.</p>";
        } else {
            echo "<p>Liczba z sekcji prawej jest równa średniej.</p>";
        }
        ?>
    </div>

</body>
</html>
