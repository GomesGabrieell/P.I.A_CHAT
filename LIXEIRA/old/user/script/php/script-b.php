<?php
    include'./../../../bd/conexao/conexao_use.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $pesuisa="SELECT * FROM dados_usuarios WHERE email = '$email' and senha = '$senha'";
    $result_pesuisa = mysqli_query($conn_user,$pesuisa);
    $row_pesuisa = mysqli_fetch_assoc($result_pesuisa);
    $verificado = $row_pesuisa['id'];
    
    if(isset($row_pesuisa)){
        $chave = $row_pesuisa['chave'];
        $identificacao = $row_pesuisa['id'];
        header("Location: ./../../layout/perfil.php?identificacao=$identificacao&chave=$chave");
    }else{
       header("Location: ./../../login.php?resposta=1");
    }
?>