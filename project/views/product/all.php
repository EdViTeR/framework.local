<h1><?= $title ?></h1>
<div id="content">
	<table>
		<tr>
			<th>Название</th>
			<th>Цена</th>
			<th>Количество</th>
			<th>Описание</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['name']; ?></td>
			<td><?= $product['price']; ?></td>
			<td><?= $product['quantity']; ?></td>
			<td><?= $product['description']; ?></td>
			<td><a href="/product/<?= $product['id']; ?>/">Перейти к продукту</td> 
		</tr>
		<?php endforeach; ?>
	</table>
</div>