<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/hello-world' , function() {
    return '<h1>Routing for Website</h1>' ;
})->name('hello-world');

Route::get('/hello/{name?}', function ($name = 'No Name'){
    return '<h1>Hello ' . $name . '</h1>';
})->name('hello');

Route::redirect('/empty', '/');

Route::get('/test-maker', function() {
    return view('test_maker');
});

Route::get('/hello-blade', function(){
    return view('hello', ['data' => 'Data example']);
});

Route::get('/profile', function() {
    return view('profile', [
        'name' => 'Pavel',
        'age' => '20',
        'place' => 'Yogyakarta',
    ]);
});

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/education', fn() => view('education'))->name('education');
Route::get('/projects', fn() => view('projects'))->name('projects');

use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);