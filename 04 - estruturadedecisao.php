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
    /*
    operadores condicionais/de comparacao:
    ==
    ===
    ! = ou <>
    ! ==
    <
    >
    <= 
    >=

    operadores logicos
    E: && ou AND
    ou: || ou or
    ou exclusivo: xor
    Negação: !
    */
        if (true){
            echo "Verdedeiro";
        }else {
            echo "Falso";
        }
        
        
        echo "<br/>";
        echo "<br/>";

        if (4=='4'){
            echo "Verdedeiro";
        }else {
            echo "Falso";
        }
        echo "<br/>";
        echo "<br/>";

        if (3==3 && 10>3){
            echo "Verdedeiro";
        }else {
            echo "Falso";
        }
        echo "<br/>";
        echo "<br/>";

        if (!('a' == 'b')){
            echo "Verdedeiro";
        }else {
            echo "Falso";
        }
        echo "<br/>";
        echo "<br/>";

        $parametro = 1;

        switch ($parametro){
            case '1':
                echo 'Entrou na casa 1';
                break;
            case '2':
                echo 'Entrou na casa 2';
                break;
            case '3':
                echo 'Entrou na casa 3';
                break;
            
            default:
                echo 'Entrou no case default';
                break;
        }

        
    ?>
</body>
</html>