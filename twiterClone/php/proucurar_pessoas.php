<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php?erro=1');
    }
    require_once('qtde.php');

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Twitter clone</title>
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="home.php">
                   <img  src="../imagens/icone_twitter.png" />
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="sair.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><?= $_SESSION['usuario'] ?></h4>
                    <hr />
                    <div class="col md-6">
                        TWEETS <br /><?= $qtde_tweets?>
                    </div>
                    <div class="col md-6">
                        SEGUIDORES<br /><?= $qtde_seguidores?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form id="form_proucurar_pessoas" class="input-group">
                        <input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder=" Encontre outros Usuarios" maxlength="200">
                        <span class="input-group-btn">
                            <button class="btn btn-default" id="btn_buscar_pessoa" type="button">Buscar</button>
                        </span>
                    </form>
                </div>
            </div>
            <div class="list-group" id="pessoas">

            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    
</body>
</html>