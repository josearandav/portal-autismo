<?php


Route::get('inicio', function () {
    return view('inicio');
});

Route::get('about', function () {
    return view('about');
});


Route::get('https://josearandav.github.io/Tea-Docs/docs/', function () {
    return view();
});


Route::get('contacto', function () {
    return view('contacto');
});
Auth::routes();

Route::get('', 'HomeController@index')->name('inicio');

Route::get('https://josearandav.github.io/Tea-Docs/docs/', function () {
    return view('foro');
});