<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css" />
</head>
<body>
  <div class="loginarea"> 
    <form method="POST">
      Seu número:<br/>
      <input type="text" name="number" /><br/><br/>

      Sua Senha:<br/>
      <input type="password" name="password" /><br/><br/>

      <input type="submit" value="Entrar" />  
    </form>
    <!-- Se tiver mensagem de erro -->
    <div class="error">
      <?php if(!empty($msg)): ?>
        <h2><?php echo $msg; ?></h2>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>