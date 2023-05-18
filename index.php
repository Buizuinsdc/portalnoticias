<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Acesso ao Portal de Notícias</h3>
                    <h3 class="title has-text-grey"><a href="https://www.linkedin.com/in/matheus-lins-santos-440969208/" target="_blank">Matheus Lins</a></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])){
                        echo '<script>alert("Mensagem de alerta!");</script>';
                    }
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                   
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            <br>
                            
                        </form>
                        <form action="cadastro.php">
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                            <form/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

