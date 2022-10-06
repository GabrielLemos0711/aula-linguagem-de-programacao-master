<?php

   // $conexao = new PDO('mysql:host=localhost;dbname=php_escola','root','');

   $dsn = 'mysql:host=localhost;dbname=php_escola';
   $usuario ='root';
   $senha = '';


   

   try{
    $conexao = new PDO($dsn, $usuario, $senha);
    echo "Conectado com Sucesso!";
   } catch(PDOException $e){
    /*echo'<pre>';
        print_r($e);
    echo'</pre>';*/
   
   echo 'Erro' . $e->getCode() . 'Mensagem' . $e->getMessage();
   }
?>