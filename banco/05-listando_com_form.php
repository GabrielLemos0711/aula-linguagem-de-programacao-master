<!DOCTYPE html>
<html lang="pt-br">
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
        <form method="post" action="05-listando_com_form.php">
            id: <input type="text" placeholder="Digite aqui..." name="id">
            <br>
            <br>
            Nome: <input type="text" placeholder="Digite aqui..." name="nome">
            <br>
            <br>
            Email: <input type="text" placeholder="Digite aqui..." name="email">
            <br>
            <br>
            Senha: <input type="text" placeholder="Digite aqui..." name="senha">
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>
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

        if (!empty($_POST["id"])){
            if ($_POST['id'] == $valor['id']){
                //$query = "UPDATE tb_alunos SET nome = '{$_POST['nome']}',
                // email ='{$_POST['email']}',
                //senha ='{$_POST['senha']}'
                // WHERE id = '{$valor["id"]}'";
                $query = "DELETE FROM tb_alunos WHERE id='{$valor["id"]}'";
                $conexao->query($query);
            }
        }

        echo
        "<tr>
            <td>".$valor["id"]."</td>
            <td>".$valor["nome"]."</td>
            <td>".$valor["email"]."</td>
            <td>".$valor["senha"]."</td>
        </tr>";
    }
    if (!empty($_POST['nome']) && !empty($_POST1['email']) && !empty($_POST['nome'])) {
        $query = "
        insert into tb_alunos(
            nome, email, senha
            )values(
                '{$_POST['nome']}', '{$_POST['email']}','{$_POST['senha']}'
            )
        ";
        $conexao->query($query);
    }
    echo "</table>";
}
    catch(PDOException $e){

   echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
   }

   
   ?>
   <a href="05-listando_com_form.php">Atualizar lista</a>
    
</body>
</html>
