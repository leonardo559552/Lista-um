<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Verificação de Números Amigos</title>
</head>
<body>
    <h1>Verificar se dois números formam um número amigo</h1>
    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = (int) $_POST['numero1'];
        $num2 = (int) $_POST['numero2'];

        
        function soma_divisores($n) {
            $soma = 0;
            for ($i = 1; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        
        $soma1 = soma_divisores($num1);
        $soma2 = soma_divisores($num2);

        
        if ($soma1 == $num2 && $soma2 == $num1) {
            echo "<p>Os números $num1 e $num2 <strong>são números amigos</strong>.</p>";
        } else {
            echo "<p>Os números $num1 e $num2 <strong>não são números amigos</strong>.</p>";
        }

        
        echo "<p>Soma dos divisores de $num1: $soma1</p>";
        echo "<p>Soma dos divisores de $num2: $soma2</p>";
    }
    ?>
</body>
</html>