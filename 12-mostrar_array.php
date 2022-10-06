<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $lista_carro = ["ford","chevrolet","renault","nissan","fiat"];

    echo'<pre>';
     print_r($lista_carro);
    echo'</pre>';

    echo'<pre>';
     var_dump($lista_carro);
    echo'</pre>';

    echo'</br>';
    
    echo"<h3>" . "mostrando me vetor array com o for", "<h3>";
    for($idx=0; $idx < count($lista_carro); $idx++){
        echo $lista_carro[$idx];
        echo'<hr/>';
    }

    echo'</br>';
    echo'</br>';

     echo"<h3>" . "mostrando me vetor array com WHILE", "<h3>";

     $idx = 0;

     while($idx < count($lista_carro)){
        echo $lista_carro[$idx];
        echo'<hr/>';
        $idx++;
    }

    $idx = 0;

    echo"<h3>" . "mostrando me vetor array DO WHILE", "<h3>";

    do{
        echo $lista_carro[$idx];
        echo'<hr/>';
        $idx++;
    }while($idx < count($lista_carro));

    echo'</br>';
    echo'</br>';

    echo"<h3>" . "mostrando me vetor array com foreach", "<h3>";
    foreach($lista_carro as $chave => $carro){
        echo $carro . "<br>";
    }
    ?>
</body>
</html>