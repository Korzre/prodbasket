<?php
$base_url = "http://localhost/projetos/usando-bd/prod-crd/"; ?>

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

            <form method="POST" action="adicionar_action.php">
            <main class="content">
                <div class="menu">
                    <article class="">->!0=Inicio</article>
                    <article class="">->!1=Listar</article>
                    <article class="">->!2=Salvar</article>
                </div>

                <div class="container-form">
                    <article class="container-form-title">
                        salvar produtos
                    </article>

                    <div class="form-data">
                        <label for="">DESCRIÇÃO</label>
                        <input class="form-input1"
                            type="text"
                            maxlength="13"
                            name="descricao"
                        />
                    </div>

                    <div class="form-data">
                        <label for="">QTD</label>
                        <input
                            class="form-input2"
                            type="number"
                            min="0"
                            maxlength="13"
                            name="quantidade"
                        />
                    </div>

                    <div class="form-data">
                        <label for="">PREÇO</label>
                        <input class="form-input3"
                            type="text"
                            maxlength="13"
                            name="preco"
                        />
                    </div>
                </div>

                <div class="commands-salvar">
                    <article class="lag"><</article>
                        <input type="text" name="commands_" id="guide-search" class="input-search" />

                </div>
            </main>
            </form>

        </div>

        <script src="<?php echo $base_url; ?>/pages/redirect.js">
        </script>
    </body>
</html>
