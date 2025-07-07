<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer tabuada</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_par">Insira o numero:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="verificar_tabu">Verificar</button>
    </form> 

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_tabu'])) {
            $numero = $_POST['numero_tabuada'];
            for ($i = 1; $i <= 10; $i++){
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado <br>";
            }
        }
    }


    ?>

</body>

</html>