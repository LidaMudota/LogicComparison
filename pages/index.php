<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы истинности и сравнения в PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Таблица истинности для логических операций</h2>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <?php
            for ($a = 0; $a <= 1; $a++) {
                for ($b = 0; $b <= 1; $b++) {
                    $notA = (int)!$a;
                    $orAB = (int)($a || $b);
                    $andAB = (int)($a && $b);
                    $xorAB = (int)($a xor $b);

                    echo "<tr>";
                    echo "<td>$a</td>";
                    echo "<td>$b</td>";
                    echo "<td>$notA</td>";
                    echo "<td>$orAB</td>";
                    echo "<td>$andAB</td>";
                    echo "<td>$xorAB</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>

    <h2>Таблицы сравнения в PHP</h2>

    <h3>Гибкое сравнение (==)</h3>
    <table>
        <tr>
            <th>X\Y</th>
            <?php
                $headers = ['true', 'false', '1', '0', '-1', '"1"', 'null', '"php"'];
                foreach ($headers as $header) {
                    echo "<th>$header</th>";
                }
            ?>
        </tr>
        <?php
            $values = [true, false, 1, 0, -1, "1", null, "php"];
            foreach ($values as $x) {
                echo "<tr>";
                echo "<th>";
                var_export($x);
                echo "</th>";
                foreach ($values as $y) {
                    echo "<td>";
                    var_export($x == $y);
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h3>Жёсткое сравнение (===)</h3>
    <table>
        <tr>
            <th>X\Y</th>
            <?php
                foreach ($headers as $header) {
                    echo "<th>$header</th>";
                }
            ?>
        </tr>
        <?php
            foreach ($values as $x) {
                echo "<tr>";
                echo "<th>";
                var_export($x);
                echo "</th>";
                foreach ($values as $y) {
                    echo "<td>";
                    var_export($x === $y);
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h3>Выводы о сравнении в PHP</h3>
    <p>Гибкое сравнение (==) сравнивает значения, приводя их к одному типу, если они разного типа. Например, строка "1" будет равна числу 1 при гибком сравнении.</p>
    <p>Жёсткое сравнение (===) сравнивает как значения, так и типы. Например, строка "1" не будет равна числу 1 при жестком сравнении.</p>
</body>
</html>