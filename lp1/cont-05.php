<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercicio 5</h1>
    
    <hr>

    <?php 
        
    $soma = 0;

        for($num = $_POST["numero"];$num > 0;$num--){
            $soma = $soma + $num;
            echo $num;
            echo "<br>";
        }
        echo "Resultado = ",$soma;
    ?>
</body>
</html>