<?php 

$app['database']->insert('comments', [

    'textComment' => $_POST['textComment'],
    'ksPost' => $_POST['ksPost']

]
);


header("Location: post-{$_POST['ksPost']}");