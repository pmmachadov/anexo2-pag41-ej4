<?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero >= 1 && $numero <= 10) {
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$numero</td>";
                echo "<td>x</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>" . $numero * $i . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>El numero debe estar entre 1 y 10</p>";
        }
    }
    ?>