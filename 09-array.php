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
        $lista_frutas = array('banana', 'morango', 'uva', 'abacate'); 
       //$lista_frutas = ['banana', 'morango', 'uva', 'abacate'];
        
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';
        echo '<hr/>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '<hr/>';

        echo $lista_frutas[2];

        echo '<hr/>';

        $lista_frutas2 = array('a' => 'banana', 'b' => 'morango', 'c' => 'uva', 'd' => 'abacate' ); 

        echo '<pre>';
            var_dump($lista_frutas2);
        echo '<pre>';
        echo '<hr/>';
        echo '<pre>';
            print_r($lista_frutas2);
        echo '<hr/>';
        echo $lista_frutas2['b'];

    ?>
</body>
</html>