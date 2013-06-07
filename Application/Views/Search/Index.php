<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
<?php $request = $this->viewData->get('request'); ?>
    <form method="POST">
        <fieldset>
            <legend><?php echo \Pvik\Core\Config::$config['Translations']['Search']['Search']; ?></legend>
            <div class="control-group">
                  <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['Search']['Text']; ?></label>
                  <div class="controls">
                    <input class="input-block-level" type="text" name="text" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['Search']['TextPlaceholder']; ?>" value="<?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?>">
                  </div>
                  <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['Search']['Name']; ?></label>
                  <div class="controls">
                    <input class="input-block-level" type="text" name="name" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['Search']['NamePlaceholder']; ?>" value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
                  </div>
                  <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['Search']['Tags']; ?></label>
                  <div class="controls">
                     <span class="help-block"><?php echo \Pvik\Core\Config::$config['Translations']['Search']['TagsHelp']; ?></span>
                    <input class="input-block-level" type="text" name="tags" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['Search']['TagsPlaceholder']; ?>" value="<?php echo $request->isPost('tags') ? $request->getPost('tags') : ''; ?>">
                  </div>
            </div>
            <button type="submit" name="submit" class="btn"><?php echo \Pvik\Core\Config::$config['Translations']['Search']['Submit']; ?></button>
        </fieldset>
    </form>
    <?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/PostList.php')); ?> 
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
	<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/TopTags.php')); ?> 
<?php $this->endContent(); ?>