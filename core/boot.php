<?php 
$app = [];
$app['config'] = require 'config.php';


require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php'; 
require 'core/database/QueryBuilder.php';


// assegna la config database come param del metodo make di Connection stabilendo così una connessione PDO che viene passata
// al construct di QueryBuilder, la nuova istanza viene assegnata a $app['database']

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));