<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];
    $resultado = 0;

    switch ($operacao) {
        case "soma":
            $resultado = $num1 + $num2;
            break;
        case "subtracao":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacao":
            $resultado = $num1 * $num2;
            break;
        case "divisao":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Erro: Divisão por zero!";
            }
            break;
        default:
            $resultado = "Operação inválida!";
    }

    echo "<h2>Resultado: $resultado</h2>";
}
?>
