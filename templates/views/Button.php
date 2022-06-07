
<?php
$class = $args['class'] ?? '';
$id = $args['id'] ?? '';
$link = $args['href'] ?? '';
$icon = $args ['icon'] ?? '';
$text = $args['text'] ?? '';

?>
<buttom class="buttom <?= $class ?>" id="<?=$id ?>">
<?php if($icon):?>
<i class="buttom__icon <?= $icon ?>" id="btnicon"></i>
<?php endif ?>
<?php if($link):?>
    <a href="<?= $link ?>">
    <?php endif; ?>
    <?php if($text): ?>
    <span class="buttom__text"><?= $text ?></span>
    <?php endif; ?>
    <?php if($link):?>
    </a>
    <?php endif; ?>
</buttom>



