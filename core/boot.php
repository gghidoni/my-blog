<?php 

/*
boot file, with the require of all the necessary files and the setting of 
the connection to the database.
*/

$app = [];
$app['config'] = require 'config.php';

// requires the necessary files 
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php'; 
require 'core/database/QueryBuilder.php';


/* Assigns the database configuration as a parameter of the Connection make method thus establishing 
a PDO connection which is passed to the QueryBuilder construct, 
the new instance is assigned to $ app ['database']
*/
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));