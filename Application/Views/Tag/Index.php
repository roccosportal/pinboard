<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/PostList.php')); ?> 
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/TopTags.php')); ?> 
<?php $this->endContent(); ?>