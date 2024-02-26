<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operation) {
            case "plus":
                $result = $number1 + $number2;
                break;
            case "minus":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    echo "Nelze dělit nulou.";
                    exit();
                }
                break;
            default:
                echo "Neplatná operace.";
                exit();
        }

        echo "<div class='result'>Výsledek: $result</div>";
    } else {
        echo "<div class='error'>Zadejte platná čísla.</div>";
    }
}
?>
