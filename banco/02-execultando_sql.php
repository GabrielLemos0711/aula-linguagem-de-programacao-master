<?php

   $dsn = 'mysql:host=localhost;dbname=php_escola';
   $usuario ='root';
   $senha = '';

   try{
    $conexao = new PDO($dsn, $usuario, $senha);
/*    
    $query = '
        create table tb_alunos(
            id int not null primary key auto_increment,
            nome varchar (50) not null,
            email varchar (50) not null,
            senha varchar (30) not null
        )
    ';

    $retorno = $conexao->exec($query);
    echo $retorno;
*/
    /*$query ='
    insert into tb_alunos(
        nome, email, senha
    )values (
        "Gabriel", "gabriellemos@gmail.com", "12345678"
        )';

        $retorno = $conexao->exec($query);
        echo $retorno;*/
    
        $query = '
        delete from tb_alunos';
        $retorno = $conexao->exec($query);
        echo $retorno;

   } catch(PDOException $e){

   echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
   }

?>