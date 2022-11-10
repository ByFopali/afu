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
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
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

    Route::group(['namespace' => 'ZsyList', 'prefix' => 'zsylists'], function () {
        Route::get('/', 'IndexController')->name('admin.zsy_lists.index');
        Route::get('/create', 'CreateController')->name('admin.zsy_lists.create');
        Route::post('/', 'StoreController')->name('admin.zsy_lists.store');
        Route::get('/{zsylist}', 'ShowController')->name('admin.zsy_lists.show');
        Route::get('/{zsylist}/edit', 'EditController')->name('admin.zsy_lists.edit');
        Route::patch('/{zsylist}', 'UpdateController')->name('admin.zsy_lists.update');
        Route::delete('/{zsylist}', 'DeleteController')->name('admin.zsy_lists.delete');
    });

    Route::group(['namespace' => 'RankType', 'prefix' => 'ranktypes'], function () {
        Route::get('/', 'IndexController')->name('admin.rank_types.index');
        Route::get('/create', 'CreateController')->name('admin.rank_types.create');
        Route::post('/', 'StoreController')->name('admin.rank_types.store');
        Route::get('/{ranktype}', 'ShowController')->name('admin.rank_types.show');
        Route::get('/{ranktype}/edit', 'EditController')->name('admin.rank_types.edit');
        Route::patch('/{ranktype}', 'UpdateController')->name('admin.rank_types.update');
        Route::delete('/{ranktype}', 'DeleteController')->name('admin.rank_types.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.categories.index');
        Route::get('/create', 'CreateController')->name('admin.categories.create');
        Route::post('/', 'StoreController')->name('admin.categories.store');
        Route::get('/{category}', 'ShowController')->name('admin.categories.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.categories.delete');
    });

    Route::group(['namespace' => 'Rank', 'prefix' => 'ranks'], function () {
        Route::get('/', 'IndexController')->name('admin.ranks.index');
        Route::get('/create', 'CreateController')->name('admin.ranks.create');
        Route::post('/', 'StoreController')->name('admin.ranks.store');
        Route::get('/{rank}', 'ShowController')->name('admin.ranks.show');
        Route::get('/{rank}/edit', 'EditController')->name('admin.ranks.edit');
        Route::patch('/{rank}', 'UpdateController')->name('admin.ranks.update');
        Route::delete('/{rank}', 'DeleteController')->name('admin.ranks.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.users.index');
        Route::get('/create', 'CreateController')->name('admin.users.create');
        Route::post('/', 'StoreController')->name('admin.users.store');
        Route::get('/{user}', 'ShowController')->name('admin.users.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.users.delete');
    });

});


Auth::routes();

