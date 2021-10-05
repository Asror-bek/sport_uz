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

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::group([
    'namespace' => 'App\Http\\Controllers\Admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::group([
        'prefix' => 'news',
        'as' => 'news.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "NewsController@index"]);
        Route::get('create', ["as" => "create", "uses" => "NewsController@create"]);
        Route::post('store', ['as' => "store", "uses" => 'NewsController@store']);
        Route::post('store', ["as" => "store", "uses" => 'NewsController@store']);
        Route::get('edit/{news}', ["as" => "edit", "uses" => 'NewsController@edit']);
        Route::post('{news}', ["as" => "update", "uses" => 'NewsController@update']);
        Route::get('{news}', ["as" => "destroy", "uses" => 'NewsController@destroy']);
    });

    Route::group([
        'prefix' => 'teamCategory',
        'as' => 'teamCategory.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "TeamCategoryController@index"]);
        Route::get('create', ["as" => "create", "uses" => "TeamCategoryController@create"]);
        Route::post('store', ['as' => "store", "uses" => 'TeamCategoryController@store']);
        Route::post('store', ["as" => "store", "uses" => 'TeamCategoryController@store']);
        Route::get('edit/{teamCategory}', ["as" => "edit", "uses" => 'TeamCategoryController@edit']);
        Route::post('{teamCategory}', ["as" => "update", "uses" => 'TeamCategoryController@update']);
        Route::get('{teamCategory}', ["as" => "destroy", "uses" => 'TeamCategoryController@destroy']);
    });

    Route::group([
        'prefix' => 'category',
        'as' => 'category.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "CategoryController@index"]);
        Route::get('create', ["as" => "create", "uses" => "CategoryController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'CategoryController@store']);
        Route::get('edit/{category}', ["as" => "edit", "uses" => 'CategoryController@edit']);
        Route::post('{category}', ["as" => "update", "uses" => 'CategoryController@update']);
        Route::get('{category}', ["as" => "destroy", "uses" => 'CategoryController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaCategory',
        'as' => 'ligaCategory.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaCategoryController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaCategoryController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaCategoryController@store']);
        Route::get('edit/{ligaCategory}', ["as" => "edit", "uses" => 'LigaCategoryController@edit']);
        Route::post('{ligaCategory}', ["as" => "update", "uses" => 'LigaCategoryController@update']);
        Route::get('{ligaCategory}', ["as" => "destroy", "uses" => 'LigaCategoryController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaSeason',
        'as' => 'ligaSeason.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaSeasonController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaSeasonController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaSeasonController@store']);
        Route::get('edit/{ligaSeason}', ["as" => "edit", "uses" => 'LigaSeasonController@edit']);
        Route::post('{ligaSeason}', ["as" => "update", "uses" => 'LigaSeasonController@update']);
        Route::get('{ligaSeason}', ["as" => "destroy", "uses" => 'LigaSeasonController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaCalendar',
        'as' => 'ligaCalendar.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaCalendarController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaCalendarController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaCalendarController@store']);
        Route::get('edit/{ligaCalendar}', ["as" => "edit", "uses" => 'LigaCalendarController@edit']);
        Route::post('{ligaCalendar}', ["as" => "update", "uses" => 'LigaCalendarController@update']);
        Route::get('{ligaCalendar}', ["as" => "destroy", "uses" => 'LigaCalendarController@destroy']);
    });

    Route::group([
        'prefix' => 'stateCategory',
        'as' => 'stateCategory.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "StateCategoryController@index"]);
        Route::get('create', ["as" => "create", "uses" => "StateCategoryController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'StateCategoryController@store']);
        Route::get('edit/{stateCategory}', ["as" => "edit", "uses" => 'StateCategoryController@edit']);
        Route::post('{stateCategory}', ["as" => "update", "uses" => 'StateCategoryController@update']);
        Route::get('{stateCategory}', ["as" => "destroy", "uses" => 'StateCategoryController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaPost',
        'as' => 'ligaPost.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaPostController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaPostController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaPostController@store']);
        Route::get('edit/{ligaPost}', ["as" => "edit", "uses" => 'LigaPostController@edit']);
        Route::post('{ligaPost}', ["as" => "update", "uses" => 'LigaPostController@update']);
        Route::get('{ligaPost}', ["as" => "destroy", "uses" => 'LigaPostController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaPostScorer',
        'as' => 'ligaPostScorer.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaPostScorerController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaPostScorerController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaPostScorerController@store']);
        Route::get('edit/{ligaPostScorer}', ["as" => "edit", "uses" => 'LigaPostScorerController@edit']);
        Route::post('{ligaPostScorer}', ["as" => "update", "uses" => 'LigaPostScorerController@update']);
        Route::get('{ligaPostScorer}', ["as" => "destroy", "uses" => 'LigaPostScorerController@destroy']);
    });

    Route::group([
        'prefix' => 'ligaPostLeague',
        'as' => 'ligaPostLeague.',
    ], function() {
        Route::get('', ["as" => "index", "uses" => "LigaPostLeagueController@index"]);
        Route::get('create', ["as" => "create", "uses" => "LigaPostLeagueController@create"]);
        Route::post('store', ["as" => "store", "uses" => 'LigaPostLeagueController@store']);
        Route::get('edit/{ligaPostLeague}', ["as" => "edit", "uses" => 'LigaPostLeagueController@edit']);
        Route::post('{ligaPostLeague}', ["as" => "update", "uses" => 'LigaPostLeagueController@update']);
        Route::get('{ligaPostLeague}', ["as" => "destroy", "uses" => 'LigaPostLeagueController@destroy']);
    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
