<?php

   $dsn = 'mysql:host=localhost;dbname=php_escola';
   $usuario ='root';
   $senha = '';

   try{
    $conexao = new PDO($dsn, $usuario, $senha);

    $query ='
    insert into tb_alunos(
        nome, email, senha
    )values (
        "Gabriel", "gabriellemos@gmail.com", "12345678"
        )';

     $conexao->exec($query);
    $query ='
    insert into tb_alunos(
        nome, email, senha
    )values (
        "Vitor", "Vitor@gmail.com", "12245678"
        )';

     $conexao->exec($query);
    $query ='
    insert into tb_alunos(
        nome, email, senha
    )values (
        "Jonatha", "Jonata@gmail.com", "13345678"
        )';

     $conexao->exec($query);

     $query = 'select * from tb_alunos';

     $stmt = $conexao->query($query);

     $lista = $stmt->fetchALL(PDO::FETCH_ASSOC);
     //$lista = $stmt->fetchALL(PDO::FETCH_NUM);
    // $lista = $stmt->fetchALL(PDO::FETCH_BOTH);
     
     echo '<pre>';
     print_r($lista);
     echo '</pre>';

     echo $lista[0]['nome'];

   } catch(PDOException $e){

   echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
   }

?>