<!--Recebe o id pelo method=POST e busca no BD -->
<?php
  $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
  $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
  $produto = mysqli_fetch_array($dados);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">


        <!-- Estilo para campos invalidos-->
        <style>
            .form-control:invalid {
                border: 1px solid #cc0000;
            }
            
            /*Remova a margem da navbar*/
            .navbar {
                  margin: 0;
            }
            
            /*um padding no body pro conteúdo não subir*/
            body { padding-top: 70px; }
            
            .navbar .glyphicon {
              color: yellow;
            }

        </style>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
                <button class="navbar-toggle" type="button"
                        data-target=".navbar-collapse" data-toggle="collapse">
                         <span class="glyphicon glyphicon-align-justify"></span>
                          <!--Menu-->
                </button>
            </div>
            <ul class="nav navbar-nav collapse navbar-collapse">
               <!--texto
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
                -->
                <!--Botao-->
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
                
                
            </ul>
        </nav>


        <div class="jumbotron">
            <div class="container">
                <h1> Otima escolha!</h1>
                <p> Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>



        <div class="container">

            <div class="row">

                <div class="col-sm-4 col-lg-3">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua compra</h2>
                        </div>    
                        <div class="panel-body">

                            <dl>
                                <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive hidden-xs">
                                <!--Vem do Banco de Dados-->
                                <dt>Produto</dt>
                                <dd>
                                    <?= $produto["nome"] ?>
                                </dd>

                                <dt>Preço</dt>
                                <dd>
                                    <?= $produto["preco"] ?>
                                </dd>
                                <!--Vem do Banco de Dados-->

                                <!--Selecao do usuario-->
                                <dt>Cor</dt>
                                <dd>
                                    <?= $_POST["cor"] ?>
                                </dd>
                                <dt>Tamanho</dt>
                                <dd>
                                    <?= $_POST["tamanho"] ?>
                                </dd>
                                <!--Selecao do usuario-->
                            </dl>

                        </div>
                    </div>
                </div>
                <form class="col-sm-8 col-lg-9">

                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                            </div>

                            <!--<div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">  
              </div>-->


                            <div class="form-group">
                                <label for="email">Email</label>

                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input data-mask="999.999.999-99" type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked> Quero receber spam da Mirror Fashion
                                </label>
                            </div>

                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>
                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input data-mask="9999 9999 9999 9999 - 999" type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>

                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-thumbs-up"></span> Confirmar Pedido
                    </button>
                </form>

            </div>
        </div>



        <script>
            document.querySelector('input[type=email]').oninvalid = function () {

                // remove mensagens de erro antigas
                this.setCustomValidity("");

                // reexecuta validação
                if (!this.validity.valid) {

                    // se inválido, coloca mensagem de erro
                    this.setCustomValidity("Email inválido");
                }
            };
        </script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/inputmask-plugin.js"></script>
    </body>

    </html>