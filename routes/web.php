<?php

use App\Http\Controllers\testController;
use App\Models\Appoinment;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $totalDoctors = Doctor::all()->count();
  $totalPatiants = Patiant::all()->count();
  $totalAppoinments= Appointment::all()->count();
  return view('dashboard', compact('totalDoctors', 'totalPatiants', 'totalAppoinments'));
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
  $patiant = new Patiant();
  $patiant->fname = $request->fname;
  $patiant->lname = $request->lname;
  $patiant->phone = $request->phone;
  $patiant->address = $request->address;
  $patiant->save();
  return 1;
});

Route::get('/appoinment', function () {
  $patiants = Patiant::all();
  $doctors = Doctor::all();

  return view('appoinment', compact('patiants', 'doctors'));
});

Route::post('/appoinment', function (Request $request) {
  $appointment = new Appointment();
  $appointment->patiant_id = $request->patiant;
  $appointment->doctor_id = $request->doctor;
  $appointment->booked_at = $request->bookedAt;
  $appointment->save();
  return 1;
});

Route::get('/patiant_record', function () {
  $patiantRecords = Patiant::all();
  return view('patiant_record', ['patiantRecords' => $patiantRecords]);
});

Route::get('foo', [testController::Class, 'index']);
