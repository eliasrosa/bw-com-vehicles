<?php

$except = [
    'except' => ['show']
];

//
Route::resource('automoveis/veiculos', '\Automoveis\Controllers\VeiculosController', $except);
