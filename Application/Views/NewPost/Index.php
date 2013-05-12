<?php $this->UseMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->StartContent('Main'); ?>
	<?php $ValidationState = $this->ViewData->Get('ValidationState'); ?>
	<?php $Request = $this->ViewData->Get('Request'); ?>
  	<form method="POST">
	   	<fieldset>
    		<legend>Create a new post</legend>


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

		    
		    <label>Email</label>
		    <span class="help-block">Fill in for automatical notification.</span>
		    <input class="input-block-level" type="text" name="email" placeholder="Your email adress...">
		    <label>Tags</label>
		    <span class="help-block">Comma seperated list: Music, Rock, Punk</span>
		    <input class="input-block-level" type="text" name="tags" placeholder="Tags">
		    <button type="submit" name="submit" class="btn">Submit</button>
		  </fieldset>
	</form>
<?php $this->EndContent(); ?>
<?php $this->StartContent('Side'); ?>
<?php $this->EndContent(); ?>