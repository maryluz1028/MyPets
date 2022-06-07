<?php
$class=$args['class'] ?? '';
$src=$args ['src'] ?? '';
$alt=$args ['alt'] ?? '';
?>
<div class="logo <?= $class ?> ">
<?php if($src && $alt):?>
<img class="logo__img" src="<?= $src ?>" alt="<?= $alt ?>">
<?php endif; ?>
</div>