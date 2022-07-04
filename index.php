<?php 
// include file boot dove sono inclusi tutti i file e 
// dove viene istanziato un nuovo QueryBuilder con PDO settato
 require 'core/boot.php';  


// Gestione del routing
// carica il metodo statico load di Router con parametro file routes.php
// serve a reindirizzare alla pagina giusta inj base alla requesti_uri inserita

require Router::load('routes.php')->direct(Request::uri(), Request::method());






