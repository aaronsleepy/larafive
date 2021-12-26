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

//Route::get('/', function () {
//  return view('welcome')
//    ->with('name', 'aaron');
//});

Route::get('/', function () {
  return view('welcome', [
    'name' => 'aaron',
    'greeting' => 'Hello',
    'items' => ['apple', 'banana', 'tomato']
  ]);
});

// route name 지정
Route::get('/test', [
  'as' => 'test',
  function() {
    return 'test';
  }
]);

Route::get('/test2', function () {
  info('Redirecting from test2 to test...'.'\n');
  return redirect(route('test'));
});

Route::get('/sample', function () {
  return view('sample');
});

// 영어,숫자로 2자리 이상 5자리 이하로 구성된 경로만 처리
Route::get('/{foo?}', function ($foo = 'bar') {
  return "{$foo}";
})->where('foo', '[0-9a-zA-Z]{2,5}');
