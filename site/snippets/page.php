<article>
	<?php if ($page->images()->find('cover.jpg')): ?>
	<div class="cover">
		<img src="<?php echo $page->images()->find('cover.jpg')->url() ?>" alt="<?php echo html($page->title()) ?>" width="960px" />
	</div>
	<?php endif; ?>

	<?php if ($page->subtitle()): ?>
	<div class="subtitle"><?php echo html($page->subtitle()) ?></div>
	<?php endif; ?>
	
	<?php if ($page->introduction()): ?>
	<div class="introduction"><?php echo kirbytext($page->introduction()) ?></div>
	<?php endif; ?>
	
	<div class="columns">
		<div class="text"><?php echo kirbytext($page->text()) ?></div>
		<aside>
			<div class="aside">
				<?php echo kirbytext($page->elsewhere()); ?>
			</div>
			
			<div class="aside">
				<?php echo kirbytext($page->contacts()); ?>
			</div>
			
			<?php if ($page->images()->find('antonio.jpg')): ?>
			<div class="portrait aside">
				<img src="<?php echo $page->images()->find('antonio.jpg')->url() ?>" alt="<?php echo html($page->title()) ?>" width="100%" />
				<div class="caption"><?php echo kirbytext($page->portrait()); ?></div>
			</div>
			<?php endif; ?>
		</aside>
	</div>
</div>
</article>