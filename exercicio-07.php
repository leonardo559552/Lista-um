<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir divisores de um número</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_divisores"> Verificar se o número é perfeito:</label>
        <input type="number" name="numero_divisor" id="numero_divisor" required>
        <button type="submit" name="verificar_divisor">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_divisor'])){
            $numero = $_POST['numero_divisor'];
            $resultado = 0;
            for($i = 1; $i <= $numero; $i++){
                if($numero % $i === 0){
                   
                    $resultado = $resultado + $i;
                    
                }
            }
            echo $resultado;
        }
    }
    ?>
</body>
</html>