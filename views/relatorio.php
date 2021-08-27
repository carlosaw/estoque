<h1>Produtos abaixo do Mínimo</h1>
<table border="1" width="500">
  <tr>
    <th>Nome do Produto</th>
    <th>Qtd.</th>
    <th>Qtd. Mínima</th>
    <th>Diferença</th>
  </tr>
  <?php foreach($list as $item): ?>
    <tr>
      <td><?php echo $item['name']; ?></td>
      <td><?php echo $item['quantity']; ?></td>
      <td><?php echo $item['min_quantity']; ?></td>
      <td><?php echo (floatval($item['min_quantity']) - floatval($item['quantity'])); ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<!--Prepara pra Impressão-->
<script type="text/javascript">
  window.print();
</script>