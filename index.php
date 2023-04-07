<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P I A</title>
    <link rel="stylesheet" href="./css/0/index.css">
</head>
<body>
  <div class="login-page" style="display:none" id="tudo_page">
    <div class="form">
      <form class="login-form" action="script/php/script-b.php" method="post">
        <input type="text" placeholder="Email" name="email" require="">
        <input type="password" placeholder="Senha" name="senha" require="">
        <button>ENTRAR</button>
        <p class="message"><a href="cad.php">CADASTRAR</a></p>
      </form>
    </div>
  </div>
  <div id="loader" class="loader" style="display: block"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./js/loadin.js"></script>
</body>
</html>