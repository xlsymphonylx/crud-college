<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Grupo de rutas pertenecientes al subfijo category, todo relacionado a category va aqui
Route::prefix('/category')->group(
    function () {
        Route::get('/', function () {
        })->name('categoryIndex'); //esto es la tabla de category 

        Route::get('/register', function () {
        })->name('categoryRegister'); // formulario de ingreso 

        Route::get('/edit/{id}', function () {
        })->name('categoryEdit');/* formulario de editar (difiere de update, en que 
        edit es la forma visual de cambiar datos y update es registrar esos datos cambiados en la bd) */


        // Rutas http, peticiones al servidor
        Route::post('/create', function () {
        })->name('categoryCreate'); // ruta http de Create category

        Route::get('/read', function () {
        })->name('categoryRead'); //ruta http de Read category

        Route::patch('/update/{id}', function () {
        })->name('categoryUpdate'); // ruta http de Update category
        
        Route::delete('/delete/{id}', function () {
        })->name('categoryDelete'); // ruta http de Delete category
    }
);
