<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Resultado</h3>
    <hr>
    <p>
        <?php print_r($_GET)?>
    </p>

    <br><br>

    <pre>
        <?php print_r($_GET)?>
    </pre>

    <?php
        $primeiro = $_GET["primeiro"];
        $segundo = $_GET["segundo"];

        echo "a soma dos dois numero é = ", $primeiro + $segundo;
        echo "<hr>";
        echo "a subtração dos dois numero é = ", $primeiro - $segundo;
        echo "<hr>";
        echo "a mutiplicação dos dois numero é = ", $primeiro * $segundo;
        echo "<hr>";
        echo "a divisão dos dois numero é = ", $primeiro / $segundo;
        echo "<hr>";
        ?>
</body>
</html>