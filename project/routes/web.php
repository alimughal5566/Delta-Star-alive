<?php

use App\Models\GenaralSettings;
use Illuminate\Support\Facades\Artisan;

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
    $general_settings=GenaralSettings::where('id',1)->get()->first();
    $second_slider=\App\HomeSlider::all();
    $features=\App\Models\Features::all();
    $whatwedo=\App\Models\WhatWeDo::all();
    return view('welcome',compact('general_settings','whatwedo', 'features','second_slider'));
})->name('welcome');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return 'Application cache cleared.';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});
Route::get('email-template', function () {
  return view('emails.quick-quote');
})->name('language');
    Route::get('what/wedo/details/{id}','WhatWeDoController@whatwedoDetails')->name('whatwedo.Details');
    Route::get('portfolio/details/{id}','PortfolioController@portfolioDetails')->name('portfolio.Details');
Route::get('/all/service','GenaralSettingsController@allServices')->name('all.services');
Route::get('/all/projects','GenaralSettingsController@allProjects')->name('all.projects');
Route::get('/about/us','GenaralSettingsController@aboutUs')->name('about.Us');
Route::get('/contect/us','GenaralSettingsController@contectUs')->name('contect.Us');
Route::get('/request/quote','GenaralSettingsController@requestQuote')->name('request.quote');
Route::post('/quick/mail','GenaralSettingsController@quickMail')->name('quick.mail');
Route::post('conuact/us/mail','GenaralSettingsController@contactUsMail')->name('conuact.us.mail');
Route::group(['middleware' => 'auth'], function () {
        Route::group(['admin'], function () {
            Route::get('/general/setting','GenaralSettingsController@index')->name('general.setting');
            Route::post('general/setting/update','GenaralSettingsController@update')->name('general.setting.update');

            Route::get('homepage/slider','GenaralSettingsController@homepageSlider')->name('homepage.slider');
            Route::post('add/new/slider','GenaralSettingsController@addNewSlider')->name('add.new.slider');
            Route::get('edit/slider{id}','GenaralSettingsController@editSlider')->name('edit.slider');
            Route::get('delete/slider/{id}','GenaralSettingsController@deleteSlider')->name('delete.slider');
            Route::post('update/slider','GenaralSettingsController@updateSlider')->name('update.slider');

            Route::get('home/second/slider','GenaralSettingsController@homeSecondSlider')->name('home.second.slider');
            Route::post('add/second/slider','GenaralSettingsController@addSecondSlider')->name('add.second.slider');
            Route::get('edit/second/slider/{id}','GenaralSettingsController@editSecondSlider')->name('edit.second.slider');
            Route::get('delete/second/slider/{id}','GenaralSettingsController@deleteSecondSlider')->name('delete.second.slider');
            Route::post('update/second/slider','GenaralSettingsController@updateSecondSlider')->name('update.second.slider');


            Route::get('home/feature','FeaturesController@homeFeatures')->name('home.features');
            Route::post('add/feature','FeaturesController@addNewFeatures')->name('add.features');
            Route::get('edit/feature/{id}','FeaturesController@editFeatures')->name('edit.features');
            Route::get('delete/feature/{id}','FeaturesController@deleteFeatures')->name('delete.features');
            Route::post('update/feature','FeaturesController@updateFeatures')->name('update.features');

            Route::get('home/what/wedo','WhatWeDoController@homeWhatWeDo')->name('home.whatwedo');
            Route::post('add/what/wedo','WhatWeDoController@addNewWhatWeDo')->name('add.whatwedo');
            Route::get('edit/what/wedo/{id}','WhatWeDoController@editWhatWeDo')->name('edit.whatwedo');
            Route::get('delete/what/wedo/{id}','WhatWeDoController@deleteWhatWeDo')->name('delete.whatwedo');
            Route::post('update/what/wedo','WhatWeDoController@updateWhatWeDo')->name('update.whatwedo');

//            Route::get('home/portfolio','PortfolioController@homePortfolio')->name('home.portfolio');
            Route::get('home/portfolio','PortfolioController@homePortfolio')->name('home.portfolio');
            Route::post('add/portfolio','PortfolioController@addNewPortfolio')->name('add.portfolio');
            Route::get('edit/portfolio/{id}','PortfolioController@editPortfolio')->name('edit.portfolio');
            Route::get('delete/portfolio/{id}','PortfolioController@deletePortfolio')->name('delete.portfolio');
            Route::post('update/portfolio','PortfolioController@updatePortfolio')->name('update.portfolio');

        });


//    Route::get('portfolio-home',  ['as' => 'profile.list', 'uses' => 'PortfolioController@index']);
//    Route::resource('user', 'PortfolioController');

	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
