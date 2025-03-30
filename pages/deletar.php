<?php
require "config.php";
/** @var PDO $pdo */
$base_url = "http://localhost/projetos/usando-bd/prod-crd/";

$info=[];
$id = filter_input(INPUT_GET, "id");
$confirmar = filter_input(INPUT_GET, "confirmar");

if($id){
    $stmt = $pdo->prepare("select id, descricao from produtos where id=:id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();


    if ($stmt->rowCount()>0){
        $info = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($confirmar==1){
            $stmt = $pdo->prepare("delete from produtos where id=:id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            header("Location: listar.php");
            exit();
        }


    }else{
        header("Location:listar.php");
        exit;
    }
}


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo $base_url; ?>style.css" />
    </head>
    <body>
        <div class="container">
            <img
                src="<?php echo $base_url; ?>image/tela-macintosh-save.png"
                width="1017px"
                height="655px"
                alt="404"
            />

            <main class="content">
                <div class="menu">
                    <article class="">->!0=Inicio</article>
                    <article class="">->!1=Listar</article>
                    <article class="">->!2=Salvar</article>
                </div>

                <div class="container-form">
                    <article class="container-form-title">
                        Apagando <?=$info["descricao"];?>...
                    </article>

        <script>
            setTimeout(function(){
                window.location.href =
                "deletar.php?id=<?php echo $id;?>&confirmar=1"
                }, 2500)
        </script>

        <script src="<?php echo $base_url; ?>/pages/redirect.js">
        </script>
    </body>
</html>
