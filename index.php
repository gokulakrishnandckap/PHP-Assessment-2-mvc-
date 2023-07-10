<?php


    require 'router.php';

    $router = new routers();


    $router->get('/','view');
    $router->post('/add','adding');
    $router->post('/table','showing');
    
    $router->post('/store','create');
    $router->post('/insertcolumns','read');
    // $router->delete('/delete','delete');
    // $router->post('/edit','edit');
    // $router->put('/update','update');






    $router->checking($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);