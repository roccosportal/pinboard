<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $this->startContent('Main'); ?>
<?php $validationState = $this->viewData->get('ValidationState'); ?>
<?php $request = $this->viewData->get('Request'); ?>
<?php $post = $this->viewData->get('Post'); ?>
<div class="media">
    <a class="pull-left" href="/details/<?php echo $post->postId ?>/">
        <img class="media-object" src="<?php echo $post->getGravatarSrc(); ?>">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?php echo htmlentities(utf8_decode($post->name)); ?></h4>
        <p>
            <small><i class="icon-time"></i> <?php echo $post->created; ?></small>
            <small><i class="icon-comment"></i> <?php echo $post->getCommentsCount(); ?></small>
            <small><i class="icon-tags"></i> <?php echo $post->getTagsListHtml(); ?></small>
        </p>
        <p>
            <?php echo htmlentities(utf8_decode($post->text)); ?>
        </p>
        <h3>Comments</h3>
        <ul class="media-list">
            <?php foreach ($post->comments->sort('created') as $comment) { ?>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="<?php echo $comment->getGravatarSrc(); ?>">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo htmlentities(utf8_decode($comment->name)); ?></h4>
                        <p>
                            <small><i class="icon-time"></i> <?php echo $post->created; ?></small>
                        </p>
                        <p>
                            <?php echo htmlentities(utf8_decode($comment->text)); ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <form method="POST">
            <fieldset>
                <legend><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['NewComment']; ?></legend>


                <div class="control-group <?php echo $validationState->getError('Name') ? 'error' : ''; ?>">
                    <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Name']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Required']; ?></small></label>
                    <div class="controls">
                        <input class="input-block-level" type="text" name="name" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['NamePlaceholder']; ?>" value="<?php echo $request->isPost('name') ? $request->getPost('name') : ''; ?>">
                        <span class="help-inline"><?php echo $validationState->getError('Name'); ?></span>
                    </div>
                </div>


                <div class="control-group <?php echo $validationState->getError('Text') ? 'error' : ''; ?>">
                    <label class="control-label"><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Text']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Required']; ?></small></label>
                    <div class="controls">
                        <textarea class="input-block-level" name="text" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['TextPlaceholder']; ?>"><?php echo $request->isPost('text') ? $request->getPost('text') : ''; ?></textarea>
                        <span class="help-inline"><?php echo $validationState->getError('Text'); ?></span>
                    </div>
                </div>
                <div class="control-group">
                    <label><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Email']; ?> <small><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['NotRequired']; ?></small></label>
                    <div class="controls">
                        <span class="help-block"><small><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['EmailHelp']; ?></small></span>
                        <input class="input-block-level" type="text" name="email" placeholder="<?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['EmailPlaceholder']; ?>" value="<?php echo $request->isPost('email') ? $request->getPost('email') : ''; ?>">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn"><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Submit']; ?></button>
            </fieldset>
        </form>
    </div>
</div>
<?php $this->endContent(); ?>
<?php $this->startContent('Side'); ?>
    <h4><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['Info']; ?></h4>
     <p><?php echo \Pvik\Core\Config::$config['Translations']['PostDetails']['GoBack']; ?></p>
    <?php include (\Pvik\Core\Path::realPath('~/Application/Views/Partials/TopTags.php')); ?> 
<?php $this->endContent(); ?>