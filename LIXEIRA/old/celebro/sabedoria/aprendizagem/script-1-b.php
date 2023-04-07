<?php 
    include'./../../../bd/conexao/conexao.php';
    $quem = $_GET['quem'];
    $sala = $_GET['sala'];
    $modulo = $_POST['modulo'];

    $sql = "INSERT INTO aprendizagem_palavras_modulo(id_user,modulo) VALUES ('$quem','$modulo')";
    $result = mysqli_query($conn_pia,$sql);
    header("Location: ./../../../user/layout/aprendizagem.php?identificacao=$quem&chave=$sala");
?>