<?php 

// Include file boot where all files are included and where a new QueryBuilder with PDO set is instantiated
 require 'core/boot.php';  


// Routing Management
require Router::load('routes.php')->direct(Request::uri(), Request::method());






