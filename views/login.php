<h3>LOGIN</h3>
<div class="container">
  <div class="form">
    <form method="POST">
      Seu número:<br/>
      <input type="text" name="number" /><br/><br/>

      Sua Senha:<br/>
      <input type="password" name="password" /><br/><br/>

      <input type="submit" value="Entrar" />  
    </form>
  </div>
    
    <!-- Se tiver mensagem de erro -->
    <?php if(!empty($msg)): ?>
      <h2><?php echo $msg; ?></h2>
    <?php endif; ?>
</div>