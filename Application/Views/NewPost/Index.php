<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
<?php $validationState = $this->viewData->get('ValidationState'); ?>
<?php $request = $this->viewData->get('Request'); ?>
<form method="POST">
    <fieldset>
        <legend><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['NewPost']; ?></legend>
        <div class="control-group <?php echo $validationState->getError('Name') ? 'error' : ''; ?>">
            <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Name']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Required']; ?></small></label>
            <div class="controls">
                <input class="input-block-level" type="text" name="name" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['NamePlaceholder']; ?>" value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
                <span class="help-inline"><?php echo $validationState->getError('Name'); ?></span>
            </div>
        </div>


        <div class="control-group <?php echo $validationState->getError('Text') ? 'error' : ''; ?>">
            <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Text']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Required']; ?></small></label>
            <div class="controls">
                <textarea class="input-block-level" name="text" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['TextPlaceholder']; ?>"><?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?></textarea>
                <span class="help-inline"><?php echo $validationState->getError('Text'); ?></span>
            </div>
        </div>
        <div class="control-group">
            <label><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Email']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['NotRequired']; ?></small></label>
            <div class="controls">
                <span class="help-block"><small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['EmailHelp']; ?></small></span>
                <input class="input-block-level" type="text" name="email" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['EmailPlaceholder']; ?>" value="<?php echo $request->isPost('email') ? $request->getPost('email') : ''; ?>">
            </div>
        </div>
        <div class="control-group">
            <label><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Tags']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['NotRequired']; ?></small></label>
            <div class="controls">
                <span class="help-block"><small><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['TagsHelp']; ?></small></span>
                <input class="input-block-level" type="text" name="tags" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['TagsPlaceholder']; ?>" value="<?php echo $request->isPost('tags') ? $request->getPost('tags') : ''; ?>">

            </div>
        </div>
        <input id="age" class="age" type="text" name="age" value="">

        <button type="submit" name="submit" class="btn btn-primary"><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Submit']; ?></button>
    </fieldset>
</form>
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
<h4><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['Info']; ?></h4>
<p><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['InfoText']; ?></p>
<p><?php echo \Pvik\Core\Config::$config['Translations']['NewPost']['GoBack']; ?></p>
<?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/TopTags.php')); ?> 
<?php $this->endContent(); ?>