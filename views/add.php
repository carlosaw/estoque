<h3>Adicionar Produto</h3>

<form method="POST">
  <label>
    Código de Barras:<br/>
    <input type="text" name="cod" required /><br/><br/>
  </label>
  <label>
    Nome do Produto:<br/>
    <input type="text" name="name" required /><br/><br/>
  </label>
  <label>
    Preço do Produto:<br/>
    <input type="text" name="price" required /><br/><br/>
  </label>
  <label>
    Quantidade:<br/>
    <input type="text" name="quantity" required /><br/><br/>
  </label>
  <label>
    Qtd. Mínima:<br/>
    <input type="text" name="min_quantity" required /><br/><br/>
  </label>
  <input type="submit" value="Adicionar Produto" />
</form>