<?php
// Setup File:

# Database Connection Here...
$dbc = mysqli_connect('localhost', 'dev', 'password1', 'DinamicSite') or die('Could not connect because: '.mysqli_connect_error());

# Constants:
define('D_TEMPLATE', 'template');


# functions:
include('data.php');
include('template.php');

$site_title = 'Dinamic Website';

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page']; // set $pageid to equal the value given in
} else {
	
	$pageid = 1; // set $pageid equal to 1 or the home page.
}
	
#page setup
$page = data_page($dbc, $pageid);
	
	

?>