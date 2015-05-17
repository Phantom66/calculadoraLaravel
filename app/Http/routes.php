<?php

Route::get('/', 'WelcomeController@index');

// Route::get('calculadora', 'HomeController@index');

// Route::get('operador', 'HomeController@show');

Route::resource('calculadora', 'CalculadoraController');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
