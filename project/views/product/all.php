<!-- №4 -->
<table>
<tr>
	<th>name</th>
	<th>price</th>
	<th>quantity</th>
	<th>category</th>
</tr>
<?php foreach ($products as $product): ?>
	<tr>
	<td><?= $product['name'] ?></td>
	<td><?= $product['price'] ?></td>
	<td><?= $product['quantity'] ?></td>
	<td><?= $product['category'] ?></td>
	</tr>
<?php endforeach; ?>
</table>