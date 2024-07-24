<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World";
});


Route::get("hello/{name}", function($nama) {
    echo "Hallo {$nama}, anda sedang belajar laravel, mudah bukan, bukan!";
}); */

// Route::get("hello", "App\Http\Controllers\HelloWorldController@index");


Route::get("hello", [HelloWorldController::class, "index"]);

Route::get("hello/{nama}", [HelloWorldController::class, "perkenalan"]);


use App\Http\Controllers\TodoController; //ini harusnya dikasi atas ya biar memudahkan screnshot tak pindah bawah



Route::get("/todo", [TodoController::class, "index"]);

Route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");
Route::post("/todo", [TodoController::class, "store"])->name("todo.store");

Route::get("/todo/{id}", [TodoController::class, "edit"]);
Route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");


Route::delete("/todo/{id}", [TodoController::class, "destroy"]);
