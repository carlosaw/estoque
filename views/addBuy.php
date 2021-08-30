<h3>Vendas</h3>
<div class="error">
  <?php if(!empty($warning)): ?>
    <h2><?php echo $warning; ?></h2>
  <?php endif; ?>
</div>
<form method="POST" class="form">
  <label>
    Código de Barras:<br/>
    <input type="text" name="cod_product" required /><br/><br/>
  </label>
    Quantidade:<br/>
    <input type="text" name="qtde" required /><br/><br/>
  </label>
  <input type="submit" value="Adicionar Venda" />
</form>