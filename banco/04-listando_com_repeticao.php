<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
<?php

   $dsn = 'mysql:host=localhost;dbname=php_escola';
   $usuario ='root';
   $senha = '';

   try{
    $conexao = new PDO($dsn, $usuario, $senha);

    $query='
    select * from tb_alunos    
    ';

    echo "<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
    </tr>";
    foreach($conexao->query($query) as $chave => $valor){
        echo
        "<tr>
        <td>".$valor["id"]."</td>
        <td>".$valor["nome"]."</td>
        <td>".$valor["email"]."</td>
        <td>".$valor["senha"]."</td>
    </tr>";
    }
    echo "</table>";
   } catch(PDOException $e){

   echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
   }

?>
    
</body>
</html>
