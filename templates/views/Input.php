<?php
$class = $args['class'] ?? '';
$name = $args['name'] ?? '';
$placeholder = $args['placeholder'] ?? '';
$required = $args['required'] ?? '';
$type= $args ['type'] ?? '';


?>
<input class="input <?= $class ?>" placeholder="<?= $placeholder ?>" type="text" requerid="<?= $required ?>">
