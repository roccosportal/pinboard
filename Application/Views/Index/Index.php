<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/PostList.php')); ?> 
	<div class="pagination">
		<?php 
		$currentPage = $this->viewData->get('CurrentPage'); 
		$pageCount = $this->viewData->get('PageCount'); 
		?>
	  <ul>
	    <li <?php echo ($currentPage == 0) ? 'class="disabled"' : '' ?>><a href="<?php echo \Pvik\Core\Path::relativePath('~/page/' . ($currentPage) . '/'); ?>">Prev</a></li>
	    <?php 
	    for($i = 0; $i < $pageCount; $i++){
	    	?>
	    	<li <?php echo ($currentPage == $i) ? 'class="active"' : '' ?>>
	    		<a href="<?php echo \Pvik\Core\Path::relativePath('~/page/' . ($i + 1) . '/'); ?>"><?php echo ($i + 1);?></a></li>
	    	<?php
	    }
	    ?>
	    <li <?php echo ($currentPage + 1 == $pageCount) ? 'class="disabled"' : '' ?>><a href="<?php echo \Pvik\Core\Path::relativePath('~/page/' . ($currentPage + 2) . '/'); ?>">Next</a></li>
	  </ul>
	</div>
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
	<a href="/new/" class="btn btn-large btn-primary ">Create new post</a>
        <a href="/search/" class="btn btn-large btn-primary ">Search</a>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/Top20Tags.php')); ?> 
<?php $this->endContent(); ?>