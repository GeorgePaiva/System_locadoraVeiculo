<?php
include('dashboard.php');
require_once("inc/conexao.php");

$pdo = Database::conexao();
$stmt = $pdo->prepare("SELECT * FROM tb_usuario");
$stmt->execute();
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- CSS -->


</head>

<body>
    <div class="container-fluid" id="users">
        <h1 class="mt-4">TESTANDO TESTANDO</h1>
        <p>Locadora RMGD. Em construção.</p>
        <p>Desculpe o incômodo, voltaremos em breve!</p>
    </div>
</body>

</html>