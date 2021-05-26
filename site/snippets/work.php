<article>
	<?php if ($page->images()->find('cover.jpg')): ?>
	<div class="cover">
		<img src="<?php echo $page->images()->find('cover.jpg')->url() ?>" alt="<?php echo html($page->title()) ?>" width="960px" />
	</div>
	<?php endif; ?>
	
	<?php if ($page->client()): ?>
	<div class="client"><?php echo html($page->client()) ?></div>
	<?php endif; ?>
	<div class="introduction"><?php echo kirbytext($page->introduction()) ?></div>
	<div class="description">
		<div class="text"><?php echo kirbytext($page->text()) ?></div>
		<aside>
			<div class="services">
				<h3>Services included</h3>
				<ul>
				<?php foreach(explode(',', $page->services()) as $service): ?>
					<li><?php echo trim($service); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php if ($page->more()): ?>
			<div class="more">
				<h3>More</h3>
				<?php echo kirbytext($page->more()); ?>
			</div>
			<?php endif; ?>
		</aside>
	</div>
	<div class="showcase">
		<?php foreach($page->images() as $image): if (in_array($image->name(), array('thumbnail', 'cover'))) continue; ?>
		<img src="<?php echo $image->url() ?>" alt="<?php echo html($image->name()) ?>" width="<?php echo $image->width()/2 ?>" />
		<?php endforeach; ?>
	</div>
</article>