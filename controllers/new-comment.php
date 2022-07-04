<?php 

/* 
this file is called when adding a new comment from the single post page.
*/


// add new comment query
$app['database']->insert('comments', [

    'textComment' => $_POST['textComment'],
    'ksPost' => $_POST['ksPost']

]
);

// redirect to the post page of the added comment
header("Location: post-{$_POST['ksPost']}");