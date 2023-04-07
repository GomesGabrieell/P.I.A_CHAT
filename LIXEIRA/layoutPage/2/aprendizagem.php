<?php 	
  include './../../bd/conexao/conexao_use.php';
  include './../../bd/conexao/conexao.php';
  $identificacao = $_GET['identificacao'];
  $chave = $_GET['chave'];
  
  $pesq_fato="SELECT*FROM dados_usuarios WHERE id ='$identificacao'";
  $resposta_fato = mysqli_query($conn_user,$pesq_fato);
  $row_resposta = mysqli_fetch_assoc($resposta_fato);
  $user_name = $row_resposta['user_name'];
  $email = $row_resposta['email'];
  $senha = $row_resposta['senha'];
  $chave_resebida = $row_resposta['chave'];

  if($chave_resebida != $chave){
    header("Location: ./../login.php");
  }
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P I A</title>
    <!--<link rel="stylesheet" href="./../../layout/css/2/stylea.css">-->
    <link rel="stylesheet" href="./../../layout/css/2/style_aprendizagem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
a{text-decoration:none;}
</style>
</head>
<body>
<header>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="perfil.php?identificacao=<?php echo$identificacao;?>&chave=<?php echo$chave?>">PERFIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page"  href="aprendizagem.php?identificacao=<?php echo$identificacao;?>&chave=<?php echo$chave?>">APRENDIZAGEM</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pia.php?identificacao=<?php echo$identificacao;?>&chave=<?php echo$chave?>">P I A</a>
    </li>
    <li class="nav-item" style="margin-left:95%;margin-top:-30px;" title="SAIR">
      <a href="./../script/php/script-e.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
      </a>
    </li>
  </ul>
</header>
<div class="cria"><br>
  <P>CRIE UM MODULO DE APRENDIZAGEM</P>
  <form id='buscar' action="./../../celebro/sabedoria/aprendizagem/script-1.php?quem=<?php echo$identificacao;?>&sala=<?php echo$chave;?>" method="POST">
    <div class="box">
      <!--<input type="text" name="search" placeholder="Criar..." />-->
      <select name="modulo">
        <option value="0">SELECIONE ...</option>
        <option value="1">INICIO DE UMA CONVERSA</option>
        <option value="2">QUESTIONAMENTOS</option>
        <option value="3">DESEMVOLVIMENTO DA CONVERSA</option>
        <option value="4">FINALIZAR CONVERSA</option>
        <option value="5">FAÇA VOCE MESMO</option>
      </select>
      <button type="submit" class="button">CRIAR MODULO DE APRENDIZAGEM</button>
    </div>
  </form>
<section>
<?php
  echo"<div>";
    $sql_mostra_msg="SELECT * FROM aprendizagem_palavras_modulo WHERE quem_fez =$identificacao";
    $resposta_sql=mysqli_query($conn_pia,$sql_mostra_msg);
   
    echo"<ul class='list-group'>"."<br>";
      echo"<li class='list-group-item active'>";  
        echo"<div class='$var'><p>".'LISTA DE MODULOS DE APRENDIZAGEM SELECIONE PARA INICIAR O PROCESSO DE APRENDIZAGEM'."</p>";
      echo"</li>";
    echo"</ul>";
    while($row_respos=mysqli_fetch_assoc($resposta_sql)){
      //$var =$row_respos['pia'];

      $controle = $row_respos['modulo'];
      if($controle == '1'){
        $nome = 'INICIO DE UMA CONVERSA';
      }
      if($controle == '2') {
        $nome = 'QUESTIONAMENTOS';
      }
      if($controle == '3') {
        $nome = 'DESEMVOLVIMENTO DA CONVERSA';
      }
      if($controle == '4') {
        $nome = 'FINALIZAR CONVERSA';
      }
      if($controle == '5') {
        $nome = 'FAÇA VOCE MESMO';
      }

      echo"<ul class='list-group'>";
        echo"<a href='#' target='_blank'>";
          echo"<li class='list-group-item'>";  
            echo"<div class='$var'><p>".$nome."</p>";
          echo"</li>";
        echo"</a>";
      echo"</ul>";
      $l++;
    }
  echo"</div>";
?>
</section>
</body>
<script>
$(document).ready(function() {
    $('input').keyup(function(event) {
        if (event.which === 1)
        {
            event.preventDefault();
            $('form').submit();
        }
    });
});
</script>
<div id="loader" class="loader" style="display: block"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./../script/js/loadin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</html>