<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCustomer;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerCommande;
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
Route::resource('/product','App\Http\Controllers\ControllerProduct');
Route::resource('/customer','App\Http\Controllers\ControllerCustomer');
Route::resource('/commande','App\Http\Controllers\ControllerCommande');
Route::get('/commande/montanttotal/{CustomerKey}','App\Http\Controllers\ControllerCommande@montanttotal');
Route::get('/commandejointemps/year/{year}','App\Http\Controllers\CommandeJoinTemps@sommerevenue');
Route::get('/commandejointemps/month/{month}','App\Http\Controllers\CommandeJoinTemps@sommerevenuemonth');
Route::get('/commandejointemps/semestre/{semestre}','App\Http\Controllers\CommandeJoinTemps@sommerevenuesemestre');
Route::get('/commandejointemps/trimestre/{trimestre}','App\Http\Controllers\CommandeJoinTemps@sommerevenuetrimestre');
Route::get('/commandejoinproduct/sommerevenus/{ProductKey}','App\Http\Controllers\CommandeJoinProduct@revenusparproduit');
Route::get('/commandejoinproduct/nombrecommandeparproduit/{ProductKey}','App\Http\Controllers\CommandeJoinProduct@nombrecommandeparproduit');
Route::get('/commande/nombreclientparproduit/{ProductKey}','App\Http\Controllers\ControllerCommande@nombreclientparproduit');
Route::resource('/employes','App\Http\Controllers\ControllerEmployes');
Route::get('/commandejoinemployes/revenusparemployes/{EmployeeKey}','App\Http\Controllers\CommandeJoinEmployes@revenusparemployes');
Route::get('/commandejoinemployes','App\Http\Controllers\CommandeJoinEmployes@index');