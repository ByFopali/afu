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
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace' => 'ZsyType', 'prefix' => 'zsytypes'], function () {
        Route::get('/', 'IndexController')->name('admin.zsy_types.index');
        Route::get('/create', 'CreateController')->name('admin.zsy_types.create');
        Route::post('/', 'StoreController')->name('admin.zsy_types.store');
        Route::get('/{zsytype}', 'ShowController')->name('admin.zsy_types.show');
        Route::get('/{zsytype}/edit', 'EditController')->name('admin.zsy_types.edit');
        Route::patch('/{zsytype}', 'UpdateController')->name('admin.zsy_types.update');
        Route::delete('/{zsytype}', 'DeleteController')->name('admin.zsy_types.delete');
    });
//    Route::group(['namespace' => 'ZsyList', 'prefix' => 'zsylists'], function () {
//        Route::get('/', 'IndexController')->name('admin.zsy_lists.index');
//        Route::get('/create', 'CreateController')->name('admin.zsy_lists.create');
//        Route::post('/', 'StoreController')->name('admin.zsy_lists.store');
//        Route::get('/{zsylist}', 'ShowController')->name('admin.zsy_lists.show');
//        Route::get('/{zsylist}/edit', 'EditController')->name('admin.zsy_lists.edit');
//        Route::patch('/{zsylist}', 'UpdateController')->name('admin.zsy_lists.update');
//        Route::delete('/{zsylist}', 'DeleteController')->name('admin.zsy_lists.delete');
//    });


});


Auth::routes();

