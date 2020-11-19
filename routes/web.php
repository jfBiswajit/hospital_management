<?php

use App\Models\Doctor;
use App\Models\Patiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('dashboard');
});

Route::get('/doctor_registration', function () {
  return view('doctor_registration');
});

Route::post('/doctor_registration', function (Request $request) {
  $doctor = new Doctor();
  $doctor->fname = $request->fname;
  $doctor->lname = $request->lname;
  $doctor->specialist_in = $request->specialistIn;
  $doctor->available_from = $request->availableFrom;
  $doctor->available_to = $request->availableTo;
  $doctor->save();
  return 1;
});

Route::get('/patiant_registration', function () {
  return view('patiant_registration');
});

Route::post('/patiant_registration', function (Request $request) {
  $doctor = new Patiant();
  $doctor->fname = $request->fname;
  $doctor->lname = $request->lname;
  $doctor->phone = $request->phone;
  $doctor->address = $request->address;
  $doctor->save();
  return 1;
});

Route::get('/appoinment', function () {
  return view('appoinment');
});

Route::get('/patiant_record', function () {
  return view('patiant_record');;
});
