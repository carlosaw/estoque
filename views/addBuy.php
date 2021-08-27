<h3>Vendas</h3>
<div class="error">
  <?php if(!empty($msg)): ?>
    <h2><?php echo $msg; ?></h2>
  <?php endif; ?>
</div>
<form method="POST">
  <label>
    Código de Barras:<br/>
    <input type="text" name="cod" required /><br/><br/>
  </label>
    Quantidade:<br/>
    <input type="text" name="quantity" required /><br/><br/>
  </label>
  <input type="submit" value="Adicionar Venda" />
</form>