<?php 
    include'./../../../bd/conexao/conexao.php';
    $quem = $_GET['quem'];
    $sala = $_GET['sala'];
    $modulo = $_POST['modulo'];

    $slq_pesq = "select * from aprendizagem_palavras_modulo where quem_fez = $quem";
    $result_slq = mysqli_query($conn_pia,$slq_pesq);
    while($row_slq = mysqli_fetch_assoc($result_slq)){
        $modulo_recebido = $row_slq['modulo'];
        
        if($modulo == $modulo_recebido){
            header("Location: ./../../../user/layout/aprendizagem.php?identificacao=$quem&chave=$sala");
        }else{
            header("Location: script-1-a.php?identificacao=$quem&modulo=$modulo&chave=$sala");
        }
        $i++;
    }