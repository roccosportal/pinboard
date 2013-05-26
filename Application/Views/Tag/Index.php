<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/PostList.php')); ?> 
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
	<a href="/new/" class="btn btn-large btn-primary ">Create new post</a>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/Top20Tags.php')); ?> 
<?php $this->endContent(); ?>