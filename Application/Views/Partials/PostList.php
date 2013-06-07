<ul class="media-list">
    <?php
    $posts = $this->viewData->get('Posts');
    if ($posts->count() == 0) {
        ?><p class="lead"><?php echo \Pvik\Core\Config::$config['Translations']['PostList']['NoPosts']; ?></p><?php
    }
    $posts->loadList('tagsPosts'); // perfomance optimation
    foreach ($posts as $post) {
    ?>
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
                <a class="pull-left" href="<?php echo \Pvik\Core\Path::relativePath('~/details/' . $post->postId . '/') ?>"><?php echo \Pvik\Core\Config::$config['Translations']['PostList']['Details']; ?></a>
            </div>
        </div>
        <?php
    }
    ?>
</ul>