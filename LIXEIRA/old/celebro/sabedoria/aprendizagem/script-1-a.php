<?php
    include'./../../../bd/conexao/conexao.php';

    echo$quem = $_GET['identificacao'];echo"<br>";
    echo$modulo = $_GET['modulo'];echo"<br>";
    echo$chave = $_GET['chave'];echo"<br>";

    $sql = "INSERT INTO aprendizagem_palavras_modulo(quem_fez,modulo) VALUES ($quem,$modulo)";
    $result = mysqli_query($conn_pia,$sql);
    header("Location: ./../../../user/layout/aprendizagem.php?identificacao=$quem&chave=$chave");