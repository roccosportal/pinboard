<?php $this->UseMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->StartContent('Main'); ?>
	<?php $ValidationState = $this->ViewData->Get('ValidationState'); ?>
	<?php $Request = $this->ViewData->Get('Request'); ?>
	<?php $Post = $this->ViewData->Get('Post'); ?>
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
	    				Comments
	    				<ul class="media-list">
	    					<?php foreach($Post->Comments->Sort('Created') as $Comment){ ?>
							  <li class="media">
							    <a class="pull-left" href="#">
							      <img class="media-object" src="<?php echo $Comment->getGravatarSrc(); ?>">
							    </a>
							    <div class="media-body">
							      <h4 class="media-heading"><?php echo $Comment->Name; ?></h4>
							      <p>
							      <small><i class="icon-time"></i> <?php echo $Post->Created; ?></small>
							      </p>
									<p>
							      <?php echo $Comment->Text; ?>
							      </p>
							    </div>
							  </li>
							 <?php } ?>
						</ul>
						<form method="POST">
						   	<fieldset>
					    		<legend>Create a new comment</legend>


							    <div class="control-group <?php  echo $ValidationState->GetError('Name') ? 'error' : ''; ?>">
								  <label class="control-label">Name*</label>
								  <div class="controls">
								    <input class="input-block-level" type="text" name="name" placeholder="Your name..." value="<?php echo $Request->IsPost('name') ? $Request->GetPost('name') : ''; ?>">
								    <span class="help-inline"><?php  echo $ValidationState->GetError('Name'); ?></span>
								  </div>
								</div>


								 <div class="control-group <?php  echo $ValidationState->GetError('Text') ? 'error' : ''; ?>">
								  <label class="control-label">Text*</label>
								  <div class="controls">
								    <textarea class="input-block-level" name="text" placeholder="Your text..."><?php echo $Request->IsPost('text') ? $Request->GetPost('text') : ''; ?></textarea>
								    <span class="help-inline"><?php  echo $ValidationState->GetError('Text'); ?></span>
								  </div>
								</div>

							    <button type="submit" name="submit" class="btn">Submit</button>
							  </fieldset>
						</form>
					</div>
			</div>
		</div>
<?php $this->EndContent(); ?>
<?php $this->StartContent('Side'); ?>
<?php $this->EndContent(); ?>