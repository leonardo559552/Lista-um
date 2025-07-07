<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Verificar Par ou Ímpar</title>
</head>
<body>
    <h2>Verificar se o número é par ou ímpar</h2>
    <form method="post" action="">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);

        if ($numero % 2 == 0) {
            echo "<p>O número $numero é <strong>par</strong>.</p>";
        } else {
            echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
        }
    }
    ?>
</body>
</html>