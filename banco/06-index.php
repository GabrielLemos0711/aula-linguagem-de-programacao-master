<?php
    if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        
        $dsn = 'mysql:host=localhost;dbname=php_escola';
        $usuario ='root';
        $senha = '';

        try{
            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_alunos where ";
            $query .= " email = '{$_POST['usuario']}'";
            $query .= " AND senha = '{$_POST['senha']}'";

            echo $query;

            $stmt = $conexao->query($query);

            $usuario = $stmt->fetch();

           // echo '<hr>';

            //echo '<pre>';
              //  print_r($usuario);
            //echo '</pre>';
           }
           catch(PDOException $e){
               echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
            }
           }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>
<body>
    <form method="post" action="06-index.php">
        <input type="text" placeholder="usuario" name="usuario" >
        <br>
        <br>
        <input type="password" placeholder="senha" name="senha" >
        <br>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>