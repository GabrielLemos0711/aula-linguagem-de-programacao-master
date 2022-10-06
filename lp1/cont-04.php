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
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $num3 = $num1 - $num2;

        echo "Resultado ",$num3 * $num3
    ?>
</body>
</html>