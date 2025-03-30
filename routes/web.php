<?php

Route::redirect('/admin', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);
Route::get('/', 'Controller@index')->name('bookAppointments');
Route::post('/save_appointments', 'Controller@store')->name('saveAppointments');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::post('appointments/update_status', 'AppointmentsController@updateStatus')->name('appointments.update_status');
    Route::resource('appointments', 'AppointmentsController');

    Route::get('system-calendar', 'SystemCalendarController@view')->name('systemCalendar');
});
