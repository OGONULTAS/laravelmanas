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
Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('dashboard', 'HomeController@index');
    Route::get('dashboard2018', 'HomeController@index2018');
    Route::get('datatables', 'HomeController@datatables');
    Route::get('personel1', 'PersonelController@index');
    Route::get('personeldetay', 'PersonelController@detay');
    Route::get('personeldetay/{id}', 'PersonelController@detay1person');
    Route::get('personeldetaytable', 'PersonelController@personeldetaytable');
    Route::post('personeldetaytable', 'PersonelController@personeldetaytable');
    Route::get('cari', 'CariController@index');
    Route::get('tablecarilist/{id}', 'CariController@tablecarilist');
    Route::get('tablecariaciklist/{id}', 'CariController@tablecariaciklist');
    Route::get('faturano/{id}/{tarih}', 'FaturaController@index');
    Route::post('cariara','CariController@scari');
    Route::post('/personelpost2','PersonelController@ucret');
    Route::get('fatura', 'FaturaController@index');

});
















/*
Route::view('/', 'index');
Route::view('/empty', 'empty');

Route::prefix('components')->group(function(){

    Route::prefix('base')->group(function(){
        Route::view('state', 'components.base.state');
        Route::view('typography', 'components.base.typography');
        Route::view('stack', 'components.base.stack');
        Route::view('tables', 'components.base.tables');
        Route::view('progress', 'components.base.progress');
        Route::view('modal', 'components.base.modal');
        Route::view('alerts', 'components.base.alerts');
        Route::view('popover', 'components.base.popover');
        Route::view('tooltip', 'components.base.tooltip');
        Route::view('blockui', 'components.base.blockui');
        Route::view('spinners', 'components.base.spinners');
        Route::view('scrollable', 'components.base.scrollable');
        Route::view('dropdown', 'components.base.dropdown');
        Route::view('tabs/bootstrap', 'components.base.tabs.bootstrap');
        Route::view('tabs/line', 'components.base.tabs.line');
        Route::view('navs', 'components.base.navs');
        Route::view('lists', 'components.base.lists');
        Route::view('treeview', 'components.base.treeview');
        Route::view('bootstrap-notify', 'components.base.bootstrap-notify');
        Route::view('toastr', 'components.base.toastr');
    });
    Route::prefix('icons')->group(function(){
        Route::view('flaticon', 'components.icons.flaticon');
        Route::view('fontawesome', 'components.icons.fontawesome');
        Route::view('lineawesome', 'components.icons.lineawesome');
        Route::view('socicons', 'components.icons.socicons');
    });
    Route::prefix('buttons')->group(function(){
        Route::view('dropdown', 'components.buttons.dropdown');
        Route::view('group', 'components.buttons.group');
        Route::view('spinner', 'components.buttons.spinner');

        Route::prefix('base')->group(function(){
            Route::view('air', 'components.buttons.base.air');
            Route::view('default', 'components.buttons.base.default');
            Route::view('pill', 'components.buttons.base.pill');
            Route::view('square', 'components.buttons.base.square');
        });
        Route::prefix('icon')->group(function(){
            Route::view('flaticon', 'components.buttons.icon.flaticon');
            Route::view('fontawesome', 'components.buttons.icon.fontawesome');
            Route::view('lineawesome', 'components.buttons.icon.lineawesome');
        });
    });
	Route::prefix('charts')->group(function(){
		Route::view('flotcharts', 'components.charts.flotcharts');
		Route::view('google-charts', 'components.charts.google-charts');
		Route::view('morris-charts', 'components.charts.morris-charts');
		Route::prefix('amcharts')->group(function(){
			Route::view('charts', 'components.charts.amcharts.charts');
			Route::view('maps', 'components.charts.amcharts.maps');
			Route::view('stock-charts', 'components.charts.amcharts.stock-charts');
		});

		Route::view('bootstrap-datepicker', 'components.forms.charts.bootstrap-datepicker');
		Route::view('bootstrap-daterangepicker', 'components.forms.charts.bootstrap-daterangepicker');
		Route::view('bootstrap-datetimepicker', 'components.forms.charts.bootstrap-datetimepicker');
		Route::view('bootstrap-markdown', 'components.forms.charts.bootstrap-markdown');
		Route::view('bootstrap-maxlength', 'components.forms.charts.bootstrap-maxlength');
		Route::view('bootstrap-multipleselectsplitter', 'components.forms.charts.bootstrap-multipleselectsplitter');
		Route::view('bootstrap-select', 'components.forms.charts.bootstrap-select');
		Route::view('bootstrap-selectsplitter', 'components.forms.charts.bootstrap-selectsplitter');
		Route::view('bootstrap-switch', 'components.forms.charts.bootstrap-switch');
		Route::view('bootstrap-timepicker', 'components.forms.charts.bootstrap-timepicker');
		Route::view('bootstrap-touchspin', 'components.forms.charts.bootstrap-touchspin');
		Route::view('clipboard', 'components.forms.charts.clipboard');
		Route::view('dropzone', 'components.forms.charts.dropzone');
		Route::view('input-mask', 'components.forms.charts.input-mask');
		Route::view('ion-range-slider', 'components.forms.charts.ion-range-slider');
		Route::view('nouislider', 'components.forms.charts.nouislider');
		Route::view('recaptcha', 'components.forms.charts.recaptcha');
		Route::view('select2', 'components.forms.charts.select2');
		Route::view('summernote', 'components.forms.charts.summernote');
		Route::view('typeahead', 'components.forms.charts.typeahead');
	});
    Route::prefix('forms')->group(function(){
        Route::prefix('controls')->group(function(){
            Route::view('base', 'components.forms.layouts.base');
            Route::view('checkbox-radio', 'components.forms.layouts.checkbox-radio');
            Route::view('input-group', 'components.forms.layouts.input-group');
            Route::view('switch', 'components.forms.layouts.switch');
        });
        Route::prefix('layouts')->group(function(){
            Route::view('action-bars', 'components.forms.controls.action-bars');
            Route::view('default-forms', 'components.forms.controls.default-forms');
            Route::view('multi-column-forms', 'components.forms.controls.multi-column-forms');
        });
        Route::prefix('validation')->group(function(){
            Route::view('form-controls', 'components.forms.validation.form-controls');
            Route::view('form-widgets', 'components.forms.validation.form-widgets');
            Route::view('states', 'components.forms.validation.states');
        });

        Route::prefix('widgets')->group(function(){
            Route::view('general', 'components.forms.widgets.general');
            Route::view('autosize', 'components.forms.widgets.autosize');
            Route::view('bootstrap-datepicker', 'components.forms.widgets.bootstrap-datepicker');
            Route::view('bootstrap-daterangepicker', 'components.forms.widgets.bootstrap-daterangepicker');
            Route::view('bootstrap-datetimepicker', 'components.forms.widgets.bootstrap-datetimepicker');
            Route::view('bootstrap-markdown', 'components.forms.widgets.bootstrap-markdown');
            Route::view('bootstrap-maxlength', 'components.forms.widgets.bootstrap-maxlength');
            Route::view('bootstrap-multipleselectsplitter', 'components.forms.widgets.bootstrap-multipleselectsplitter');
            Route::view('bootstrap-select', 'components.forms.widgets.bootstrap-select');
            Route::view('bootstrap-selectsplitter', 'components.forms.widgets.bootstrap-selectsplitter');
            Route::view('bootstrap-switch', 'components.forms.widgets.bootstrap-switch');
            Route::view('bootstrap-timepicker', 'components.forms.widgets.bootstrap-timepicker');
            Route::view('bootstrap-touchspin', 'components.forms.widgets.bootstrap-touchspin');
            Route::view('clipboard', 'components.forms.widgets.clipboard');
            Route::view('dropzone', 'components.forms.widgets.dropzone');
            Route::view('input-mask', 'components.forms.widgets.input-mask');
            Route::view('ion-range-slider', 'components.forms.widgets.ion-range-slider');
            Route::view('nouislider', 'components.forms.widgets.nouislider');
            Route::view('recaptcha', 'components.forms.widgets.recaptcha');
            Route::view('select2', 'components.forms.widgets.select2');
            Route::view('summernote', 'components.forms.widgets.summernote');
            Route::view('typeahead', 'components.forms.widgets.typeahead');
        });

    });
});*/

