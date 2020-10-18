<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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
    //return view('welcome');
    return redirect('/about');
});

/*Route::get('/abt', function () {
    return view('about');
});
*/

Route::get('/abt/{id}/{name}', function ($id,$name) {
  //  echo $id . "  " .$name;

    return view('about',['idd'=>$id,'nn'=>$name]);
});


Route::view('cnt','contact');

// Calling User Controller index function
//Route::get('user',[Users::class , 'index']);
Route::get('user/{name}',[Users::class , 'index']);





Route::view('about','about');



























