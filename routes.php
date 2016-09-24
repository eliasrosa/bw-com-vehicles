<?php

$except = [
    'except' => ['show']
];

//
Route::resource('veiculos', '\Veiculos\Controllers\VeiculosController', $except);
