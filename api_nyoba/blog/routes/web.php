<?php

// User route (selesai)
$router->post('/user', 'UserController@create');
$router->get('/user', 'UserController@index');
$router->get('/user/{id}', 'UserController@show');

// Transaction route (selesai)
$router->post('/transaction', 'TransactionController@createTransaction');
$router->get('/transaction', 'TransactionController@getTransactionAll');
$router->get('/transaction/user', 'TransactionController@getUserTransaction');
$router->get('/transaction/{id}', 'TransactionController@getTransaction');

// vaksin route ()
$router->post('/datevaksin', 'DateVaksinController@createDateVaksin');
$router->get('/datevaksin/date', 'DateVaksinController@getDateVaksin');
$router->get('/datevaksin/{id}', 'DateVaksinController@getTransactionDateVaksin');
$router->get('getvaksinadmin', 'DateVaksinController@getVaksinAdmin');

// admin route (selesai)
$router->post('/admin', 'AdminController@createAdmin');
$router->get('/admin', 'AdminController@getAdmin');
$router->get('/admin/{id}', 'AdminController@getAdminId');
