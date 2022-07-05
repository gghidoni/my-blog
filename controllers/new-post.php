<?php 

/*
this file is called when you submit the form for inserting a new post. 
A method of the QueryBuilder is used.
*/


session_start();

$app['database']->newPost([

    'titlePost' => $_POST['titlePost'],
    'contentPost' => $_POST['contentPost'],
    'datePost' => date("m.d.y"),
    'ksAuthor' => $_SESSION['idAuthor'],
    'ksCategory' => $_POST['ksCategory'],
    'idTags' => $_POST['idTags']

]
);


header("Location: /");