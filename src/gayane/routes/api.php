<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Employee;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customers', function(){
    return Customer::all();
});

Route::get('customers/{id}', function($id){
    return Customer::find($id);
});

Route::post('customers', function(Request $request){
    return Customer::create($request->all);
});

Route::delete('customers/{id}',function($id){
    Customer::find($id)->delete();
    return 204;
});


Route::get('employees', function(){
    return Employee::all();
});

Route::get('employees/{id}', function($id){
    return Employee::find($id);
});

Route::post('employees', function(Request $request){
    return Employee::create($request->all);
});

Route::delete('employees/{id}',function($id){
    Employee::find($id)->delete();
    return 204;
});

Route::get('orders', 'OrderController@index');
Route::get('orders/{id}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('order/{id}', 'OrderController@update');
Route::delete('order/{id}', 'OrderController@delete');