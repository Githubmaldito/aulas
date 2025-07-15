<?php
$resultado = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $operacao = $_POST['operacao'] ?? '';

    if (is_numeric($num1) && is_numeric($num2)) {
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        switch ($operacao) {
            case '+':
                $resultado = "$num1 + $num2 = " . ($num1 + $num2);
                break;
            case '-':
                $resultado = "$num1 - $num2 = " . ($num1 - $num2);
                break;
            case '*':
                $resultado = "$num1 × $num2 = " . ($num1 * $num2);
                break;
            case '/':
                if ($num2 == 0) {
                    $erro = "Erro: Divisão por zero!";
                } else {
                    $resultado = "$num1 ÷ $num2 = " . ($num1 / $num2);
                }
                break;
            default:
                $erro = "Selecione uma operação válida!";
        }
    } else {
        $erro = "Digite números válidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP Web</title>
    <style>
        .container { max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        .btn { width: 100%; padding: 10px; margin: 5px 0; }
        .result { margin-top: 20px; padding: 10px; background: #f0f0f0; border-radius: 5px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora Web</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="Primeiro número" step="any" required class="btn">
            <input type="number" name="num2" placeholder="Segundo número" step="any" required class="btn">
            
            <select name="operacao" required class="btn">
                <option value="">-- Selecione a operação --</option>
                <option value="+">Adição (+)</option>
                <option value="-">Subtração (-)</option>
                <option value="*">Multiplicação (×)</option>
                <option value="/">Divisão (÷)</option>
            </select>
            
            <button type="submit" class="btn">Calcular</button>
        </form>

        <?php if ($resultado): ?>
            <div class="result">
                <h3>Resultado:</h3>
                <p><?= $resultado ?></p>
            </div>
        <?php endif; ?>

        <?php if ($erro): ?>
            <div class="error">
                <p><?= $erro ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>