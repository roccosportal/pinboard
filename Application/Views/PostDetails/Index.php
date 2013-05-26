<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
	<?php $validationState = $this->viewData->get('ValidationState'); ?>
	<?php $request = $this->viewData->get('Request'); ?>
	<?php $post = $this->viewData->get('Post'); ?>
		<div class="row">
			<div class="media">
					<a class="pull-left" href="/details/<?php echo $post->postId ?>/">
					<img class="media-object" src="<?php echo $post->getGravatarSrc(); ?>">
					</a>
					<div class="media-body">
						<h4 class="media-heading"><?php echo htmlentities($post->name);?></h4>
						<p>
						<small><i class="icon-time"></i> <?php echo $post->created; ?></small>
						<small><i class="icon-comment"></i> <?php echo $post->getCommentsCount(); ?></small>
						<small><i class="icon-tags"></i> <?php echo $post->getTagsListHtml(); ?></small>
						</p>
						<p>
	    				<?php echo htmlentities($post->text);?>
	    				</p>
	    				Comments
	    				<ul class="media-list">
	    					<?php foreach($post->comments->sort('Created') as $comment){ ?>
							  <li class="media">
							    <a class="pull-left" href="#">
							      <img class="media-object" src="<?php echo $comment->getGravatarSrc(); ?>">
							    </a>
							    <div class="media-body">
							      <h4 class="media-heading"><?php echo $comment->name; ?></h4>
							      <p>
							      <small><i class="icon-time"></i> <?php echo $post->created; ?></small>
							      </p>
									<p>
							      <?php echo htmlentities($comment->text); ?>
							      </p>
							    </div>
							  </li>
							 <?php } ?>
						</ul>
						<form method="POST">
						   	<fieldset>
					    		<legend>Create a new comment</legend>


							    <div class="control-group <?php  echo $validationState->getError('Name') ? 'error' : ''; ?>">
								  <label class="control-label">Name*</label>
								  <div class="controls">
								    <input class="input-block-level" type="text" name="name" placeholder="Your name..." value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
								    <span class="help-inline"><?php  echo $validationState->getError('Name'); ?></span>
								  </div>
								</div>


								 <div class="control-group <?php  echo $validationState->getError('Text') ? 'error' : ''; ?>">
								  <label class="control-label">Text*</label>
								  <div class="controls">
								    <textarea class="input-block-level" name="text" placeholder="Your text..."><?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?></textarea>
								    <span class="help-inline"><?php  echo $validationState->getError('Text'); ?></span>
								  </div>
								</div>

							    <button type="submit" name="submit" class="btn">Submit</button>
							  </fieldset>
						</form>
					</div>
			</div>
		</div>
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
<a href="<?php echo \Pvik\Core\Path::relativePath('~/'); ?>">Back home</a>
<?php $this->endContent(); ?>