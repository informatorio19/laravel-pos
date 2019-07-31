<?php

// Route::redirect('/', '/articulos');

Route::resource('articulos', 'ArticulosController');

Route::resource('categorias', 'CategoriasController');
