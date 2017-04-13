<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
  return View::make('hourTracker');
});

Route::get('about', function() {
  return 'ABOUT content';
});

Route::get('about/directions', array('as' => 'directions', function() {
  $theURL = URL::route('directions');
  return "DIRECTIONS go to this URL: $theURL";
}));

Route::any('submit-form', function() {
  return 'Process FROM';
});

Route::get('about/{theSubject}', function($theSubject) {
  return $theSubject.' content goes here.';
});

Route::get('about/classes/{theSubject}', function($theSubject) {
  return "Content on $theSubject";
});

Route::get('challenge/{art}/{subject}', function($art, $subject) {
  return "$art is fun when in the subject of $subject";
});

Route::get('where', function() {
  return Redirect::route('directions');
});
