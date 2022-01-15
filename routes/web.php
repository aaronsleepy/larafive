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

Route::get('/', 'WelcomeController@index');

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

/****************************************
 * 사용자 인증 관련 Routes
 ****************************************/
Route::get('/protected', function () {
  $output = new \Symfony\Component\Console\Output\ConsoleOutput();
  $output->writeln(json_encode(session()->all(), JSON_PRETTY_PRINT));
  if (!auth()->check()) {
    return "Who are you?";
  }

  return "Welcome " . auth()->user()->name;
});

//Route::get('/protected', ['middleware' => 'auth', function () {
//  $output = new \Symfony\Component\Console\Output\ConsoleOutput();
//  $output->writeln(json_encode(session()->all(), JSON_PRETTY_PRINT));
////  if (!auth()->check()) {
////    return "Who are you?";
////  }
//  return "Welcome " . auth()->user()->name;
//}]);

Route::get('/auth/login', function () {
  $credentials = [
    'email' => 'aaron@kmong.com',
    'password' => 'password'
  ];

  if(!auth()->attempt($credentials)) {
    return 'Email & password does not match';
  }

  return redirect('protected');
});

Route::get('/auth/logout/', function () {
  auth()->logout();
  return 'See you';
});


/****************************************
 * Default Routes
 ****************************************/
// 영어,숫자로 2자리 이상 5자리 이하로 구성된 경로만 처리
Route::get('/{foo?}', function ($foo = 'bar') {
  return "{$foo}";
})->where('foo', '[0-9a-zA-Z]{2,5}');

/****************************************
 * Resource Routes
 ****************************************/
Route::resource('articles', 'ArticlesController');


///****************************************
// * Database listener
// ****************************************/
//DB::listen(function ($query) {
//  dump($query->sql);
//});
