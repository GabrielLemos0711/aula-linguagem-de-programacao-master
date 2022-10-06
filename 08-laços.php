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
        $num = 1;

        while ($num < 50){
            echo "$num <br/>";
            $num+=56;
        }

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        $num2 = 1;
        while(true){
            echo "$num2 <br/>";
            $num2+=5;

            if ($num2 > 100){
                break;
            }
        }

        $x = 10;

        do{
            echo 'entrou no do while';
        }while($x < 9);
        
        //for 
        /*for (variavel; condição; incremento){
            #codigo...
        }*/
            
        echo '<br/>';
        echo '<br/>';

        for ($x = 10; $x > 0; $x--){
            echo "$x <br/>";
        }
        
    ?>
</body>
</html>