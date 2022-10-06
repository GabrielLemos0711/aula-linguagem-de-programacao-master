<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    function exibirBoasVindas(){
        echo 'Bem vindo a todo!<br/>';
    }

    exibirBoasVindas();

    function calcularAreaterreno($largura, $comprimento){
    $area = $largura * $comprimento;
    return $area;
    }

    echo calcularAreaterreno (30,50);
    echo '<br/>';
    echo calcularAreaterreno (5, 20);
    echo '<br/>';

    $resultado = calcularAreaterreno (10, 5);
    echo $resultado;
    echo '<br/>';
    echo '<br/>';

    $texto = "disciplina de linguagem de programação";

    echo $texto. "<br>";
    echo "<br/>";
    echo strtolower($texto);
    echo "<br/>";
    echo strtoupper($texto);
    echo "<br/>";
    echo ucfirst($texto);
    echo "<br/>";
    echo strlen($texto);
    echo "<br/>";
    echo str_replace("LP1","LW2",$texto);
    echo "<br/>";
    echo substr($texto,0, 16);
    echo "<br/>";   
    echo "<br/>";

    $num = 4.3;

    echo ceil($num);
    echo "<br/>";
    echo floor($num);
    echo "<br/>";
    echo round($num);
    echo "<br/>";
    echo rand();
    echo "<br/>";
    echo rand(10, 20);
    echo "<br/>";
    echo sqrt(9);
    echo "<br/>";

    ?>
    

</body>
</html>