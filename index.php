<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <!-- Tag que faz ignorar um comportamento antigo em que os mobiles "enganavam" os navegadores passando a eles uma resolucao
        maior do que a nativa de fato.
        Çom essa tag, o navegador descobre a resolucao correto do dispositivo-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mirror Fashion</title>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <!-- So importa o mobile.css se a resolucao for ate 939px -->
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

        <!-- Compatibilidade com IE --!>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>

    <body>
        <?php include("cabecalho.php"); ?>
            <div class="container destaque">
                <section class="busca">
                    <h2>Busca</h2>
                    <form action="http://www.google.com.br/search" id="form-busca">
                        <input type="search" name="q" id="q" />
                        <input type="image" src="img/busca.png" />

                    </form>
                </section>
                <section class="menu-departamentos">
                    <h2>Departamentos</h2>
                    <form>
                        <nav>
                            <ul>
                                <li> <a href="#"> Blusas e Calcas</a>
                                    <ul>
                                        <li><a href="#">Manga Curta</a></li>
                                        <li><a href="#">Manga Comprida</a></li>
                                        <li><a href="#">Camisa Social</a></li>
                                        <li><a href="#">Camisa Casual</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#"> Calcas</a></li>
                                <li> <a href="#"> Saias</a></li>
                                <li> <a href="#"> Vestidos</a></li>
                                <li> <a href="#"> Sapatos</a></li>
                                <li> <a href="#"> Bolsas e Carteiras</a></li>
                                <li> <a href="#"> Acessorios</a></li>
                            </ul>
                        </nav>
                    </form>
                </section>
                <img src="img/destaque-home.png" alt="Promocao Big City Night">

            </div>
            <div class="container paineis">
                <section class="painel novidades">
                    <h2>Novidades</h2>
                    <ol>
                       <!-- <li>
                            <a href="produto.php">
                                <figure><img src="img/produtos/miniatura1.png">
                                    <figcaption>Fuzz Cardigan por R$ 129.90</figcaption>
                                </figure>
                            </a>
                        </li> -->
                        
                      <?php
                        $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");

                        while ($produto = mysqli_fetch_array($dados)):
                      ?>

                      <li>
                        <a href="produto.php?id=<?= $produto["id"] ?>">
                          <figure>
                            <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" 
                                 alt="<?= $produto["nome"] ?>">
                            <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php endwhile; ?>
                      
                    </ol>
                    <button type="button">Mostra Mais</button>
                </section>
                <section class="painel mais-vendidos">
                    <h2>Mais Vendidos</h2>
                    <ol>
                                      <?php
                        $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 6");

                        while ($produto = mysqli_fetch_array($dados)):
                      ?>

                      <li>
                        <a href="produto.php?id=<?= $produto["id"] ?>">
                          <figure>
                            <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" 
                                 alt="<?= $produto["nome"] ?>">
                            <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php endwhile; ?>
                    </ol>
                </section>

            </div>
            <?php include("rodape.php"); ?>
               
                <script src="js/jquery.js"></script>
                <script src="js/home.js"></script>
    </body>