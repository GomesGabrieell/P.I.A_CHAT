<?php
  $resposta = $_GET['resposta'];
  if($resposta > 0){$none = 'inline';}else{$none = 'none';}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P I A</title>
    <link rel="stylesheet" href="./../layout/css/2/stylea.css">
</head>
<body>
<div class="login-page" style="display:none" id="tudo_page">
  <div class="form">
    <form class="login-form" action="script/php/script-b.php" method="post">
      <input type="text" placeholder="Email" name="email" require="">
      <p class="exist-email" style="display:<?php echo$none;?>;">Email ou Senhas não batem.</p>
      <input type="password" placeholder="Senha" name="senha" require="">
      <button>ENTRAR</button>
      <p class="message"><a href="./layout/cad.php">CADASTRAR</a></p>
    </form>
  </div>
</div>
<div id="loader" class="loader" style="display: block"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./script/js/loadin.js"></script>
</body>
</html>