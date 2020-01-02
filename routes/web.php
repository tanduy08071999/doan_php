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

// Route::get('form',function()
// {
// 	return view('Postform');
// });
// Route::get('Geturl','Mycontroller@Tenlinhvuc');
//gá»­i nháº­n thÃ´ng tin
// Route::post('postForm',['as'=>'postForm','uses'=>'Mycontroller@minhdeotrai']);
Route::get('/', function(){
	return view('Admin');
});

// Route::get('dang-nhap' , 'QuanTriVienController@dangNhap')->name('dang-nhap');
// Route::get('dang-xuat' , 'QuanTriVienController@dangXuat')->name('dang-xuat');
// Route::get('dang-nhap' , 'QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
// Route::middleware('auth')->group(function(){
// 	//Linh Vuc

	Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
	Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
	Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
	Route::middleware('auth')->group(function(){
		Route::group(['prefix'=>'linh-vuc'],function(){ 
			Route::get('/','LinhVucController@index')->name('linh-vuc.danh-sach');
			Route::get('danh-sach-linh-vuc','LinhVucController@index')->name('danh-sach');
			Route::get('them-linh-vuc','LinhVucController@create')->name('them-moi');
			Route::post('them-linh-vuc-xl','LinhVucController@store')->name('them-moi-xl');
			Route::get('sua-linh-vuc/{id}','LinhVucController@show')->name('sua-lv');
			Route::get('/xoa/{id}',['uses' => 'LinhVucController@destroy'])->name('xoa-linh-vuc');
			Route::post('sua-linh-vuc-xl/{id}','LinhVucController@update')->name('update-linhvuc');
	});
	Route::group(['prefix'=>'cau-hoi'],function(){
		Route::get('danh-sach-cau-hoi','CauHoiController@index')->name('ds-cauhoi');
		Route::get('them-cau-hoi','CauHoiController@create')->name('them-cauhoi');
		Route::post('them-cau-hoi','CauHoiController@store')->name('them-cauhoi-xl');
		Route::get('xoa-cau-hoi/{id}','CauHoiController@destroy')->name('xoa-ch');
		Route::get('sua-cau-hoi/{id}','CauHoiController@show')->name('sua-ch');
		Route::post('sua-cau-hoi-xl/{id}','CauHoiController@update')->name('sua-ch-xl');
	});
});


	
	Route::prefix('goi-credit')->group(function() {
	Route::name('goi-credit.')->group(function() {
		Route::get('/', 'GoiCreditController@index')->name('danh-sach');
		Route::get('them-moi', 'GoiCreditController@create')->name('them-moi');
		Route::post('them-moi', 'GoiCreditController@store')->name('xl-them-moi');
		Route::get('cap-nhat/{id}', 'GoiCreditController@edit')->name('cap-nhat');
		Route::post('cap-nhat/{id}', 'GoiCreditController@update')->name('xl-cap-nhat');
		Route::get('xoa/{id}', 'GoiCreditController@destroy')->name('xoa');
	});
});

Route::prefix('goi-credit-trash')->group(function() {
	Route::name('goi-credit-trash.')->group(function() {
		Route::get('/', 'GoiCreditController@onlyTrashed')->name('danh-sach');
		Route::get('khoi-phuc/{id}', 'GoiCreditController@restore')->name('khoi-phuc');
		Route::get('xoa/{id}', 'GoiCreditController@forceDelete')->name('xoa');
	}); 
});

	Route::prefix('cau-hoi-trash')->group(function() {
	Route::name('cau-hoi-trash.')->group(function() {
		Route::get('/', 'CauHoiController@onlyTrashed')->name('danh-sach');
		Route::get('khoi-phuc/{id}', 'CauHoiController@restore')->name('khoi-phuc');
		Route::get('xoa/{id}', 'CauHoiController@forceDelete')->name('xoa');
	}); 
 });
	Route::prefix('linh-vuc-trash')->group(function() {
	Route::name('linh-vuc-trash.')->group(function() {
		Route::get('/', 'LinhVucController@onlyTrashed')->name('danh-sach');
		Route::get('khoi-phuc/{id}', 'LinhVucController@restore')->name('khoi-phuc');
		Route::get('xoa/{id}', 'LinhVucController@forceDelete')->name('xoa');
	}); 

});

	Route::prefix('nguoi-choi')->group(function() {
	Route::name('nguoi-choi.')->group(function() {
		Route::get('/', 'NguoiChoiController@index')->name('danh-sach');
		Route::get('them-moi','NguoiChoiController@create')->name('them-moi');
		Route::post('them-moi','NguoiChoiController@store')->name('xl-them-moi');
		Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa');
		Route::get('cap-nhat/{id}','NguoiChoiController@edit')->name('cap-nhat');
		Route::post('cap-nhat/{id}','NguoiChoiController@update')->name('xl-cap-nhat');
	});	
});


	Route::prefix('nguoi-choi-trash')->group(function() {
	Route::name('nguoi-choi-trash.')->group(function() {
		Route::get('/', 'NguoiChoiController@onlyTrashed')->name('danh-sach');
		Route::get('khoi-phuc/{id}', 'NguoiChoiController@restore')->name('khoi-phuc');
		Route::get('xoa/{id}', 'NguoiChoiController@forceDelete')->name('xoa');
	}); 

});


