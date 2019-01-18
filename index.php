<?php 	include('setup.php');?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	
<title><?php echo $page['title'].' | '.$site_title;  ?></title>
	
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include('css.php'); ?>
	
  	<?php include('js.php'); ?>
	
</head>
	
<body>
	
	<div id="wrap">
		
    <?php include('navigation.php'); // main navigation ?>
	
		
    <div class="container">

		 <h1><?php echo $page['header']; ?></h1>
		

		 <?php echo $page['body_formatted']; ?>

	</div>
								
	</div>
	
	<?php include('footer.php'); ?>
	
		
</body>
</html>
