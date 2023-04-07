<?php
    include'./../../../bd/conexao/conexao_use.php';

    session_start();
    session_destroy();
    unset( $_SESSION );
    
    header("Location: ./../../login.php");
?>