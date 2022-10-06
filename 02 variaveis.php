<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>

    <?php 
        //string
        $nome = "Gabriel Lemos";

        //int
        $idade = 19;

        //floar
        $peso = 80;

        //boolean
        $fumante_sn = false;

        
        $idade = "29";
    ?>

    <h1>ficha cadastral</h1>
    <br>
    <p>Nome: <?php echo $nome?></p>
    <p>Idade: <?php echo $idade?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>