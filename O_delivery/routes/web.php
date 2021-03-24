<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/hello', function () {
//     return redirect("http://localhost/ITP/Zaman-itp/ITP/admin/Add_new_product.php");
// });

// Route::get('/pdf_report', function () {
    
    
//     $pdf = PDF::loadView('pdf.reportPdf');
//     return $pdf->stream();
    
// });

Route::view('here','welcome');

Route::get('/front', function () {
    return view('checkingItem.qcRetriveItem');
});

Route::get('/Add_new_product', function () {
    return view('testing.Add_new_product');
});

//Route::get('/delivery_item', function () {
//    return view('deliveryItem.insertForm');
//});

//routing link for each controller

//Route::post('/add_data','CheckingItemController@save');
Route::resource('CheckingItem','CheckingItemController');
Route::resource('qcwelcome','retriveMainOrdersController');
Route::resource('qcitem','qcitemController');
Route::resource('accepted','acceptedController');
Route::resource('rejected','rejectedController');
Route::resource('deliveryStatus','deliveryStatusController');
Route::resource('deliveryItem','deliveryController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('search', 'retriveMainOrdersController@index1')->name('search');
//Route::get('autocomplete','retriveMainOrdersController@autocomplete')->name('autocomplete');
Route::get('/history', 'qcitemController@edit');


//get routing link for report creating 
Route::get('/pieChartReport', 'reportControlller@viewUserCharts');
Route::get('/pdf_report', 'reportControlller@viewUserChartspdf');








Route::get('/getname/{name}', 'retriveMainOrdersController@getAdminName');

$rrrr = "sss";

View::composer(['*'],function($name){

   
    //$user = "dfdf";
    $user = DB::select('select name from names where id = ?',[1]);
    $name->with('user',$user[0]->name);
});



//
