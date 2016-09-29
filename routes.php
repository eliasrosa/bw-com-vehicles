<?php

$except = [
    'except' => ['show']
];

//
Route::resource('vehicles', '\Vehicles\Controllers\VehiclesController', $except);
