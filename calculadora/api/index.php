<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora Simples</h1>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Número 1" required>
            <input type="number" name="num2" placeholder="Número 2" required>
            <select name="operacao" required>
                <option value="">Selecione uma operação</option>
                <option value="add">Adicionar</option>
                <option value="sub">Subtrair</option>
                <option value="mul">Multiplicar</option>
                <option value="div">Dividir</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];
            $resultado = "";

            switch ($operacao) {
                case "add":
                    $resultado = $num1 + $num2;
                    break;
                case "sub":
                    $resultado = $num1 - $num2;
                    break;
                case "mul":
                    $resultado = $num1 * $num2;
                    break;
                case "div":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Erro: Divisão por zero!";
                    }
                    break;
                default:
                    $resultado = "Operação inválida.";
                    break;
            }
            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
