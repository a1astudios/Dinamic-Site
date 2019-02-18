<?php
// Setup File:

error_reporting(0);

# Database Connection:
include('config/connection.php');

# Constants:
define('D_TEMPLATE', 'template');


# functions:
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

# Site Setup
$debug = data_settings_value($dbc, 'debug-status');

$path = get_path();

$site_title = 'Dinamic Website';

if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '' ) {
	
	//$path['call_parts'][0] = 'home'; // set $pageid to equal the value given in the url
	header('location: home');
} 
	
#page setup
$page = data_page($dbc, $path['call_parts'][0]);



?>