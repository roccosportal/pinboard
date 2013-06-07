
<?php 
$topTags = $this->viewData->get('TopTags');
$topTags->sort('text');
?>
<h4><?php echo \Pvik\Core\Config::$config['Translations']['TopTags']['CommonTags']; ?></h4>
<div id="tagcloud">
<?php foreach($topTags as $tag){ ?>
	<a href="<?php echo \Pvik\Core\Path::relativePath('~/tag/' . $tag->text . '/' . $tag->tagId . '/'); ?>" rel="<?php echo $tag->count ?>"><?php echo $tag->text?></a>
 <?php } ?>
</div>
