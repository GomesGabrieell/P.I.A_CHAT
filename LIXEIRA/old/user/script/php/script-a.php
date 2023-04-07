<?php
    include'./../../../bd/conexao/conexao_use.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $chave = md5(date('h:i:s'));

    $pesuisa="SELECT * FROM dados_usuarios WHERE email = '$email'";
    $result_pesuisa = mysqli_query($conn_user,$pesuisa);
    $row_pesuisa = mysqli_fetch_assoc($result_pesuisa);
    $verificado = $row_pesuisa['id'];
    
    if($verificado != 0){
        header("Location: ./../../layout/cad.php?resposta=1");
    }else{
        $sql="INSERT INTO dados_usuarios (user_name,email,senha,chave) VALUE('Não_Informado','$email','$senha','$chave')";
        $result = mysqli_query($conn_user,$sql);
        header("Location: ./../../login.php");


        $sql="INSERT INTO dados_usuarios (user_name,email,senha,chave) VALUE('Não_Informado','$email','$senha','$chave')";
        $result = mysqli_query($conn_user,$sql);
        header("Location: ./../../login.php");
    }
?>