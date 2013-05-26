
<?php $top20Tags = $this->viewData->get('Top20Tags');?>
<ul class="unstyled">
<?php foreach($top20Tags as $tag){ ?>
	<li><a href="<?php echo \Pvik\Core\Path::relativePath('~/tag/' . $tag->text . '/' . $tag->tagId . '/'); ?>"><?php echo $tag->text?> (<?php echo $tag->count ?>)</a></li>
 <?php } ?>
</ul>