<?php snippet('header') ?>
<div class="wrapper">
	<section class="content">
		<?php	
		if ($page->isHomePage() or $page->uid() == 'works'):
			$works = $pages->findByUID("works")->children()->visible();
			if ($page->isHomePage()) $works = $works->filterBy('featured', 'yes');		
			foreach ($works as $work):
				snippet('work-item', array('work' => $work));
			endforeach;
		else:
			if ($page->isChildOf($pages->findByUID('works')->first())): 
				snippet('work');
			else:
				snippet('page');
			endif;
		endif;
		?>
	</section>
	<aside>
		<?php if ($page->isHomePage() or $page->uid() == 'works'): ?>
		<div class="contact"><?php echo kirbytext($site->contact()); ?></div>
		<?php elseif ($page->isChildOf($pages->findByUID('works')->first())): ?>
		<?php snippet('nav'); ?>
		<?php endif; ?>
	</aside>
</div>


<?php snippet('footer') ?>