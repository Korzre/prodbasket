<?php
require "config.php";
/** @var PDO $pdo */
$base_url = "http://localhost/projetos/usando-bd/prod-crd/";

$list = [];
$stmt = $pdo->query("SELECT * FROM produtos");

if ($stmt->rowCount() > 0) {
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                        listar produtos
                    </article>



                    <div class="form-data1">
                        <?php if($stmt->rowCount()==0){
                            echo "Estoque vazio!";
                        }else{?>
                                <table class="styled-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DESCRIÇÃO</th>
                                            <th>QTD</th>
                                            <th>PREÇO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $prod): ?>
                                        <tr>
                                            <td><?= $prod["id"] ?></td>
                                            <td><?= $prod["descricao"] ?></td>
                                            <td><?= $prod["quantidade"] ?></td>
                                            <td><?= $prod["preco"] ?> </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        <?php }?>
                    </div>
                </div>

                <div class="commands-salvar">
                    <article class="lag">-></article>
                    <form method="POST" action="">
                        <input type="text" name="" id="guide-search" class="input-search" />
                    </form>
                </div>
            </main>
        </div>
        <script src="<?php echo $base_url; ?>/pages/redirect.js">
        </script>
    </body>
</html>
