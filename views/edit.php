<h3>Editar Produto</h3>

<form method="POST" class="form">
  <label>
    Código de Barras:<br/>
    <input type="text" name="cod" value="<?php echo $info['cod']; ?>" required /><br/><br/>
  </label>
  <label>
    Nome do Produto:<br/>
    <input type="text" name="name" value="<?php echo $info['name']; ?>" required /><br/><br/>
  </label>
  <label>
    Preço do Produto:<br/>
    <input type="text" class="dinheiro" name="price" value="<?php echo number_format($info['price'], 2, ',', '.'); ?>" required /><br/><br/>
  </label>
  <label>
    Quantidade:<br/>
    <input type="text" class="dinheiro" name="quantity" value="<?php echo number_format($info['quantity'], 2, ',', '.'); ?>" required /><br/><br/>
  </label>
  <label>
    Qtd. Mínima:<br/>
    <input type="text" class="dinheiro" name="min_quantity" value="<?php echo number_format($info['min_quantity'], 2, ',', '.'); ?>" required /><br/><br/>
  </label>
  <input type="submit" value="Salvar" />
</form>