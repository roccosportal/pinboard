<!DOCTYPE html>
<html>
  <head>
    <title>Pinboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="<?php echo \Pvik\Core\Path::relativePath('~/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo \Pvik\Core\Path::relativePath('~/css/style.css'); ?>" rel="stylesheet" media="screen">
    
  </head>
  <body>
    <div class="container">
	  <div class="row">
	    <div class="span8">
	         <?php $this->useContent('Main'); ?>
	    </div>
	    <div class="span4">
	         <?php $this->useContent('Side'); ?>
	    </div>
	  </div>
	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo \Pvik\Core\Path::relativePath('~/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>