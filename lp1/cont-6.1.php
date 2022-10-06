<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>dados salvos:</h3>
    <?php
    $nome_aluno = $_POST["nome_aluno"] ;
    $idade_aluno = $_POST["idade_aluno"];
    $media_aluno = $_POST["media_aluno"];

    for($idx = 0; $idx < count($nome_aluno); $idx++){

    

    echo "nome do aluno: " . $nome_aluno[$idx];
    echo "<br/>";
    echo "Idade: " . $idade_aluno[$idx];
    echo "<br/>";
    echo "media: " . $media_aluno[$idx];
    echo"<hr>";
}
    ?>
</body>
</html>