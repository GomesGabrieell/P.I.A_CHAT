<?php
    include'./../../../bd/conexao/conexao_use.php';

    $identificacao = $_GET['identificacao'];
    $chave = $_GET['chave'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $user_name = $_POST['user_name'];

    $pesuisa="UPDATE dados_usuarios SET email = '$email',senha = '$senha',user_name = '$user_name' WHERE id = '$identificacao'";
    $result_pesuisa = mysqli_query($conn_user,$pesuisa);
    $row_pesuisa = mysqli_fetch_assoc($result_pesuisa);
    
    header("Location: ./../../layout/perfil.php?identificacao=$identificacao&chave=$chave");
?>