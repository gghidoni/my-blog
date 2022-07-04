<?php 

/* 
this file is called up by clicking on the single post on 
the index. The queries are initialized and single-post.view 
is invoked.
*/

session_start();

// Get post id from uri
$idPost = intval(preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']));

// Get single post by id
$singlePost = $app['database']->singlePost($idPost);

// Get Tags by post id
$tags = $app['database']->getTags($idPost);

// Get comments by post id
$comments = $app['database']->getComments($idPost);




require 'views/single-post.view.php';
