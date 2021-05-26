<nav class="menu">
    <?php $visible = $pages->visible(); $index = 0; foreach($visible AS $p): ?>
		<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
		<?php if ($index++ < count($visible)) echo '<span class="sep">/</span>'; ?>
    <?php endforeach ?>
</nav>