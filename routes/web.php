<?php

use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);

// Feature
Route::get('/productos/stock-alto', [ProductoController::class, 'stockAlto']);
