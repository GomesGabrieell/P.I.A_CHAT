<?php 
    include'./../../../bd/conexao/conexao.php';
    $quem = $_GET['quem'];
    $sala = $_GET['sala'];
    $texto = $_POST['texto'];
    $sql = "INSERT INTO cv_pia(pia,usuario,sala,texto) VALUES ('user','$quem','$sala','$texto')";
    $result = mysqli_query($conn_pia,$sql);
    header("Location: ./../../../user/layout/pia.php?identificacao=$quem&chave=$sala");
?>