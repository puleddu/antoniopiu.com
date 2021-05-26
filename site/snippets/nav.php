<nav>
	<div class="prev icons">
		<?php if($page->hasPrevVisible()): ?>
		<a href="<?php echo $page->prevVisible()->url() ?>">Previous</a>
		<?php endif ?>
	</div>
	<div class="list icons">
		<a href="<?php echo $pages->find('works')->url() ?>">Works</a>
	</div>
	<div class="next icons">
		<?php if($page->hasNextVisible()): ?>
		<a href="<?php echo $page->nextVisible()->url() ?>">Next</a>
		<?php endif ?>
	</div>
</nav>