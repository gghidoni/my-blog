<?php 

/*
 Include file boot where all files are included and where a new QueryBuilder 
 with PDO set is instantiated
*/
 require 'core/boot.php';  

use App\Core\{Router, Request};

// Routing Management
require Router::load('routes.php')->direct(Request::uri(), Request::method());






