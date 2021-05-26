<article class="list">
	<div class="image">
		<a href="<?php echo $work->url(); ?>">
		<img src="<?php echo $work->images()->find('thumbnail.jpg')->url() ?>" alt="<?php echo html($work->title()) ?>" />
	</a>
	</div>
	<div class="caption">
		<h2><a href="<?php echo $work->url(); ?>"><?php echo html($work->title()) ?></a></h2>
	  	<div class="services">
	  		<?php echo kirbytext($work->services()) ?>
  		</div>
	</div>
</article>