<?php
    require('database.php');

    try {
        $id = '';
        if(isset($_GET['id'])){
            $id = $_GET;
        }
        $stmt = $conn->prepare("DELETE FROM producoes WHERE id = :id;");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();

        if($count == 1){
            $result["success"]["message"] = "Produção deletado com sucesso!";
        }else{
            $result["error"]["message"] = "ID $id não encontrado!";
        }

        header('content-type: text/json');
        echo json_encode($result);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>