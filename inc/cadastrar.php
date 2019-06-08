<?php
require_once('conexao.php');

/*CADASTRAR CLIENTE*/
$login = $_POST["login"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$perfil = 3;
$cpf = $_POST["cpf"];
$data = new DateTime();
$datetime = $data->format('Y-m-d H:i:s');
$status = "H";

$pdo=Database::conexao();

$verifica = $pdo->prepare('SELECT * FROM tb_usuario WHERE login = :login');
$verifica->bindValue(":login", $_POST['login']);
$verifica->execute();

//conta o numero de registros obtidos
$rows = $verifica->rowCount();
if($rows>=1){
    $mensagem = 'Já possui usuário com esse login, tente outro!';
    $location = '../cadastro.php';

    // criar e exibir o javascript
    echo '<script>';
        printf("alert('%s');\n", $mensagem);
        if (!empty($location)) {
            printf("window.location.href = '%s'\n", $location);
        }
    echo '</script>';
} else {
    try {
        $stmt = $pdo->prepare('INSERT INTO tb_usuario (login,senha,nome,email,perfil,cpf,data,status) VALUES(:login,:senha,:nome,:email,:perfil,:cpf,:data,:status)');
        $stmt-> execute(array(
        ':login' => $login,
        ':senha' => $senha,
        ':nome' => $nome,
        ':email' => $email,
        ':perfil' => $perfil,
        ':cpf' => $cpf,
        ':data' => $datetime,
        ':status' => $status
        ));

        $mensagem = 'Usuário cadastrado com sucesso!';
        $location = '../index.php';

        // criar e exibir o javascript
        echo '<script>';
            printf("alert('%s');\n", $mensagem);
            if (!empty($location)) {
                printf("window.location.href = '%s'\n", $location);
            }
        echo '</script>';
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>