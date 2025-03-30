<?php
require ("config.php");

$descricao = filter_input(INPUT_POST, "descricao");
$preco = filter_input(INPUT_POST, "preco");
$qtd = filter_input(INPUT_POST, "quantidade");
$id = filter_input(INPUT_POST, "id");

if($id && $descricao && $qtd && $preco){
    $stmt = $pdo->prepare("UPDATE produtos SET descricao =:descricao,
                     preco=:preco, quantidade=:quantidade WHERE id=:id");

    $stmt -> bindValue(":descricao", $descricao);
    $stmt -> bindValue(":preco", $preco);
    $stmt -> bindValue(":quantidade", $qtd);
    $stmt -> bindValue(":id", $id);
    $stmt->execute();

    header("Location:listar.php");
    exit;
}else{
    header("Location:listar.php");
    exit;
}



?>
