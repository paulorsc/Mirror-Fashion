<?php
  $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
  $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
  $produto = mysqli_fetch_array($dados);
?>


    <DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <!-- Tag que faz ignorar um comportamento antigo em que os mobiles "enganavam" os navegadores passando a eles uma resolucao
        maior do que a nativa de fato.
        Çom essa tag, o navegador descobre a resolucao correto do dispositivo-->
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>Mirror Fashion</title>
            <link rel="stylesheet" href="css/reset.css">
            <link rel="stylesheet" href="css/estilos.css">
            <!-- So importa o mobile.css se a resolucao for ate 939px -->
            <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
            <link rel="stylesheet" href="css/produto.css">

            <!-- Compatibilidade com IE --!>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        </head>

        <body>
            <?php include("cabecalho.php"); ?>

                <div class="produto-back">

                    <div class="container">

                        <div class="produto">
                            <h1><?= $produto["nome"] ?></h1>
                            <p>por apenas
                                <?= $produto["preco"] ?>
                            </p>
                            <form action="checkout.php" method="post">
                              <!--  <input type="hidden" name="nome" value="<?= $produto["nome"] ?>">
                                <input type="hidden" name="preco" value="<?= $produto["preco"] ?>">-->
                                <input type="hidden" name="id" value="<?= $produto["id"] ?>">
                                <fieldset class="cores">
                                    <legend>Escolha a cor:</legend>
                                    <input type="radio" name="cor" value="verde" id="verde" checked>
                                    <label for="verde">
                                        <!--<img src="img/produtos/foto2-verde.png" alt="verde">-->
                                        <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png">
                                    </label>

                                    <input type="radio" name="cor" value="rosa" id="rosa">
                                    <label for="rosa">
                                        <!--<img src="img/produtos/foto2-rosa.png" alt="rosa">-->
                                        <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png">
                                    </label>

                                    <input type="radio" name="cor" value="azul" id="azul">
                                    <label for="azul">
                                        <!--<img src="img/produtos/foto2-azul.png" alt="azul">-->
                                        <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png">
                                    </label>
                                </fieldset>
                                <fieldset class="tamanhos">
                                    <legend>Escolha o tamanho:</legend>
                                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamamho" oninput="output.value=this.value">
                                    <output name="output">42</output>
                                </fieldset>
                                <input type="submit" class="comprar" value="Comprar">

                            </form>
                        </div>
                        <div class="detalhes">
                            <h2> Detalhes do Produto</h2>
                            <p>
                                <?= $produto["descricao"] ?>
                            </p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Caracteristicas</th>
                                        <th>Detalhe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Modelo</td>
                                        <td>Cardiga</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Algodao e Poliester</td>
                                    </tr>
                                    <tr>
                                        <td>Cores</td>
                                        <td>Azul, Rosa e Verde</td>
                                    </tr>
                                    <tr>
                                        <td>Lavagem</td>
                                        <td>A mao</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <?php include("rodape.php"); ?>
        </body>

        </html>