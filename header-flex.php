<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Mirror Fashion - Flex</title>

    <style>
        header {
            display: flex;
            justify-content: space-between;
        }
        
        /*Cria mais um flex, dentro da div*/
        header div {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: right;
            
        }
        
        .menu-opcoes ul li {
           display: inline;
           margin-left: 20px;
       }
        
    </style>

</head>

<body>
    <header class="container">

        <h1> <img src="img/logo.png" alt="Mirror Fashion"></h1>
        <div>
            <p class="sacola ">Nenhum item na sacola de compras</p>
            <nav class="menu-opcoes">
                <ul>
                    <li> <a href="# ">Sua Conta</a> </li>
                    <li> <a href="# ">Lista de Desejos </a> </li>
                    <li> <a href="# ">Cartao de Fidelidade </a> </li>
                    <li> <a href="sobre.php ">Sobre</a> </li>
                    <li> <a href="# ">Ajuda </a> </li>

                </ul>
            </nav>
        </div>
    </header>


</body>

</html>