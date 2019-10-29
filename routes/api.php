<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('API')->group(function() {

	Route::prefix('linh-vuc')->group(function() {
		Route::get('/', 'LinhVucAPI@DSLinhVuc');
		Route::get('/{id}', 'LinhVucAPI@DSCauHoiTheoLinhVuc');
	});

	Route::prefix('goi-credit')->group(function() {
		Route::get('/', 'GoiCreditAPI@DSGoiCredit');
		Route::get('/{id}', 'GoiCreditAPI@ChiTietGoiCredit');
	});

	Route::get('nguoi-choi/{id}', 'NguoiChoiAPI@ChiTietNguoiChoi');
	Route::get('nguoi-choi', 'NguoiChoiAPI@LayDSNguoiChoi');

	Route::get('/cau-hoi', 'CauHoiAPI@cauHoiTheoLinhVuc');
});