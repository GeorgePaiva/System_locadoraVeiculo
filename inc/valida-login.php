<?php
session_start();
require_once('conexao.php');

$pdo=Database::conexao();;

$validarlogin = $pdo->prepare("SELECT * FROM tb_usuario WHERE login = :login AND senha = :senha");

$validarlogin->bindValue(":login", $_POST['login']);
$validarlogin->bindValue(":senha", $_POST['senha']);
$validarlogin->execute();

if($validarlogin->rowCount() == 1){
    while($ln = $validarlogin->fetch(PDO::FETCH_ASSOC))
    {
        $_SESSION['id_usuario'] = $ln['id_usuario'];
        $_SESSION['login'] = $ln['login'];
        $_SESSION['senha'] = $ln['senha'];
        $_SESSION['nome'] = $ln['nome'];

        header("Location: ../dashboard.php");
    };
} else {
    // salvar os dados em variáveis
    $mensagem = 'Usuário não cadastrado';
    $location = '../index.php';

    // criar e exibir o javascript
    echo '<script>';
    printf("alert('%s');\n", $mensagem); // <- atenção para as aspas simples
    if (!empty($location)) {
        printf("window.location.href = '%s'\n", $location);
    }
    echo '</script>';
}
?>