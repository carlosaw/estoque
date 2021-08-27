<a href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a><br/><br/>

<a href="<?php echo BASE_URL; ?>relatorio">Relatório</a><br/><br/>

<a href="<?php echo BASE_URL; ?>buy">VENDAS</a><br/><br/>

<fieldset><!--Campo de Busca-->
  <form method="GET">
    <input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca'] : ''; ?>" placeholder="Digite o Código de barras ou o Nome do produto" style="width:100%;height:30px;font-size:18px;" />
  </form>
</fieldset><br/><br/>

<table border="1" width="100%">
  <tr>
    <th>Cód.</th>
    <th>Nome</th>
    <th>Preço Unit.</th>
    <th>Qtd.</th>
    <th>Ações</th>
  </tr>
  <?php foreach($list as $item): ?>
    <tr>
      <td><?php echo $item['cod']; ?></td>
      <td><?php echo $item['name']; ?></td>
      <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
      <td><?php echo $item['quantity']; ?></td>
      <td style="text-align:center;">
        <a href="<?php echo BASE_URL; ?>home/buy/<?php echo $item['id']; ?>">Comprar</a>
        <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script type="text/javascript">
document.getElementById("busca").focus();
</script>