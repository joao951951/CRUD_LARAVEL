<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@getIndex');
    Route::get('projetos', 'ProductController@Index');
    Route::get('projetos/inserir', 'ProductController@getInserir');
    Route::post('projetos/inserir', 'ProductController@postInserir');
    Route::get('projetos/editar/{id}', 'ProductController@getEditar');
    Route::post('projetos/editar/{id}', 'ProductController@postEditar');
    Route::post('projetos/deletar/{id}', 'ProductController@postDeletar');
});
