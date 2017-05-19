<div class="meta">
	<?php if(ICL_LANGUAGE_CODE =='fr') {  ?>	
	<i>Publié le:</i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
	<?php } else { ?>
	<i>Posted on:</i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
	<?php } ?>
</div>