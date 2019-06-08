<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Locadora RMGD</title>
</head>

<body>
    <nav class=" navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">RMGD LocaCar</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="nav-link" href="cadastro.php">Cadastrar <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <div class="modal-dialog text-center">
        <div class="modal-content">

            <div class="col-12 user-img">
                <img src="imgs/im.png">
            </div>

            <form method="POST" action="inc/valida-login.php" class="register-form" id="register-form">

                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon-user" id="ba1"></span></a>
                    <input type="text" name="login" placeholder="  Login" required />
                </div>

                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon-lock" id="ba2"></span></a>
                    <input type="password" name="senha" id="senha" placeholder=" Senha" required />
                </div>
                <div class="form-group form-button">
                    <input type="submit" name="signup" id="signup" class="btn " value="Entrar" />
                </div>
            </form>

            <div class>
                <a href="cadastro.php" class="btn">Novo usuário? Cadastre-se!</a>
            </div>
        </div>
    </div>

</body>

</html>