<h3>login</h3>
<div class="container">
    <form method="POST">
      Seu número:<br/>
      <input type="text" name="number" /><br/><br/>

      Sua Senha:<br/>
      <input type="password" name="password" /><br/><br/>

      <input type="submit" value="Entrar" />
      
    </form>
    <!-- Se tiver mensagem de erro -->
    <?php if(!empty($msg)): ?>
      <h2><?php echo $msg; ?></h2>
    <?php endif; ?>
  </div>
</div>