<?php $this->UseMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->StartContent('Main'); ?>
	<?php $Posts = $this->ViewData->Get('Posts'); 
	foreach($Posts as $Post){
		?>
		<div class="row">
			<div class="media">
					<a class="pull-left" href="/details/<?php echo $Post->PostId ?>/">
					<img class="media-object" src="<?php echo $Post->getGravatarSrc(); ?>">
					</a>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $Post->Name;?></h4>
						<p>
						<small><i class="icon-time"></i> <?php echo $Post->Created; ?></small>
						<small><i class="icon-comment"></i> <?php echo $Post->GetCommentsCount(); ?></small>
						<small><i class="icon-tags"></i> <?php echo $Post->GetTagsListHtml(); ?></small>
						</p>
						<p>
	    			<?php echo $Post->Text;?>
	    			</p>
	    			<a class="pull-left" href="/details/<?php echo $Post->PostId ?>/">Details</a>
					</div>
			</div>
		</div>
		<?php
	}
	?>
<?php $this->EndContent(); ?>
<?php $this->StartContent('Side'); ?>
	<a href="/new/" class="btn btn-large btn-primary ">Create new post</a>
<?php $this->EndContent(); ?>