<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('dashboard');
});

Route::get('/doctor_registration', function () {
  return view('doctor_registration');
});

Route::get('/patiant_registration', function () {
  return view('patiant_registration');
});

Route::get('/appoinment', function () {
  return view('appoinment');
});
