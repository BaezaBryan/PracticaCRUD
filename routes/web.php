<?php
/*comenzamos rutas del crud*/
route::get('/show','poetcontroller@index');
route::get('/insert','poetcontroller@create');
route::get('/detail/{id}','poetcontroller@show');
route::get('/delete','poetcontroller@destroy');
route::post('/save','poetcontroller@store');
route::post('/update','poetcontroller@update');
/*fin de las rutas del crud*/
route::get('/archivo', [
    'uses' => 'ControllerPractica@archivo',
    'as' => 'archivo'
]);
route::get('/', [
    'uses' => 'ControllerPractica@login',
    'as' => 'login'
]);
route::post('/valida', 'ControllerPractica@validarlogin');
