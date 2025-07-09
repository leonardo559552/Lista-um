<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contar números pares</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_divisor">Digite um número:</label>
        <input type="number" name="numero_divisor" id="numero_divisor" required>
        <button type="submit" name="verificar_divisor">Contar pares</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_divisor'])){
            $numero = intval($_POST['numero_divisor']);
            $par_count = 0; 
            
            for($i = 1; $i <= $numero; $i++){
                if($i % 2 === 0){
                    $par_count++;
                }
            }
            echo "Existem $par_count números pares entre 1 e $numero.";
        }
    }
    ?>
</body>
</html>