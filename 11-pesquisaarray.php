<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Função in_array</h3>
    <?php
        $lista_frutas = ['banana', 'morango', 'uva', 'abacate'];

        echo "<pre>";
            print_r($lista_frutas);
        echo "<pre/>";

        $existe = in_array('morango', $lista_frutas);
        //echo $existe;
        
        if ($existe){
            echo "sim, o valor pesquisado existe no array";
        } else {
            echo "nao, o valor pesquisado nao existe no array";
        }
        echo '<hr>';
        ?>
        
        <h3>Função array_search</h3>

        <?php
        $lista_frutas2 = ['banana', 'morango', 'uva', 'abacate'];

        echo "<pre>";
            print_r($lista_frutas2);
        echo "<pre/>";

        $existe2 = array_search('abacate', $lista_frutas2);

        if ($existe2 != null){
            echo "sim, o valor pesquisado existe no array";
        } else {
            echo "nao, o valor pesquisado nao existe no array";
        }
        echo '<hr>';
        ?>
</body>
</html>