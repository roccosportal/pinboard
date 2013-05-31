<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
<?php $request = $this->viewData->get('request'); ?>
    <form method="POST">
        <fieldset>
            <legend>Search through posts</legend>
            <div class="control-group">
                  <label class="control-label">Text</label>
                  <div class="controls">
                    <input class="input-block-level" type="text" name="text" placeholder="search in text" value="<?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?>">
                  </div>
                  <label class="control-label">Name</label>
                  <div class="controls">
                    <input class="input-block-level" type="text" name="name" placeholder="search in name" value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
                  </div>
                  <label class="control-label">Tags</label>
                  <div class="controls">
                     <span class="help-block">Comma seperated list: Music, Rock, Punk</span>
                    <input class="input-block-level" type="text" name="tags" placeholder="search in tags" value="<?php echo $request->isPost('tags') ? $request->getPost('tags') : ''; ?>">
                  </div>
            </div>
            <button type="submit" name="submit" class="btn">Search</button>
        </fieldset>
    </form>
    <?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/PostList.php')); ?> 
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/TopTags.php')); ?> 
<?php $this->endContent(); ?>