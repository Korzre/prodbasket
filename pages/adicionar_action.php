<?php
require "config.php";
/** @var PDO $pdo */

$descr = filter_input(INPUT_POST, "descricao");
$qtd = filter_input(INPUT_POST, "quantidade");
$preco = filter_input(INPUT_POST, "preco");

if ($descr && $qtd && $preco) {
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE descricao=:descricao");
    $stmt->bindValue(":descricao", $descr);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        $stmt = $pdo->prepare(
            "INSERT INTO produtos (descricao, preco, quantidade) VALUES (:descricao, :preco, :quantidade)"
        );

        $stmt->bindValue(":descricao", $descr);
        $stmt->bindValue(":quantidade", $qtd);
        $stmt->bindValue(":preco", $preco);

        $stmt->execute();

        header("Location:listar.php");
        exit();
    } else {
        header("Location:salvar.php");
        exit();
    }
} else {
    header("Location:salvar.php");
    exit();
}

?>
