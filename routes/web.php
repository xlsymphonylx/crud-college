<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

//Grupo de rutas pertenecientes al subfijo category, todo relacionado a category va aqui
Route::prefix('/category')->group(
    function () {
        Route::get('/', function () {

            return view('category.table');
        })->name('categoryIndex'); //esto es la tabla de category 

        Route::get('/register', function () {
            return view('category.register');
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

Route::prefix('/customer')->group(
    function () {
        Route::get('/', function () {

            return view('customer.table');
        })->name('customerIndex'); //esto es la tabla de customer 

        Route::get('/register', function () {
            return view('customer.register');
        })->name('customerRegister'); // formulario de ingreso 

        Route::get('/edit/{id}', function () {
        })->name('customerEdit');/* formulario de editar (difiere de update, en que 
        edit es la forma visual de cambiar datos y update es registrar esos datos cambiados en la bd) */


        // Rutas http, peticiones al servidor
        Route::post('/create', function () {
        })->name('customerCreate'); // ruta http de Create customer

        Route::get('/read', function () {
        })->name('customerRead'); //ruta http de Read customer

        Route::patch('/update/{id}', function () {
        })->name('customerUpdate'); // ruta http de Update customer

        Route::delete('/delete/{id}', function () {
        })->name('customerDelete'); // ruta http de Delete customer
    }
);
