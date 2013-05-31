<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
	<?php $validationState = $this->viewData->get('ValidationState'); ?>
	<?php $request = $this->viewData->get('Request'); ?>
  	<form method="POST">
	   	<fieldset>
    		<legend>Create a new post</legend>
		    <div class="control-group <?php  echo $validationState->getError('Name') ? 'error' : ''; ?>">
			  <label class="control-label">Name <small>(required)</small></label>
			  <div class="controls">
			    <input class="input-block-level" type="text" name="name" placeholder="Your name..." value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
			    <span class="help-inline"><?php  echo $validationState->getError('Name'); ?></span>
			  </div>
			</div>


			 <div class="control-group <?php  echo $validationState->getError('Text') ? 'error' : ''; ?>">
			  <label class="control-label">Text <small>(required)</small></label>
			  <div class="controls">
			    <textarea class="input-block-level" name="text" placeholder="Your text..."><?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?></textarea>
			    <span class="help-inline"><?php  echo $validationState->getError('Text'); ?></span>
			  </div>
			</div>
                    <div class="control-group">
                        <label>Email <small>(NOT required)</small></label>
                        <div class="controls">
                            <span class="help-block"><small>Fill in for automatical notification.</small></span>
                            <input class="input-block-level" type="text" name="email" placeholder="Your email adress..." value="<?php echo $request->isPost('email') ? $request->getPost('email') : ''; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label>Tags <small>(NOT required)</small></label>
                         <div class="controls">
                            <span class="help-block"><small>Comma seperated list: Music, Rock, Punk</small></span>
                            <input class="input-block-level" type="text" name="tags" placeholder="Tags" value="<?php echo $request->isPost('tags') ? $request->getPost('tags') : ''; ?>">
                            
                        </div>
                     </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </fieldset>
	</form>
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
<?php $this->endContent(); ?>