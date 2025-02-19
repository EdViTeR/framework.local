<!-- №1 №2 №3 -->
<h1><?= $header ?></h1>
<ul>
	<?php foreach ($users as $user): ?>
		<li><?= $user; ?></li>
	<?php endforeach; ?>
</ul>