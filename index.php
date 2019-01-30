<?php 	include('config/setup.php');?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	
<title><?php echo $page['title'].' | '.$site_title;  ?></title>
	
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include('config/css.php'); ?>
	
  	<?php include('config/js.php'); ?>
	
</head>
	
<body>
	
	<div id="wrap">
		
      <?php include('template/navigation.php'); // main navigation ?>
	
		
    	<div class="container">

	    	<h1><?php echo $page['header']; ?></h1>
		

	    	<?php echo $page['body_formatted']; ?>
		
	   	
		</div>
								
	</div><!-- end wrap -->
	
	<?php include('template/footer.php'); ?>
	
	
	<?php if($debug == 1) { include('widgets/debug.php'); } ?>
	
	
	
	
	
</body>
</html>