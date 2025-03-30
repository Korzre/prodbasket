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
                src="<?php echo $base_url; ?>/image/tela-macintosh-save.png"
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

                <div class="container-logo">
                    <img
                        src="<?php echo $base_url; ?>image/logo-prod.svg"
                        width="250px"
                        height="250px"
                        alt="error image"
                    />
                    <article class="logo-text">PRODBasket</article>
                </div>

                <div class="commands-index">
                    <article class="lag">-></article>
                    <form method="POST" action="salvar.php">
                        <input class="input-search" type="text" name="" id="guide-search" />
                    </form>
                </div>
            </main>
        </div>

        <script src="<?php echo $base_url; ?>/pages/redirect.js">
        </script>
    </body>
</html>
