<!DOCTYPE html>
<html>
  <head>
    <title>Pinboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="<?php echo \Pvik\Core\Path::relativePath('~/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo \Pvik\Core\Path::relativePath('~/css/style-' . \Pvik\Core\Config::$config['Version'] .'.css'); ?>" rel="stylesheet" media="screen">
    
  </head>
  <body>
    <?php $currentPage = $this->viewData->get('currentPage'); ?>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="<?php echo \Pvik\Core\Path::relativePath('~/'); ?>">Pinboard</a>
            <ul class="nav">
              <li <?php echo ($currentPage=='home') ? 'class="active"' : '' ?>><a href="<?php echo \Pvik\Core\Path::relativePath('~/'); ?>">Home</a></li>
              <li <?php echo ($currentPage=='create_post') ? 'class="active"' : '' ?>><a href="<?php echo \Pvik\Core\Path::relativePath('~/new/'); ?>">Create Post</a></li>
              <li <?php echo ($currentPage=='search') ? 'class="active"' : '' ?>><a href="<?php echo \Pvik\Core\Path::relativePath('~/search/'); ?>">Search</a></li>
            </ul>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
	    <div class="span8">
	         <?php $this->useContent('Main'); ?>
	    </div>
	    <div class="span4">
	         <?php $this->useContent('Side'); ?>
	    </div>
        </div>
        <div class="row" id="footer">
            <div class="span5 offset7">
                    <p>
                      <small>You can find the source code at <a href="https://github.com/roccosportal/pinboard/">Github</a>. This is version <?php echo \Pvik\Core\Config::$config['Version']?></a>.
                      </small>
                    </p>
            </div>
	</div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo \Pvik\Core\Path::relativePath('~/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo \Pvik\Core\Path::relativePath('~/js/jquery.tagcloud.js'); ?>"></script>
    <script src="<?php echo \Pvik\Core\Path::relativePath('~/js/general-' . \Pvik\Core\Config::$config['Version'] .'.js'); ?>"></script>
  </body>
</html>