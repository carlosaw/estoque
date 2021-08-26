<h3>Editar Produto</h3>

<form method="POST">
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
    <input type="text" name="price" value="<?php echo $info['price']; ?>" required /><br/><br/>
  </label>
  <label>
    Quantidade:<br/>
    <input type="text" name="quantity" value="<?php echo $info['quantity']; ?>" required /><br/><br/>
  </label>
  <label>
    Qtd. Mínima:<br/>
    <input type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>" required /><br/><br/>
  </label>
  <input type="submit" value="Salvar" />
</form>